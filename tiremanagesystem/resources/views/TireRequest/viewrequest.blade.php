<!-- filepath: resources/views/TireRequest/viewrequest.blade.php -->
<x-app-layout>
<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

    <!-- Header -->
    @include('layouts.header')
    <div class="flex flex-col flex-1 overflow-hidden sm:flex-row">
        @include('layouts.side1')
        
        <!-- Main Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]">
            <div class="bg-white rounded-[30px] shadow p-4 sm:p-6">

                <!-- Title and Search -->
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 sm:mb-6">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 mb-4 md:mb-0">Your Tire Requests</h2>
                    <div class="relative w-full md:w-80">
                        <input
                            type="text"
                            id="requestSearchInput" onkeyup="filterTable('requestTable', 'requestSearchInput')"
                            placeholder="Search by Vehicle No, Department, Brand..."
                            class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 6.65a7.5 7.5 0 010 10.6z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table id="requestTable" class="min-w-full border border-gray-200">
                        <thead>
                            <tr class="bg-blue-800 text-white text-left">
                                <th class="px-4 py-2 border">Request Code</th>
                                <th class="px-4 py-2 border">Vehicle No</th>
                                <th class="px-4 py-2 border">Department</th>
                                <th class="px-4 py-2 border">Tire Size</th>
                                <th class="px-4 py-2 border">Tire Brand</th>
                                <th class="px-4 py-2 border">Tire Wear Pattern</th>
                                <th class="px-4 py-2 border">Section Approval</th>
                                <th class="px-4 py-2 border">Mechanical Approval</th>
                                <th class="px-4 py-2 border">Transport Approval</th>
                                <th class="px-4 py-2 border">Date</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @forelse($requests as $req)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-2 border">{{ $req->request_code }}</td>
                                    <td class="px-4 py-2 border">{{ $req->vehicle->vehicle_number ?? '-' }}</td>
                                    <td class="px-4 py-2 border">{{ $req->vehicle->department ?? '-' }}</td>
                                    <td class="px-4 py-2 border">{{ $req->tire_size_required }}</td>
                                    <td class="px-4 py-2 border">{{ $req->tire_brand_required }}</td>
                                    <td class="px-4 py-2 border">{{ $req->tire_wear_pattern }}</td>
                                    <!-- Section Approval Status -->
                                    <td class="px-4 py-2 border">
                                        @php
                                            $status = $req->section_approval_status ?? 'pending';
                                        @endphp
                                        @if($status == 'approved')
                                            <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-sm">Approved</span>
                                        @elseif($status == 'rejected')
                                            <span class="bg-red-200 text-red-800 px-2 py-1 rounded text-sm">Rejected</span>
                                        @else
                                            <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-sm">Pending</span>
                                        @endif
                                    </td>
                                    <!-- Mechanical Approval Status -->
                                    <td class="px-4 py-2 border">
                                        @php
                                            $status = $req->mechanical_approval_status ?? 'pending';
                                        @endphp
                                        @if($status == 'approved')
                                            <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-sm">Approved</span>
                                        @elseif($status == 'rejected')
                                            <span class="bg-red-200 text-red-800 px-2 py-1 rounded text-sm">Rejected</span>
                                        @else
                                            <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-sm">Pending</span>
                                        @endif
                                    </td>
                                    <!-- Transport Approval Status -->
                                    <td class="px-4 py-2 border">
                                        @php
                                            $status = $req->transport_approval_status ?? 'pending';
                                        @endphp
                                        @if($status == 'approved')
                                            <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-sm">Approved</span>
                                        @elseif($status == 'rejected')
                                            <span class="bg-red-200 text-red-800 px-2 py-1 rounded text-sm">Rejected</span>
                                        @else
                                            <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-sm">Pending</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2 border">{{ $req->created_at ? $req->created_at->format('Y-m-d') : '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center py-4">No tire requests found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</x-app-layout>