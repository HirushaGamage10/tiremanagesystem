<!-- filepath: resources/views/TireRequest/approval.blade.php -->
<x-app-layout>

<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

  <!-- Header -->
  @include('layouts.header')
  <!-- Main Content Wrapper -->
  <div class="flex flex-col flex-1 overflow-hidden sm:flex-row">

    <!-- Sidebar -->
    @include('layouts.side3')

    <!-- Main Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]">
      <div class="bg-white rounded-[30px] shadow p-4 sm:p-6">
        <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 mb-6">Department Tire Requests - Pending Section Approval</h2>
        @if(session('success'))
          <div class="mb-4 text-green-700 bg-green-100 border border-green-400 rounded px-4 py-2">
            {{ session('success') }}
          </div>
        @endif
        <div class="overflow-x-auto">
          <table class="min-w-full border border-gray-200">
            <thead>
              <tr class="bg-blue-800 text-white text-left">
                <th class="px-4 py-2 border">Vehicle No</th>
                <th class="px-4 py-2 border">Requested By</th>
                <th class="px-4 py-2 border">Tire Size</th>
                <th class="px-4 py-2 border">Tire Brand</th>
                <th class="px-4 py-2 border">No. of Tires</th>
                <th class="px-4 py-2 border">Status</th>
                <th class="px-4 py-2 border">Date</th>
                <th class="px-4 py-2 border">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($requests as $req)
                <tr class="text-gray-700">
                  <td class="px-4 py-2 border">{{ $req->vehicle->vehicle_number ?? '-' }}</td>
                  <td class="px-4 py-2 border">{{ $req->user->full_name ?? '-' }}</td>
                  <td class="px-4 py-2 border">{{ $req->tire_size_required }}</td>
                  <td class="px-4 py-2 border">{{ $req->tire_brand_required }}</td>
                  <td class="px-4 py-2 border">{{ $req->number_of_tires }}</td>
                  <td class="px-4 py-2 border">
                    <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-sm">Pending</span>
                  </td>
                  <td class="px-4 py-2 border">{{ $req->created_at ? $req->created_at->format('Y-m-d') : '-' }}</td>
                  <td class="px-4 py-2 border">
                    <a href="{{ route('tirerequest.approvalview', $req->id) }}" class="bg-green-700 text-white px-3 py-1 rounded text-sm">View</a>
                  </td>
                </tr>
              @endforeach
              @if($requests->isEmpty())
                <tr>
                  <td colspan="8" class="text-center py-4">No pending section approval tire requests found.</td>
                </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</x-app-layout>