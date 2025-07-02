<x-app-layout>

<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

  <!-- Header -->
   @include('layouts.header')

  <!-- Main Layout -->
  <div class="flex flex-col md:flex-row flex-1 overflow-hidden">

    <!-- Sidebar -->
    @include('layouts.side2')

    <!-- Main Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]" style="background-image: url('{{ asset('assets/images/tire13.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
      <div class="bg-white rounded-[30px] shadow p-4 sm:p-6">


        <!-- Title, Search & Add Button -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
          <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 mb-4 md:mb-0">Tire Details</h2>
          <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
 

            <div class="relative w-full sm:w-80">
                <input id="tireSearchInput" onkeyup="filterTable('tireTable', 'tireSearchInput')" placeholder="Search by Tire Brand, Size..." class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 6.65a7.5 7.5 0 010 10.6z" />
                  </svg>
                </div>
            </div>
            <button onclick="toggleForm()" class="bg-green-700 text-white px-10 py-2 rounded-full hover:bg-green-800 text-sm sm:text-base shadow">
              + Add Tire
            </button>
          </div>
        </div>
        @if(session('success'))
          <div class="mb-4 text-green-700 bg-green-100 border border-green-400 rounded px-4 py-2">
            {{ session('success') }}
          </div>
        @endif

        <!-- Tire Form (Initially Hidden) -->
        <div id="tireForm" class="hidden bg-gray-100 p-4 rounded-xl mb-6 border border-gray-300">
          <form method="POST" action="{{ route('tire.store') }}">
            @csrf
            <h3 class="text-lg font-bold mb-4 text-blue-900 ">Add Tire Details</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

              <!-- Tire Size Select -->
              <select name="size" id="tire_size" class="border p-2 rounded w-full" required>
                <option value="" disabled selected>Select Tire Size</option>
                @foreach($sizes as $size)
                  <option value="{{ $size }}">{{ $size }}</option>
                @endforeach
              </select>

              <!-- Tire Brand Select -->
              <select name="brand" id="tire_brand" class="border p-2 rounded w-full" required>
                <option value="" disabled selected>Select Tire Brand</option>
              </select>

              <!-- Supplier Select (readonly) -->
              <select name="supplier_id" id="supplier_id" class="border p-2 rounded w-full" required readonly>
                <option value="" disabled selected>Select Supplier</option>
              </select>


              <input type="text" name="price" placeholder="Total Price" class="border p-2 rounded w-full" required />

              <input type="text" name="warranty_distance" placeholder="Warranty Distance" class="border p-2 rounded w-full" required />

              <input type="text" name="reference_no" placeholder="Reference No" class="border p-2 rounded w-full" required />

              <input type="date" name="date" class="border p-2 rounded w-full" required />
            </div>
            <div class="mt-4 flex justify-end">
              <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Submit</button>
            </div>
          </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
          <table id="tireTable" class="min-w-full border border-gray-200">
            <thead>
              <tr class="bg-blue-800 text-white text-left">
                <th class="px-4 py-2 border">Tire Id</th>
                <th class="px-4 py-2 border">Reference No</th>
                <th class="px-4 py-2 border">Tire Size</th>
                <th class="px-4 py-2 border">Tire Brand</th>
                <th class="px-4 py-2 border">Total Price</th>
                <th class="px-4 py-2 border">Warranty Distance</th>
                <th class="px-4 py-2 border">Date</th>
                <th class="px-4 py-2 border">Supplier</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tires as $tire)
                <tr class="text-gray-700">
                  <td class="px-4 py-2 border">{{ $tire->id }}</td>
                  <td class="px-4 py-2 border">{{ $tire->reference_no }}</td>
                  <td class="px-4 py-2 border">{{ $tire->size }}</td>
                  <td class="px-4 py-2 border">{{ $tire->brand }}</td>
                  <td class="px-4 py-2 border">{{ $tire->price }}</td>
                  <td class="px-4 py-2 border">{{ $tire->warranty_distance }}</td>
                  <td class="px-4 py-2 border">{{ $tire->date }}</td>
                  <td class="px-4 py-2 border">{{ $tire->supplier->name ?? '' }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <script>
    function toggleForm() {
      document.getElementById('tireForm').classList.toggle('hidden');
    }

    // Dynamic selects
    document.addEventListener('DOMContentLoaded', function() {
      const sizeSelect = document.getElementById('tire_size');
      const brandSelect = document.getElementById('tire_brand');
      const supplierSelect = document.getElementById('supplier_id');

      sizeSelect.addEventListener('change', function() {
        fetch('{{ route('ajax.getBrandsBySize') }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({ size: this.value })
        })
        .then(res => res.json())
        .then(brands => {
          brandSelect.innerHTML = '<option value="" disabled selected>Select Tire Brand</option>';
          brands.forEach(brand => {
            brandSelect.innerHTML += `<option value="${brand}">${brand}</option>`;
          });
          supplierSelect.innerHTML = '<option value="" disabled selected>Select Supplier</option>';
        });
      });

      brandSelect.addEventListener('change', function() {
        fetch('{{ route('ajax.getSupplierBySizeBrand') }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          body: JSON.stringify({ size: sizeSelect.value, brand: this.value })
        })
        .then(res => res.json())
        .then(supplier => {
          supplierSelect.innerHTML = '';
          if (supplier) {
            supplierSelect.innerHTML = `<option value="${supplier.id}" selected>${supplier.name}</option>`;
          } else {
            supplierSelect.innerHTML = '<option value="" disabled selected>No supplier found</option>';
          }
        });
      });
    });
  </script>

  <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</x-app-layout>
