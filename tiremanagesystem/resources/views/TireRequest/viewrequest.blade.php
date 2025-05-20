<x-app-layout>
<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content Wrapper -->
    <div class="flex flex-col md:flex-row flex-1 overflow-hidden">

        
        <!-- Sidebar -->
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
                    id="searchInput"
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
                    <table class="min-w-full border border-gray-200">
                        <thead>
                            <tr class="bg-blue-800 text-white text-left">
                                <th class="px-4 py-2 border">Vehicle No</th>
                                <th class="px-4 py-2 border">Driver</th>
                                <th class="px-4 py-2 border">Tire Size</th>
                                <th class="px-4 py-2 border">Type</th>
                                <th class="px-4 py-2 border">Position</th>
                                <th class="px-4 py-2 border">Status</th>
                                <th class="px-4 py-2 border">Date</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <tr class="text-gray-700">
                                <td class="px-4 py-2 border">WP-CAD-4567</td>
                                <td class="px-4 py-2 border">DVR0003</td>
                                <td class="px-4 py-2 border">195/65R15</td>
                                <td class="px-4 py-2 border">Radial</td>
                                <td class="px-4 py-2 border">Front Left</td>
                                <td class="px-4 py-2 border">
                                    <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-sm">Pending</span>
                                </td>
                                <td class="px-4 py-2 border">2025-04-29</td>
                            </tr>
                           
                            <!-- More rows can be added here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    
</body>

</x-app-layout>