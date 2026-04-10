<nav class="w-full bg-white/90 backdrop-blur-md sticky top-0 z-50 pb-4 pt-4 px-4 sm:px-6 shadow-sm transition-all duration-300">
  <div class="max-w-7xl mx-auto bg-[#111111] rounded-full px-4 sm:px-6 py-2 sm:py-3 shadow-xl">
    <div class="overflow-x-auto hide-scroll-bar" style="scrollbar-width: none; -ms-overflow-style: none;">
      <div class="flex items-center justify-between min-w-[700px] lg:min-w-full">
        
        <div class="flex items-center space-x-1 sm:space-x-2">
          <a href="{{ url('/') }}" class="px-4 sm:px-5 py-2 {{ request()->is('/') ? 'bg-[#f48c42] text-white' : 'text-gray-300 hover:text-white' }} text-sm font-medium rounded-full transition-colors whitespace-nowrap">
            Profile
          </a>
          <a href="{{ url('/katalog') }}" class="px-4 sm:px-5 py-2 {{ request()->is('katalog') ? 'bg-[#f48c42] text-white' : 'text-gray-300 hover:text-white' }} text-sm font-medium rounded-full transition-colors whitespace-nowrap">
            Katalog
          </a>
          <a href="{{ url('/bantuan') }}" class="px-4 sm:px-5 py-2 {{ request()->is('bantuan') ? 'bg-[#f48c42] text-white' : 'text-gray-300 hover:text-white' }} text-sm font-medium rounded-full transition-colors whitespace-nowrap">
            Bantuan
          </a>
        </div>

        <div class="flex items-center space-x-2 cursor-pointer px-4">
          <div class="w-8 h-8 sm:w-9 sm:h-9 bg-[#f48c42] rounded-full flex items-center justify-center shrink-0 shadow-sm">
             <span class="text-white font-bold text-xs sm:text-sm tracking-tighter">JY</span>
          </div>
          <span class="text-white font-bold text-base sm:text-lg tracking-wider">JOYA</span>
        </div>

        <div class="flex items-center space-x-1 sm:space-x-2">
          <a href="#" class="px-3 sm:px-4 py-2 text-gray-300 text-sm font-medium hover:text-white transition-colors whitespace-nowrap">
            Resume
          </a>
          <a href="#" class="px-3 sm:px-4 py-2 text-gray-300 text-sm font-medium hover:text-white transition-colors whitespace-nowrap">
            Project
          </a>
          <a href="{{ url('/#contact') }}" class="px-5 py-2 bg-white/10 hover:bg-white/20 text-white text-sm font-medium rounded-full transition-colors whitespace-nowrap ml-2">
            Contact
          </a>
        </div>

      </div>
    </div>
    <style>
      .hide-scroll-bar::-webkit-scrollbar {
        display: none;
      }
    </style>
  </div>
</nav>