@extends('layout.master')

@section('content')
<div class="w-full bg-white min-h-screen">
    <div class="max-w-7xl mx-auto px-6 py-16">
        
        <!-- Header -->
        <div class="mb-12">
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#111111] tracking-tight">
                My <span class="text-[#f48c42]">Catalog</span>
            </h2>
            <p class="text-gray-500 mt-4 text-lg max-w-2xl">
                Explore a collection of my latest projects. From web design to full-stack development, here is a showcase of my creative journey.
            </p>
        </div>

        <!-- Filter / Tabs -->
        <div class="flex space-x-4 mb-10 overflow-x-auto pb-2">
            <button class="px-6 py-2 bg-[#111111] text-white rounded-full text-sm font-medium whitespace-nowrap">All Projects</button>
            <button class="px-6 py-2 bg-gray-100 text-gray-600 hover:bg-gray-200 rounded-full text-sm font-medium whitespace-nowrap transition-colors">Web Design</button>
            <button class="px-6 py-2 bg-gray-100 text-gray-600 hover:bg-gray-200 rounded-full text-sm font-medium whitespace-nowrap transition-colors">Branding</button>
            <button class="px-6 py-2 bg-gray-100 text-gray-600 hover:bg-gray-200 rounded-full text-sm font-medium whitespace-nowrap transition-colors">Development</button>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Item 1 -->
            <div class="group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-2xl overflow-hidden relative mb-4">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=800&auto=format&fit=crop" alt="Project 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white text-[#111111] px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">View Details</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">E-Commerce Redesign</h3>
                    <p class="text-gray-500 text-sm mt-1">Web Design & Front-End</p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-2xl overflow-hidden relative mb-4">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop" alt="Project 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white text-[#111111] px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">View Details</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">Finance Dashboard</h3>
                    <p class="text-gray-500 text-sm mt-1">UI/UX Design</p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-2xl overflow-hidden relative mb-4">
                    <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?q=80&w=800&auto=format&fit=crop" alt="Project 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white text-[#111111] px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">View Details</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">Portfolio Template</h3>
                    <p class="text-gray-500 text-sm mt-1">Development</p>
                </div>
            </div>

             <!-- Item 4 -->
            <div class="group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-2xl overflow-hidden relative mb-4">
                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=800&auto=format&fit=crop" alt="Project 4" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white text-[#111111] px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">View Details</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">Coding Platform</h3>
                    <p class="text-gray-500 text-sm mt-1">Full-Stack Laravel</p>
                </div>
            </div>

             <!-- Item 5 -->
            <div class="group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-2xl overflow-hidden relative mb-4">
                    <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?q=80&w=800&auto=format&fit=crop" alt="Project 5" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white text-[#111111] px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">View Details</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">Corporate Branding</h3>
                    <p class="text-gray-500 text-sm mt-1">Branding & Logo</p>
                </div>
            </div>

             <!-- Item 6 -->
            <div class="group cursor-pointer">
                <div class="w-full aspect-[4/3] bg-gray-100 rounded-2xl overflow-hidden relative mb-4">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" alt="Project 6" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <span class="bg-white text-[#111111] px-6 py-2 rounded-full font-semibold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">View Details</span>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">Marketing Site</h3>
                    <p class="text-gray-500 text-sm mt-1">Web Design</p>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
