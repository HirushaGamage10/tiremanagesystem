<!-- filepath: resources/views/TireRequest/approvalview.blade.php -->
<x-app-layout>
<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

  <!-- Header -->
  @include('layouts.header')

  <!-- Main Wrapper -->
  <div class="flex flex-1 overflow-hidden flex-col sm:flex-row">

    <!-- Sidebar -->
    @include('layouts.side3')

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]">

      <a href="{{ route('tirerequest.approval') }}" class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 mb-4 w-max">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
        </svg>
        <span>Back</span>
      </a>

      <div class="bg-white rounded-[30px] shadow p-4 sm:p-6 sm:px-16">
        <h2 class="text-xl sm:text-2xl font-extrabold mb-6 mt-2 text-blue-800">Tire Request Approval</h2>

        @if(session('success'))
          <div class="mb-4 text-green-700 bg-green-100 border border-green-400 rounded px-4 py-2">
            {{ session('success') }}
          </div>
        @endif

        <form class="space-y-4" method="POST" action="{{ route('tirerequest.sectionapprove', $request->id) }}">
          @csrf
          <div class="grid grid-cols-1 gap-4">

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Vehicle Number</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->vehicle->vehicle_number ?? '' }}" readonly />
            </div>
            
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Vehicle Brand</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->vehicle->brand ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Vehicle Department</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->vehicle->department ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Vehicle Model</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->vehicle->model ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">User Section</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->user_section ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Delivery place - Name of the office</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->delivery_place_office ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Delivery place - Town</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->delivery_place_town ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Last Tire Replacement Date</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->last_replacement_date ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Make of Existing Tire</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->existing_tire_make ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Tire Size Required</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->tire_size_required ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Tire Brand Required</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->tire_brand_required ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Total Price</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->total_price ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Warranty Distance</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->warranty ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">No. of Tires Required</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->number_of_tires ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Cost Centre</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->cost_center ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Present km Reading</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->present_km_reading ?? '' }}" readonly />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Km at previous tire replacement</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->previous_km_reading ?? '' }}" readonly />
            </div>
            <!-- Tire Wear Pattern -->
            <div class="flex flex-col sm:flex-row sm:items-start sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-2 sm:mb-0">Tire Wear Pattern</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2" value="{{ $request->tire_wear_pattern ?? '' }}" readonly />
            </div>
            <!-- Comments -->
            <div class="flex flex-col md:flex-row md:items-start md:space-x-4 space-y-2 md:space-y-0">
              <label class="md:w-1/3 font-medium text-sm mt-1">Comments</label>
              <textarea class="flex-1 border rounded-lg px-4 py-2 bg-gray-200" rows="3" readonly>{{ $request->comment ?? '' }}</textarea>
            </div>
            <!-- Section Officer Comments -->
            <div class="flex flex-col md:flex-row md:items-start md:space-x-4 space-y-2 md:space-y-0">
              <label class="md:w-1/3 font-medium text-sm mt-1">Section Officer Comments</label>
              <textarea name="supervisor_comments" class="flex-1 border rounded-lg px-4 py-2 bg-gray-200" rows="3">{{ $request->sectionApproval->supervisor_comments ?? '' }}</textarea>
            </div>
            <!-- Approve Service No -->
            <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-2 md:space-y-0">
              <label class="md:w-1/3 font-medium text-sm">Approve Section Officer Service No</label>
              <input type="text" name="officer_services_number" class="flex-1 border rounded-full px-4 py-2 bg-gray-200" value="{{ $request->sectionApproval->officer_services_number ?? '' }}" />
            </div>
            <!-- Uploaded Images with Lightbox -->
            @if($request->images)
              <div class="flex flex-col md:flex-row md:items-start md:space-x-4 space-y-2 md:space-y-0">
                <label class="md:w-1/3 font-medium text-sm mt-1">Uploaded Images</label>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-2 flex-1">
                  @foreach(json_decode($request->images, true) as $img)
                    <div class="border rounded-lg p-1 bg-gray-100 flex items-center justify-center">
                      <img src="{{ asset('storage/' . $img) }}" class="object-cover h-20 w-20 rounded cursor-pointer hover:scale-105 transition"
                           alt="Tire Image"
                           onclick="showImageModal('{{ asset('storage/' . $img) }}')">
                    </div>
                  @endforeach
                </div>
              </div>
            @endif
          </div>

          <div class="flex justify-end space-x-4 pt-6">
            <button type="submit" name="status" value="approved"
              class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-full">
              Approval
            </button>
            <button type="submit" name="status" value="rejected"
              class="bg-red-500 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-full">
              Reject
            </button>
          </div>
        </form>
      </div>
    </main>
  </div>

  <!-- Modal for Image Preview -->
  <div id="imageModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70 hidden">
    <span class="absolute top-6 right-8 text-white text-3xl cursor-pointer" onclick="closeImageModal()">&times;</span>
    <img id="modalImage" src="" class="max-h-[80vh] max-w-[90vw] rounded-lg shadow-2xl border-4 border-white" alt="Preview">
  </div>

  <script>
    function showImageModal(src) {
      document.getElementById('modalImage').src = src;
      document.getElementById('imageModal').classList.remove('hidden');
    }
    function closeImageModal() {
      document.getElementById('imageModal').classList.add('hidden');
      document.getElementById('modalImage').src = '';
    }
    document.getElementById('imageModal').addEventListener('click', function(e) {
      if (e.target === this) closeImageModal();
    });
  </script>

  <script src="{{ asset('assets/js/script.js') }}"></script>
  
</body>
</x-app-layout>