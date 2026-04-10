<nav class="w-full bg-white flex justify-center pt-6 pb-4">
  <div class="max-w-7xl w-full px-6 flex items-center justify-between bg-[#111111] rounded-full py-3 shadow-lg">
    
    <div class="flex items-center space-x-2">
      <a href="{{ url('/') }}" class="px-6 py-2 {{ request()->is('/') ? 'bg-[#f48c42] text-white' : 'text-gray-300 hover:text-white' }} text-sm font-medium rounded-full transition-colors">
        Profile
      </a>
      <a href="{{ url('/katalog') }}" class="px-6 py-2 {{ request()->is('katalog') ? 'bg-[#f48c42] text-white' : 'text-gray-300 hover:text-white' }} text-sm font-medium rounded-full transition-colors">
        Katalog
      </a>
      <a href="{{ url('/bantuan') }}" class="px-6 py-2 {{ request()->is('bantuan') ? 'bg-[#f48c42] text-white' : 'text-gray-300 hover:text-white' }} text-sm font-medium rounded-full transition-colors">
        Bantuan
      </a>
    </div>

    <div class="flex items-center space-x-2 cursor-pointer">
      <div class="w-8 h-8 bg-[#f48c42] rounded-full flex items-center justify-center">
         <span class="text-white font-bold text-sm tracking-tighter">JY</span>
      </div>
      <span class="text-white font-bold text-lg tracking-wider">JOYA</span>
    </div>

    <div class="flex items-center space-x-2">
      <a href="#" class="px-4 py-2 text-gray-300 text-sm font-medium hover:text-white transition-colors">
        Resume
      </a>
      <a href="#" class="px-4 py-2 text-gray-300 text-sm font-medium hover:text-white transition-colors">
        Project
      </a>
      <a href="#" class="px-6 py-2 text-gray-300 text-sm font-medium hover:text-white transition-colors">
        Contact
      </a>
    </div>

  </div>
</nav>