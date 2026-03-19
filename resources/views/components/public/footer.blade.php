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
                    <i class="ri-phone-fill text-xl text-white"></i>
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
                    <a href="/" class="flex items-center space-x-3 mb-8 group">
                        <div class="w-12 h-auto flex items-center justify-center text-white font-oswald font-bold text-xl transition-transform group-hover:scale-105">
                            <img src="{{asset('assets/img/logos2.png')}}" alt="S2S Designs Logo">
                        </div>
                        <div class="flex flex-col justify-center space-y-1">
                            <span class="text-xl font-oswald font-bold leading-none tracking-tight text-white transition-colors duration-300">
                                Designs Pvt. Ltd.
                            </span>
                            <span class="text-[9px] px-[1px] font-bold tracking-[0.25em] leading-none mt-0.5 text-secondary">
                                BUILDING GREEN
                            </span>
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
                            <i class="ri-linkedin-fill text-lg text-gray-500 group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 group">
                            <i class="ri-instagram-line text-lg text-gray-500 group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 group">
                            <i class="ri-twitter-x-fill text-lg text-gray-500 group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center hover:bg-primary hover:border-primary transition-all duration-300 group">
                            <i class="ri-github-fill text-lg text-gray-500 group-hover:text-white transition-colors"></i>
                        </a>
                    </div>
                </div>

                {{-- Quick Links --}}
                <div class="lg:col-span-2">
                    <h4 class="text-white font-oswald text-sm uppercase tracking-wider mb-6 pb-3 border-b border-white/10">
                        Company
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>Home</span></a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>About Us</span></a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>Services</span></a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>Contact</span></a></li>
                    </ul>
                </div>

                {{-- Services --}}
                <div class="lg:col-span-3">
                    <h4 class="text-white font-oswald text-sm uppercase tracking-wider mb-6 pb-3 border-b border-white/10">
                        Services
                    </h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>Structural Design</span></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>BIM & 3D Modeling</span></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>LGSF Framing</span></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>Connection Design</span></a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors text-sm flex items-center space-x-2 group"><i class="ri-arrow-right-s-line text-secondary opacity-0 group-hover:opacity-100 transition-opacity"></i><span>Modular Construction</span></a></li>
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
                                <i class="ri-map-pin-2-line text-lg text-secondary"></i>
                            </div>
                            <div>
                                <span class="text-white text-xs font-bold uppercase tracking-wider block mb-0.5">🇨🇦 Canada</span>
                                <span class="text-gray-400 text-sm leading-relaxed">[Office Address], ON</span>
                            </div>
                        </div>

                        {{-- India --}}
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center shrink-0 mt-0.5">
                                <i class="ri-map-pin-2-line text-lg text-secondary"></i>
                            </div>
                            <div>
                                <span class="text-white text-xs font-bold uppercase tracking-wider block mb-0.5">🇮🇳 India</span>
                                <span class="text-gray-400 text-sm leading-relaxed">[Office Address], India</span>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center shrink-0">
                                <i class="ri-mail-line text-lg text-secondary"></i>
                            </div>
                            <a href="mailto:info@s2sdesigns.com" class="text-gray-400 text-sm hover:text-secondary transition-colors">info@s2sdesigns.com</a>
                        </div>

                        {{-- Phone --}}
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 rounded-lg bg-primary/20 flex items-center justify-center shrink-0">
                                <i class="ri-phone-line text-lg text-secondary"></i>
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
