<!-- filepath: resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Profile Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body class="h-full w-full relative flex items-center justify-center px-4 py-8 bg-cover bg-center min-h-screen overflow-hidden" style="background-image: url('{{ asset('assets/images/background3.png') }}');">

  <div class="absolute top-6 left-6 flex flex-col items-start z-10">
    <a href="{{ url('/') }}">
      <img src="{{ asset('assets/images/logo2.png') }}" class="h-[80px]" alt="Logo" />
    </a>
  </div>
  <div class="absolute inset-0 backdrop-blur bg-black/30 z-0"></div>
  <div class="relative z-10 flex items-center justify-center min-h-screen ease-out forwards">
    <div class="bg-white bg-opacity-60 backdrop-blur-lg rounded-3xl shadow-xl p-10 w-full max-w-4xl fade-in">
      <div class="flex flex-col items-center text-center"
           x-data="{ showModal: false }">
        <!-- Profile Image with click-to-zoom -->
        <img
          src="{{ $user->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($user->image) ? asset('storage/' . $user->image) : 'https://randomuser.me/api/portraits/men/75.jpg' }}"
          alt="Profile"
          class="w-28 h-28 rounded-full border-4 border-white shadow-lg object-cover cursor-pointer transition-transform hover:scale-105"
          @click="showModal = true"
        />
        <h2 class="text-2xl font-extrabold text-gray-900 mt-4">{{ $user->full_name }}</h2>

        <!-- Modal for big image -->
        <div
          x-show="showModal"
          x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0"
          x-transition:enter-end="opacity-100"
          x-transition:leave="transition ease-in duration-150"
          x-transition:leave-start="opacity-100"
          x-transition:leave-end="opacity-0"
          class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-80"
          style="display: none;"
        >
          <div class="relative">
            <img
              src="{{ $user->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($user->image) ? asset('storage/' . $user->image) : 'https://randomuser.me/api/portraits/men/75.jpg' }}"
              alt="Profile Large"
              class="w-[350px] h-[350px] md:w-[450px] md:h-[450px] rounded-2xl object-cover border-4 border-white shadow-2xl"
            />
            <button
              @click="showModal = false"
              class="absolute top-2 right-2 bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full p-2 shadow text-gray-700 text-xl"
              aria-label="Close"
            >
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8 text-left px-4 md:px-16">
        <div>
          <p class="text-gray-500 font-semibold">Full Name</p>
          <p class="text-lg font-bold text-black">{{ $user->full_name }}</p>
        </div>
        <div>
          <p class="text-gray-500 font-semibold">Role</p>
          <p class="text-lg font-bold text-black">{{ $user->role }}</p>
        </div>
        <div>
          <p class="text-gray-500 font-semibold">Department</p>
          <p class="text-lg font-bold text-black">{{ $user->department ?? '-' }}</p>
        </div>
        <div>
          <p class="text-gray-500 font-semibold">Email</p>
          <p class="text-lg font-bold text-black">{{ $user->email }}</p>
        </div>
        <div>
          <p class="text-gray-500 font-semibold">Phone Number</p>
          <p class="text-lg font-bold text-black">{{ $user->phone_number }}</p>
        </div>
        <div>
          <p class="text-gray-500 font-semibold">Address</p>
          <p class="text-lg font-bold text-black">{{ $user->address ?? '-' }}</p>
        </div>
      </div>
      <div class="flex justify-end mt-8">
        <a href="{{ route('profile.edit') }}" class="bg-blue-800 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-full transition duration-300 shadow-md">
          Edit
        </a>
      </div>
    </div>
  </div>
</body>
</html>