@extends('layout.master')

@section('content')
<div class="w-full bg-gray-50 min-h-screen pb-20">
    <!-- Hero Section Help -->
    <div class="bg-white py-16 mb-12 shadow-sm border-b border-gray-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="inline-block px-4 py-1.5 rounded-full bg-orange-50 border border-orange-100 text-[#f48c42] font-semibold text-sm mb-4">
                Help Center
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#111111] tracking-tight">
                How can we <span class="text-[#f48c42]">help?</span>
            </h2>
            <p class="text-gray-500 mt-4 text-lg">
                Find answers to common questions or contact us for further support regarding JOYA Portfolio services.
            </p>
            
            <!-- Search bar -->
            <div class="mt-8 relative max-w-2xl mx-auto">
                <input type="text" placeholder="Search questions, services, or issues..." class="w-full pl-12 pr-6 py-4 rounded-full border-gray-200 border bg-gray-50 focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#f48c42] focus:border-transparent transition-all shadow-sm">
                <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-6">
        
        <h3 class="text-2xl font-bold text-[#111111] mb-6">Frequently Asked Questions (FAQ)</h3>

        <div class="space-y-4">
            
            <!-- FAQ Item 1 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 transition-all hover:shadow-md cursor-pointer group">
                <div class="flex justify-between items-center">
                    <h4 class="text-lg font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">How do I start a project with JOYA?</h4>
                    <span class="text-gray-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </div>
                <div class="mt-4 text-gray-600 leading-relaxed border-t border-gray-50 pt-4 hidden">
                    You can contact me directly via the "Hire Me" button on the Profile page, or by navigating to the contact section. We will schedule a call to discuss your system and design requirements.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 transition-all hover:shadow-md cursor-pointer group">
                <div class="flex justify-between items-start md:items-center flex-col md:flex-row gap-4 md:gap-0">
                    <h4 class="text-lg font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">What is the estimated timeline for building a website?</h4>
                    <span class="text-gray-400 self-end md:self-auto hidden md:block">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </div>
                <div class="mt-4 text-gray-600 leading-relaxed">
                    The development time highly depends on feature complexity and the number of pages. A standard landing page (1-3 pages) usually takes 1-2 weeks. Meanwhile, a custom web app (Laravel) can take 4-8 weeks.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 transition-all hover:shadow-md cursor-pointer group">
                <div class="flex justify-between items-center">
                    <h4 class="text-lg font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">Does this service include maintenance/support?</h4>
                    <span class="text-gray-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </div>
                <div class="mt-4 text-gray-600 leading-relaxed hidden">
                    Yes, every website development package from JOYA includes a 1-month bug fixing warranty after the website is handed over. Long-term maintenance is also available via a subscription model.
                </div>
            </div>
            
             <!-- FAQ Item 4 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 transition-all hover:shadow-md cursor-pointer group">
                <div class="flex justify-between items-center">
                    <h4 class="text-lg font-bold text-[#111111] group-hover:text-[#f48c42] transition-colors">What technologies/frameworks are you proficient in?</h4>
                    <span class="text-gray-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </div>
                <div class="mt-4 text-gray-600 leading-relaxed hidden">
                    I specialize in backend development using Laravel & PHP, front-end using Tailwind CSS and Vue/React, and creative UI design using Figma.
                </div>
            </div>

        </div>

        <!-- Contact Support Card -->
        <div class="mt-12 bg-[#111111] rounded-3xl p-8 md:p-10 flex flex-col md:flex-row items-center justify-between text-white shadow-xl relative overflow-hidden">
             <!-- decorative blob -->
             <div class="absolute -right-10 -top-10 w-40 h-40 bg-[#f48c42] rounded-full blur-3xl opacity-20"></div>

            <div class="mb-6 md:mb-0 relative z-10 text-center md:text-left">
                <h4 class="text-2xl font-bold mb-2">Still need help?</h4>
                <p class="text-gray-400 text-sm max-w-sm">Our team is ready to answer all your messages 24/7. Contact us directly.</p>
            </div>
            <div class="relative z-10 flex gap-4">
                <a href="#" class="px-6 py-3 bg-[#f48c42] hover:bg-orange-600 text-white font-medium rounded-full transition-colors flex items-center shadow-lg shadow-orange-500/30">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Send Email
                </a>
            </div>
        </div>

    </div>
</div>

<style>
/* Simple CSS to toggle FAQ without JS, leveraging hover/active on group but typically this needs simple JS. I'll just show item 2 expanded natively, and others hidden content or just make them all visible easily string reading. Actually, let's just make them fully visible or styled nicely. */
.hidden { display: none; }
 /* Let's override hidden for demo purposes to show that they expand if we click, but without JS we can't toggle well. I will just render them block but styled lightly for now as this is a frontend mockup. */
div.mt-4.text-gray-600 {
    display: block;
}
</style>
@endsection
