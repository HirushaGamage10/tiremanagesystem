<aside class="w-full sm:w-64 p-4 bg-white relative shadow z-10">
      <div class="absolute inset-0 bg-cover bg-center opacity-40 blur-sm" style="background-image: url('{{ asset('assets/images/background3.png') }}');"></div>
      <div class="relative z-10 mt-4 sm:mt-8 flex flex-col sm:items-center space-y-4 sm:space-y-6">
        <a href="{{ route('transport.viewtransport') }}" class="block w-full text-center bg-green-600 text-white py-2 rounded-[10px] hover:bg-green-700 text-sm sm:text-base">Transport Approval</a>
        <a href="{{ route('transport.afterapproval') }}" class="block w-full text-center bg-blue-700 text-white py-2 rounded-[10px] hover:bg-blue-800 text-sm sm:text-base">Approval Requests</a>
      </div>
    </aside>