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

    <!-- Contact Section -->
    <div id="contact" class="max-w-7xl mx-auto px-6 pb-24 pt-12">
        <div class="bg-gray-50 rounded-[2.5rem] p-10 md:p-16 flex flex-col md:flex-row items-center justify-between border border-gray-100 shadow-sm relative overflow-hidden">
            <!-- Subtle Decorative Element -->
            <div class="absolute -right-20 -top-20 w-64 h-64 bg-orange-50 rounded-full blur-3xl opacity-60"></div>
            
            <div class="md:w-1/2 mb-10 md:mb-0 relative z-10">
                <div class="inline-block px-4 py-1.5 rounded-full bg-orange-50 border border-orange-100 text-[#f48c42] font-semibold text-sm mb-6">
                    Let's Connect
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#111111] mb-6 tracking-tight leading-tight">
                    Discuss your <br><span class="text-[#f48c42]">next project.</span>
                </h2>
                <p class="text-gray-500 text-lg max-w-md mb-8 leading-relaxed">
                    I'm currently available for freelance work and new opportunities. Reach out and let's create something amazing together.
                </p>
                
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#f48c42] shadow-sm border border-gray-100">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Direct Line</p>
                        <p class="text-xl font-bold text-[#111111]">(+62) 823-5156-4823</p>
                    </div>
                </div>
            </div>
            
            <div class="md:w-5/12 w-full relative z-10 flex justify-center md:justify-end">
                <div class="bg-white p-8 md:p-10 rounded-[2rem] shadow-xl shadow-gray-200/40 border border-gray-100 flex flex-col items-center text-center w-full max-w-sm">
                    <div class="w-16 h-16 bg-green-50 rounded-2xl flex items-center justify-center text-[#25D366] mb-6">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.559 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#111111] mb-2">Send a Message</h3>
                    <p class="text-gray-500 text-sm mb-6">Drop a line directly to my WhatsApp for simple and fast communication.</p>
                    <a href="https://wa.me/6282351564823" target="_blank" class="w-full inline-flex items-center justify-center px-6 py-3.5 bg-[#111111] text-white font-medium rounded-xl hover:bg-gray-800 transition-colors shadow-lg shadow-gray-400/30 group">
                        Chat on WhatsApp
                        <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection