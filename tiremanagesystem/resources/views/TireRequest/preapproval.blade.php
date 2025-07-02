<!-- filepath: resources/views/TireRequest/preapproval.blade.php -->
<x-app-layout>

<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content Wrapper -->
    <div class="flex flex-1 overflow-hidden flex-col sm:flex-row">

        <!-- Sidebar -->
        @include('layouts.side3')

        <!-- Main Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]">
            <div class="bg-white rounded-[30px] shadow p-4 sm:p-6">

                <!-- Title + Search Bar -->
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 sm:mb-6">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 mb-4 md:mb-0">Section Approved/Rejected Tire Requests</h2>

                    <!-- Search Bar -->
                    <div class="relative w-full md:w-80">
                        <input
                        type="text"
                        id="preapprovalSearchInput" onkeyup="filterTable('preapprovalTable', 'preapprovalSearchInput')"
                        placeholder="Search by Vehicle No, Driver..."
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
                    <table id="preapprovalTable" class="min-w-full border border-gray-200">
                        <thead>
                            <tr class="bg-blue-800 text-white text-left">
                                <th class="px-4 py-2 border">Vehicle No</th>
                                <th class="px-4 py-2 border">Requested By</th>
                                <th class="px-4 py-2 border">Tire Size</th>
                                <th class="px-4 py-2 border">Tire Brand</th>
                                <th class="px-4 py-2 border">No. of Tires</th>
                                <th class="px-4 py-2 border">Section Approval Status</th>
                                <th class="px-4 py-2 border">Date</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            @forelse($requests as $req)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-2 border">{{ $req->vehicle->vehicle_number ?? '-' }}</td>
                                    <td class="px-4 py-2 border">{{ $req->user->full_name ?? '-' }}</td>
                                    <td class="px-4 py-2 border">{{ $req->tire_size_required }}</td>
                                    <td class="px-4 py-2 border">{{ $req->tire_brand_required }}</td>
                                    <td class="px-4 py-2 border">{{ $req->number_of_tires }}</td>
                                    <td class="px-4 py-2 border">
                                        @if($req->section_approval_status == 'approved')
                                            <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-sm">Approved</span>
                                        @elseif($req->section_approval_status == 'rejected')
                                            <span class="bg-red-200 text-red-800 px-2 py-1 rounded text-sm">Rejected</span>
                                        @endif
                                    </td>
                                    <td class="px-4 py-2 border">{{ $req->created_at ? $req->created_at->format('Y-m-d') : '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">No section-approved or rejected tire requests found.</td>
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