<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TireRequest;
use App\Models\MechanicalApprovalCheck;
use Illuminate\Support\Facades\Auth;

class TransportController extends Controller
{
    public function viewEvaluation()
    {
        $requests = TireRequest::with(['vehicle', 'user'])
            ->where('section_approval_status', 'approved')
            ->where(function($q) {
                $q->whereNull('mechanic_approval_status')
                ->orWhere('mechanic_approval_status', 'pending');
            })
            ->orderByDesc('created_at')
            ->get();

        return view('Transport.viewevaluation', compact('requests'));
    }

    public function evaluationView($id)
    {
        $request = TireRequest::with(['vehicle', 'user'])->findOrFail($id);
        $mechanical = MechanicalApprovalCheck::where('request_id', $id)->first();
        return view('Transport.evaluation', compact('request', 'mechanical'));
    }

    public function evaluationSubmit(Request $request, $id)
    {
        $request->validate([
            'warranty_state' => 'required|string',
            'incorrect_alignment' => 'required|string',
            'detective_steering_system' => 'required|string',
            'detective_suspension' => 'required|string',
            'purchase_tires' => 'required|string',
            'mechanic_comments' => 'nullable|string',
            'mechanic_officer_services_number' => 'nullable|string',
            'approval_status' => 'required|in:approved,rejected',
        ]);

        // Save to mechanical_approval_checks table
        MechanicalApprovalCheck::updateOrCreate(
            ['request_id' => $id],
            [
                'user_id' => Auth::id(),
                'warranty_state' => $request->warranty_state,
                'incorrect_alignment' => $request->incorrect_alignment,
                'detective_steering_system' => $request->detective_steering_system,
                'detective_suspension' => $request->detective_suspension,
                'purchase_tires' => $request->purchase_tires,
                'mechanic_comments' => $request->mechanic_comments,
                'mechanic_officer_services_number' => $request->mechanic_officer_services_number,
                'approval_status' => $request->approval_status,
                'updated_at' => now(),
            ]
        );

        
        $tireRequest = TireRequest::findOrFail($id);
        if ($request->approval_status === 'approved') {
            $tireRequest->mechanic_approval_status = 'approved';
        } else {
            $tireRequest->mechanic_approval_status = 'rejected';
        }
        $tireRequest->save();

        return redirect()->route('transport.evaluation')->with('success', 'Evaluation ' . ucfirst($request->approval_status) . ' successfully!');
    }

    public function afterEvaluation()
    {
        $requests = \App\Models\TireRequest::with(['vehicle', 'user'])
            ->where('section_approval_status', 'approved')
            ->whereIn('mechanic_approval_status', ['approved', 'rejected'])
            ->orderByDesc('created_at')
            ->get();

        return view('Transport.afterevaluation', compact('requests'));
    }






    //Approval part
    public function viewTransport()
    {
        $requests = \App\Models\TireRequest::with(['vehicle', 'user'])
            ->where('section_approval_status', 'approved')
            ->where('mechanic_approval_status', 'approved')
            ->whereNull('transport_approval_status')
            ->orderByDesc('created_at')
            ->get();

        return view('Transport.viewtransport', compact('requests'));
    }





}