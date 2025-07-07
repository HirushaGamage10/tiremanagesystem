<!-- filepath: resources/views/Transport/transportpreapproval.blade.php -->
<x-app-layout>

<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content Wrapper -->
    <div class="flex flex-1 overflow-hidden flex-col sm:flex-row">

        <!-- Sidebar -->
        @include('layouts.side5')

        <!-- Main Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]">
            <div class="bg-white rounded-[30px] shadow p-4 sm:p-6">

                <!-- Title + Search Bar -->
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-4 sm:mb-6">
                    <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 mb-4 md:mb-0"> Tire Orders</h2>

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
                    <table class="min-w-full border">
                        <thead>
                            <tr class="bg-blue-800 text-white">
                            <th class="px-4 py-2 border">Request Code</th>
                            <th class="px-4 py-2 border">Vehicle No</th>
                            <th class="px-4 py-2 border">Supplier</th>
                            <th class="px-4 py-2 border">Status</th>
                            <th class="px-4 py-2 border">Ordered At</th>
                            <th class="px-4 py-2 border">Arrived At</th>
                            <th class="px-4 py-2 border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                            <td class="border px-4 py-2">{{ $order->request->request_code }}</td>
                            <td class="border px-4 py-2">{{ $order->request->vehicle->vehicle_number }}</td>
                            <td class="border px-4 py-2">{{ $order->supplier->name }}</td>
                            <td class="border px-4 py-2">
                                @if($order->order_status == 'ordered')
                                <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-sm">Ordered</span>
                                @elseif($order->order_status == 'arrived')
                                <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-sm">Arrived</span>
                                @else
                                <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded text-sm">{{ ucfirst($order->order_status) }}</span>
                                @endif
                            </td>
                            <td class="border px-4 py-2">{{ $order->ordered_at }}</td>
                            <td class="border px-4 py-2">{{ $order->arrived_at }}</td>
                            <td class="border px-4 py-2">
                                @if($order->order_status == 'ordered')
                                <form method="POST" action="{{ route('order.arrived', $order->id) }}">
                                    @csrf
                                    <button type="submit" class="bg-green-700 text-white px-3 py-1 rounded text-sm">Mark as Arrived</button>
                                </form>
                                @else
                                <span class="text-green-700 font-bold">Completed</span>
                                @endif
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</x-app-layout>