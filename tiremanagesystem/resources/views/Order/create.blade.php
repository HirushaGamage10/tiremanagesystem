

<!-- filepath: resources/views/Order/create.blade.php -->
<x-app-layout>
<body class="bg-gradient-to-br from-blue-50 to-blue-200 min-h-screen flex items-center justify-center py-10">
  <div class="w-full max-w-5xl mx-auto">
    <!-- Back Button -->
    <div class="mb-6">
      <a href="{{ route('transport.afterapproval') }}"
         class="inline-flex items-center px-5 py-2 bg-white hover:bg-blue-100 text-blue-700 rounded-lg font-semibold shadow transition-all border border-blue-200">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Back to Approved Requests
      </a>
    </div>
    <div class="bg-white rounded-3xl shadow-xl flex flex-col md:flex-row overflow-hidden">
      <!-- Left: Main Content -->
      <div class="flex-1 p-8 md:p-12">
        <h2 class="text-3xl font-bold text-blue-900 mb-8 tracking-tight">Place Tire Order</h2>
        <!-- User Info -->
        <div class="flex items-center gap-4 mb-6">
          <img
            src="{{ $tireRequest->user->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($tireRequest->user->image) ? asset('storage/' . $tireRequest->user->image) : 'https://randomuser.me/api/portraits/men/75.jpg' }}"
            alt="Profile"
            class="w-14 h-14 rounded-full border-2 border-blue-400 shadow object-cover"
          />
          <div>
            <div class="font-semibold text-blue-900 text-lg">{{ $tireRequest->user->full_name }}</div>
            <div class="text-gray-500 text-sm">{{ $tireRequest->user->email }}</div>
          </div>
        </div>
        <!-- Request Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
          <div>
            <div class="text-xs text-gray-500">Request Code</div>
            <div class="font-semibold text-blue-800">{{ $tireRequest->request_code }}</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Vehicle No</div>
            <div class="font-semibold text-blue-800">{{ $tireRequest->vehicle->vehicle_number }}</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Driver Phone</div>
            <div class="font-semibold text-blue-800">{{ $tireRequest->user->phone_number ?? '-' }}</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Request Date</div>
            <div class="font-semibold text-blue-800">{{ $tireRequest->created_at ? $tireRequest->created_at->format('Y-m-d') : '-' }}</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Tire Size</div>
            <div class="font-semibold text-blue-800">{{ $tireRequest->tire_size_required }}</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Tire Brand</div>
            <div class="font-semibold text-blue-800">{{ $tireRequest->tire_brand_required }}</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">No. of Tires</div>
            <div class="font-semibold text-blue-800">{{ $tireRequest->number_of_tires }}</div>
          </div>
          <div>
            <div class="text-xs text-gray-500">Tire Wear Pattern</div>
            <div class="font-semibold text-blue-800">{{ $tireRequest->tire_wear_pattern ?? '-' }}</div>
          </div>
        </div>
        <!-- Supplier Form -->
        <form method="POST" action="{{ route('order.store', $tireRequest->id) }}" class="mt-8">
          @csrf
          <div class="mb-6">
            <label class="block mb-2 font-semibold text-gray-700">Select Supplier</label>
            <select name="supplier_id" id="supplierSelect" class="w-full border border-blue-300 rounded-lg p-3 focus:ring-2 focus:ring-blue-400" required>
              <option value="">Select Supplier</option>
              @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}"
                  data-email="{{ $supplier->email }}"
                  data-phone="{{ $supplier->phone_number }}"
                >
                  {{ $supplier->name }} ({{ $supplier->brand }}, {{ $supplier->tire_size }})
                </option>
              @endforeach
            </select>
            <!-- Supplier Info -->
            <div id="supplierInfo" class="mt-4 hidden bg-blue-50 border border-blue-200 rounded-lg p-4">
              <div class="text-sm text-blue-900 font-semibold mb-2">Supplier Contact</div>
              <div class="text-xs text-gray-500">Email:</div>
              <div id="supplierEmail" class="font-semibold text-blue-800 mb-2"></div>
              <div class="text-xs text-gray-500">Phone:</div>
              <div id="supplierPhone" class="font-semibold text-blue-800"></div>
            </div>
          </div>
          <div class="flex justify-end">
            <button type="submit" class="bg-gradient-to-r from-blue-700 to-blue-500 text-white px-8 py-3 rounded-lg font-bold shadow hover:from-blue-800 hover:to-blue-600 transition-all">
              Place Order
            </button>
          </div>
        </form>
      </div>
      <!-- Right: Sticky Summary Card -->
      <div class="w-full md:w-80 bg-blue-50 border-l border-blue-100 flex-shrink-0 flex flex-col justify-between p-6 sticky top-10">
        <div>
          <h3 class="text-lg font-bold text-blue-700 mb-4">Order Summary</h3>
          <ul class="space-y-2 text-blue-900 text-sm">
            <li><span class="font-semibold">Vehicle:</span> {{ $tireRequest->vehicle->vehicle_number }}</li>
            <li><span class="font-semibold">Tire Size:</span> {{ $tireRequest->tire_size_required }}</li>
            <li><span class="font-semibold">Brand:</span> {{ $tireRequest->tire_brand_required }}</li>
            <li><span class="font-semibold">Qty:</span> {{ $tireRequest->number_of_tires }}</li>
            <li><span class="font-semibold">Requested:</span> {{ $tireRequest->created_at ? $tireRequest->created_at->format('Y-m-d') : '-' }}</li>
          </ul>
        </div>
        <div class="mt-8">
          <img src="{{ asset('assets/images/tire9.jpeg') }}" alt="Tire" class="rounded-xl w-full h-28 object-cover shadow">
        </div>
      </div>
    </div>
  </div>
  <script>
    // Show supplier info when selected
    document.addEventListener('DOMContentLoaded', function () {
      const select = document.getElementById('supplierSelect');
      const info = document.getElementById('supplierInfo');
      const email = document.getElementById('supplierEmail');
      const phone = document.getElementById('supplierPhone');
      select.addEventListener('change', function () {
        const option = select.options[select.selectedIndex];
        if (option.value) {
          email.textContent = option.getAttribute('data-email') || '-';
          phone.textContent = option.getAttribute('data-phone') || '-';
          info.classList.remove('hidden');
        } else {
          info.classList.add('hidden');
        }
      });
    });
  </script>
</body>
</x-app-layout>