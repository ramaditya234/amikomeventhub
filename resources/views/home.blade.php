@extends('layout.master')

@section('content')
<div class="w-full bg-white">
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-6 py-16 md:py-24 flex flex-col md:flex-row items-center justify-between">
        
        <!-- Left Content -->
        <div class="md:w-1/2 flex flex-col items-start space-y-6">
            <div class="inline-block px-4 py-1.5 rounded-full bg-orange-50 border border-orange-100 text-[#f48c42] font-semibold text-sm">
                👋 Welcome to my portfolio
            </div>
            <h1 class="text-5xl md:text-7xl font-extrabold text-[#111111] tracking-tight leading-tight">
                Creative <br>
                <span class="text-[#f48c42]">Developer</span> & <br>
                Designer.
            </h1>
            <p class="text-gray-500 text-lg max-w-md">
                Hello, I'm <strong class="text-[#111111]">Ramaditya Joya Perdana</strong> (NIM: <strong class="text-[#f48c42]">24.12.3298</strong>). I build digital experiences that are beautiful, functional, and user-centered. Let's bring your ideas to life.
            </p>
            <div class="flex flex-wrap gap-4 pt-4">
                <a href="#" class="px-8 py-3 bg-[#111111] text-white font-medium rounded-full hover:bg-gray-800 transition-colors shadow-lg shadow-gray-400/30">
                    Hire Me
                </a>
                <a href="{{ url('/katalog') }}" class="px-8 py-3 border border-gray-200 text-[#111111] font-medium rounded-full hover:border-[#111111] hover:bg-gray-50 transition-colors">
                    View Work
                </a>
            </div>
            
            <div class="pt-8 flex items-center space-x-6">
                <div>
                    <h4 class="text-2xl font-bold text-[#111111]">3+</h4>
                    <p class="text-sm text-gray-500">Years Experience</p>
                </div>
                <!-- Divider -->
                <div class="w-px h-10 bg-gray-200"></div>
                <div>
                    <h4 class="text-2xl font-bold text-[#111111]">12+</h4>
                    <p class="text-sm text-gray-500">Projects Completed</p>
                </div>
                 <!-- Divider -->
                 <div class="w-px h-10 bg-gray-200"></div>
                 <div>
                    <h4 class="text-2xl font-bold text-[#111111]">100%</h4>
                    <p class="text-sm text-gray-500">Client Satisfaction</p>
                </div>
            </div>
        </div>

        <!-- Right Content - Image/Visual -->
        <div class="md:w-1/2 mt-16 md:mt-0 flex justify-center md:justify-end relative">
            <!-- Decorative circle -->
            <div class="absolute w-[450px] h-[450px] bg-orange-50 rounded-full blur-3xl opacity-50 -z-10 top-0 right-0"></div>
            
            <div class="w-80 h-80 md:w-[420px] md:h-[420px] bg-gray-100 rounded-[2.5rem] flex items-center justify-center relative overflow-hidden group shadow-xl">
                <!-- Abstract visual placeholder -->
                <div class="absolute inset-0 bg-[#111111] mix-blend-multiply opacity-5 transition-opacity group-hover:opacity-10 duration-500 z-10"></div>
                <img src="https://images.unsplash.com/photo-1549692520-acc6669e2f0c?q=80&w=600&auto=format&fit=crop" alt="Developer working" class="object-cover w-full h-full filter grayscale hover:grayscale-0 transition-all duration-700">
            </div>
            
            <!-- Floating badge -->
            <div class="absolute bottom-10 -left-6 md:left-10 bg-white p-4 rounded-2xl shadow-xl flex items-center space-x-3 border border-gray-100 animate-bounce" style="animation-duration: 3s;">
                <div class="w-10 h-10 bg-[#f48c42] rounded-full flex items-center justify-center text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <div>
                    <p class="text-xs text-gray-500">Available for</p>
                    <p class="text-sm font-bold text-[#111111]">Freelance Work</p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection