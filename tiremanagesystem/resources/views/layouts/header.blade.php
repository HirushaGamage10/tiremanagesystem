<!-- Header -->
  <header class="flex justify-between items-center p-2 bg-[#0F1E36] shadow-md z-10">
    <div class="flex items-center space-x-3">
      <a href="">
        <img src="assets/images/logo2.png" class="h-[60px] sm:h-[80px]" alt="SLTMobitel Logo">
      </a>
    </div>
    <div class="relative">
      <div onclick="toggleDropdown('profileMenu')" class="flex items-center space-x-2 cursor-pointer">
        <span class="text-sm font-medium text-white sm:text-base">Mr. Sadun Kumara</span>
        <img src="https://i.pravatar.cc/40?img=3" class="border-2 border-white rounded-full w-9 h-9 sm:w-10 sm:h-10" alt="Profile Picture">
      </div>
      <div id="profileMenu" class="absolute right-0 z-20 hidden w-48 mt-2 text-black bg-white shadow-lg rounded-xl">
        <a href="profile.html" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
        <a href="login.html" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  </header>