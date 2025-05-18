 <!-- Header -->
  <header class="relative z-10 flex items-center justify-between p-2 shadow-md bg-black/80 ">
    <div class="flex items-center space-x-3">
      <img src="assets/images/logo2.png" class="h-[80px]" alt="SLTMobitel Logo">
    </div>
    <div class="relative">
      <div onclick="toggleDropdown('profileMenu')" class="flex items-center space-x-3 cursor-pointer">
        <span class="font-medium text-white">Mr. Sadun Kumara</span>
        <img src="https://i.pravatar.cc/40?img=3" class="w-10 h-10 border-2 border-white rounded-full" alt="Profile Picture">
      </div>
      <div id="profileMenu" class="absolute right-0 z-20 hidden w-48 mt-2 text-black bg-white shadow-lg dropdown-animation rounded-xl">
        <a href="profile.html" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
        <a href="login.html" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  </header>


  