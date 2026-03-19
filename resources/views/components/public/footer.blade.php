<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<footer class="relative text-white overflow-hidden">

    {{-- ===== PRE-FOOTER CTA STRIP ===== --}}
    <div class="bg-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                </div>
                <div>
                    <p class="text-white/80 text-xs font-medium uppercase tracking-wider">Ready to discuss your project?</p>
                    <p class="text-white text-lg font-oswald font-bold tracking-tight">Get a Free Consultation Today</p>
                </div>
            </div>
            <a href="#contact" class="bg-white text-primary px-8 py-3 rounded font-bold text-sm uppercase tracking-wider hover:bg-accent hover:text-white transition-all duration-300 shadow-lg shrink-0">
                Contact Us
            </a>
        </div>
    </div>

    {{-- ===== MAIN FOOTER ===== --}}
    <div class="relative bg-[#0d1117]">

        {{-- Background image with overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="/assets/img/footer-bg.png" alt="" class="w-full h-full object-cover opacity-[0.07]">
            <div class="absolute inset-0 bg-gradient-to-b from-[#0d1117] via-[#0d1117]/95 to-[#0d1117]"></div>
        </div>

        {{-- Decorative top line --}}
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            {{-- Main grid --}}
            <div class="pt-20 pb-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">

                {{-- Brand Column (wider) --}}
                <div class="lg:col-span-4">
                    <a href="/" class="flex items-center space-x-3 mb-6 group">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center text-white font-oswald font-bold text-xl shadow-lg transition-transform group-hover:scale-105">S2S</div>
                        <div>
                            <span class="text-lg font-oswald font-bold text-white block leading-none tracking-tight">S2S DESIGNS</span>
                            <span class="text-[8px] font-bold text-secondary tracking-[0.25em] leading-none mt-0.5 block">PVT. LTD. — BUILDING GREEN</span>
                        </div>
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6 max-w-xs">
                        Premier engineering & design firm specializing in sustainable light-gauge steel framing, BIM modeling, and modular construction solutions for global markets.
                    </p>

                    {{-- Certifications / Trust badges --}}
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="px-3 py-1.5 bg-white/5 border border-white/10 rounded text-[10px] font-bold text-gray-400 uppercase tracking-wider">ISO Certified</div>
                        <div class="px-3 py-1.5 bg-white/5 border border-white/10 rounded text-[10px] font-bold text-gray-400 uppercase tracking-wider">AISI</div>
                        <div class="px-3 py-1.5 bg-white/5 border border-white/10 rounded text-[10px] font-bold text-gray-400 uppercase tracking-wider">NBC</div>
                    </div>

                    {{-- Social --}}
                    <div class="flex space-x-2">
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 group">
                            <svg class="w-4 h-4 text-gray-500 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 group">
                            <svg class="w-4 h-4 text-gray-500 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 group">
                            <svg class="w-4 h-4 text-gray-500 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 group">
                            <svg class="w-4 h-4 text-gray-500 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Quick Links --}}
                <div class="lg:col-span-2">
                    <h4 class="text-white font-oswald text-sm uppercase tracking-wider mb-6 pb-3 border-b border-white/10">
                        Company
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>Home</span></a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>About Us</span></a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>Services</span></a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>Contact</span></a></li>
                    </ul>
                </div>

                {{-- Services --}}
                <div class="lg:col-span-3">
                    <h4 class="text-white font-oswald text-sm uppercase tracking-wider mb-6 pb-3 border-b border-white/10">
                        Services
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>Structural Design</span></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>BIM & 3D Modeling</span></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>LGSF Framing</span></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>Connection Design</span></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><svg class="w-3 h-3 text-secondary opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg><span>Modular Construction</span></a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div class="lg:col-span-3">
                    <h4 class="text-white font-oswald text-sm uppercase tracking-wider mb-6 pb-3 border-b border-white/10">
                        Head Offices
                    </h4>
                    <div class="space-y-5">
                        {{-- Canada --}}
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <span class="text-white text-xs font-bold uppercase tracking-wider block mb-0.5">🇨🇦 Canada</span>
                                <span class="text-gray-400 text-sm leading-relaxed">[Office Address], ON</span>
                            </div>
                        </div>

                        {{-- India --}}
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <span class="text-white text-xs font-bold uppercase tracking-wider block mb-0.5">🇮🇳 India</span>
                                <span class="text-gray-400 text-sm leading-relaxed">[Office Address], India</span>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <a href="mailto:info@s2sdesigns.com" class="text-gray-400 text-sm hover:text-secondary transition-colors">info@s2sdesigns.com</a>
                        </div>

                        {{-- Phone --}}
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <span class="text-gray-400 text-sm">+1 (XXX) XXX-XXXX</span>
                        </div>
                    </div>
                </div>
            </div>

        
        </div>

        {{-- Bottom bar --}}
        <div class="border-t border-white/5 bg-black/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 flex flex-col md:flex-row justify-between items-center gap-3">
                <p class="text-gray-500 text-xs tracking-wider">
                    &copy; {{ date('Y') }} S2S Designs Pvt. Ltd. All rights reserved.
                </p>
                <div class="flex items-center space-x-6">
                    <a href="#" class="text-gray-500 hover:text-gray-300 text-xs tracking-wider transition-colors">Privacy Policy</a>
                    <span class="text-gray-700">|</span>
                    <a href="#" class="text-gray-500 hover:text-gray-300 text-xs tracking-wider transition-colors">Terms of Service</a>
                    <span class="text-gray-700">|</span>
                    <a href="#" class="text-gray-500 hover:text-gray-300 text-xs tracking-wider transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>
