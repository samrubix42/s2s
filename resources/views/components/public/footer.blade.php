<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<footer class="bg-gray-900 pt-24 pb-12 text-white overflow-hidden relative">
    <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-primary opacity-10 blur-[120px] rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 border-b border-gray-800 pb-20">
            <!-- Brand Column -->
            <div class="space-y-8">
                <a href="/" class="flex items-center space-x-3 group">
                    <div class="w-12 h-12 bg-gradient-s2s rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg ring-4 ring-gray-800">S2S</div>
                    <div class="flex flex-col">
                        <span class="text-xl font-bold text-white leading-none uppercase tracking-tight">S2S Designs</span>
                        <span class="text-[9px] font-black text-secondary uppercase tracking-[0.2em] leading-none mt-1">Building Green</span>
                    </div>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed font-medium">
                    Premier engineering and design firm specializing in sustainable steel framing solutions for residential and commercial structures.
                </p>
                <div class="flex items-center space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors">
                        <svg class="w-5 h-5 text-gray-400 hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors">
                        <svg class="w-5 h-5 text-gray-400 hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-bold text-lg uppercase tracking-wider mb-8 flex items-center">
                    Quick Links
                    <div class="ml-4 h-[2px] w-8 bg-secondary"></div>
                </h4>
                <ul class="space-y-4">
                    <li><a href="/" class="text-gray-400 hover:text-secondary transition-colors text-sm font-bold uppercase tracking-widest">Home</a></li>
                    <li><a href="#about" class="text-gray-400 hover:text-secondary transition-colors text-sm font-bold uppercase tracking-widest">About Us</a></li>
                    <li><a href="#services" class="text-gray-400 hover:text-secondary transition-colors text-sm font-bold uppercase tracking-widest">Services</a></li>
                    <li><a href="#projects" class="text-gray-400 hover:text-secondary transition-colors text-sm font-bold uppercase tracking-widest">Projects</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-white font-bold text-lg uppercase tracking-wider mb-8 flex items-center">
                    Specialties
                    <div class="ml-4 h-[2px] w-8 bg-secondary"></div>
                </h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-400 hover:text-secondary transition-colors text-sm font-bold uppercase tracking-widest">BIM Modeling</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-secondary transition-colors text-sm font-bold uppercase tracking-widest">Steel Detailing</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-secondary transition-colors text-sm font-bold uppercase tracking-widest">Light Gauge Steel</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-secondary transition-colors text-sm font-bold uppercase tracking-widest">Modular Design</a></li>
                </ul>
            </div>

            <!-- Contact info -->
            <div>
                <h4 class="text-white font-bold text-lg uppercase tracking-wider mb-8 flex items-center">
                    Contact
                    <div class="ml-4 h-[2px] w-8 bg-secondary"></div>
                </h4>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <svg class="w-6 h-6 text-secondary mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span class="text-gray-400 text-sm font-medium">Head Office: [Address], Canada / [Address], India</span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <svg class="w-6 h-6 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span class="text-gray-400 text-sm font-medium">info@s2sdesigns.com</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="pt-12 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <p class="text-gray-500 text-xs font-bold uppercase tracking-[0.2em]">
                &copy; 2026 S2S DESIGNS PVT. LTD. ALL RIGHTS RESERVED.
            </p>
            <div class="flex space-x-8">
                <a href="#" class="text-gray-500 hover:text-white text-[10px] font-bold uppercase tracking-widest transition-colors">Privacy Policy</a>
                <a href="#" class="text-gray-500 hover:text-white text-[10px] font-bold uppercase tracking-widest transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

