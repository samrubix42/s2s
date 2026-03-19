<?php

use Livewire\Component;

new class extends Component
{
  
};
?>

<div>
    {{-- ==================== HERO ==================== --}}
    <section class="relative min-h-screen flex items-center bg-gradient-hero overflow-hidden">
        {{-- Background image --}}
        <div class="absolute inset-0 z-0">
            <img src="/assets/img/hero.png" alt="Modern Steel Structure" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-accent via-accent/90 to-accent/60"></div>
        </div>

        {{-- Decorative grid pattern --}}
        <div class="absolute inset-0 z-0 opacity-[0.03]"
             style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 60px 60px;">
        </div>

        {{-- Decorative accent --}}
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary/20 blur-[150px] rounded-full"></div>
        <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-secondary/10 blur-[100px] rounded-full"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-32 pb-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- Left: Content --}}
                <div class="animate-fade-up">
                    <div class="inline-flex items-center space-x-3 mb-8">
                        <span class="h-px w-10 bg-secondary"></span>
                        <span class="text-secondary text-xs font-bold tracking-[0.3em] uppercase">Engineering Excellence</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white mb-8 leading-[1.05] tracking-tight">
                        Precision Steel <br>
                        Design & <br>
                        <span class="text-gradient-s2s">Engineering</span>
                    </h1>

                    <p class="text-gray-400 text-base lg:text-lg mb-10 leading-relaxed max-w-xl">
                        S2S Designs Pvt. Ltd. delivers end-to-end structural engineering, BIM modeling, and light-gauge steel framing solutions for builders and developers across Canada and internationally.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#services"
                           class="inline-flex items-center justify-center bg-secondary text-white px-8 py-4 rounded font-bold text-sm tracking-wider uppercase hover:bg-primary transition-all duration-300 shadow-xl hover:shadow-2xl">
                            Our Services
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                        <a href="#about"
                           class="inline-flex items-center justify-center border border-white/20 text-white px-8 py-4 rounded font-bold text-sm tracking-wider uppercase hover:bg-white/5 transition-all duration-300">
                            Learn More
                        </a>
                    </div>
                </div>

                {{-- Right: Stats Grid --}}
                <div class="animate-fade-up-delay-2 hidden lg:block">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-8 hover:bg-white/10 transition-all duration-500">
                            <span class="text-5xl font-oswald font-bold text-secondary block mb-2">250+</span>
                            <span class="text-gray-400 text-sm font-medium">Projects Delivered</span>
                        </div>
                        <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-8 hover:bg-white/10 transition-all duration-500 mt-8">
                            <span class="text-5xl font-oswald font-bold text-secondary block mb-2">15+</span>
                            <span class="text-gray-400 text-sm font-medium">Years of Experience</span>
                        </div>
                        <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-8 hover:bg-white/10 transition-all duration-500">
                            <span class="text-5xl font-oswald font-bold text-secondary block mb-2">50+</span>
                            <span class="text-gray-400 text-sm font-medium">Global Clients</span>
                        </div>
                        <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-8 hover:bg-white/10 transition-all duration-500 mt-8">
                            <span class="text-5xl font-oswald font-bold text-white block mb-2">100%</span>
                            <span class="text-gray-400 text-sm font-medium">Precision Engineered</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Bottom gradient line --}}
        <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-secondary to-primary"></div>
    </section>

    {{-- Mobile Stats (visible only on mobile) --}}
    <section class="lg:hidden bg-surface py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-2 gap-4">
                <div class="text-center p-5 bg-white rounded-xl shadow-sm border border-gray-100">
                    <span class="text-3xl font-oswald font-bold text-primary block">250+</span>
                    <span class="text-gray-500 text-xs font-medium uppercase tracking-wider">Projects</span>
                </div>
                <div class="text-center p-5 bg-white rounded-xl shadow-sm border border-gray-100">
                    <span class="text-3xl font-oswald font-bold text-primary block">15+</span>
                    <span class="text-gray-500 text-xs font-medium uppercase tracking-wider">Years</span>
                </div>
                <div class="text-center p-5 bg-white rounded-xl shadow-sm border border-gray-100">
                    <span class="text-3xl font-oswald font-bold text-primary block">50+</span>
                    <span class="text-gray-500 text-xs font-medium uppercase tracking-wider">Clients</span>
                </div>
                <div class="text-center p-5 bg-white rounded-xl shadow-sm border border-gray-100">
                    <span class="text-3xl font-oswald font-bold text-primary block">100%</span>
                    <span class="text-gray-500 text-xs font-medium uppercase tracking-wider">Precision</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== ABOUT ==================== --}}
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- Image --}}
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img src="/assets/img/shop.png" alt="S2S Steel Fabrication" class="w-full h-[400px] lg:h-[500px] object-cover">
                    </div>
                    {{-- Floating badge --}}
                    <!-- <div class="absolute -bottom-6 -right-6 bg-primary text-white p-6 rounded-xl shadow-2xl hidden md:block">
                        <span class="text-3xl font-oswald font-bold block leading-none">15+</span>
                        <span class="text-xs text-white/80 uppercase tracking-wider">Years of<br>Excellence</span>
                    </div> -->
                    {{-- Accent border --}}
                    <div class="absolute -top-4 -left-4 w-full h-full border-2 border-secondary/20 rounded-2xl -z-10"></div>
                </div>

                {{-- Content --}}
                <div>
                    <div class="inline-flex items-center space-x-3 mb-4">
                        <span class="w-3 h-3 bg-secondary rounded-sm"></span>
                        <span class="text-primary text-xs font-bold tracking-[0.2em] uppercase">Who We Are</span>
                    </div>

                    <h2 class="text-3xl lg:text-4xl font-bold text-steel mb-6 leading-tight tracking-tight">
                        Sustainable Steel Solutions <br> for Modern Construction
                    </h2>

                    <p class="text-gray-500 mb-6 leading-relaxed">
                        S2S Designs Pvt. Ltd. is a premier engineering and design firm with offices in India and Canada. We specialize in end-to-end structural design, Light Gauge Steel Framing (LGSF), BIM modeling, and steel detailing for builders, developers, and construction companies.
                    </p>
                    <p class="text-gray-500 mb-8 leading-relaxed">
                        Our mission — <strong class="text-primary">"Building Green"</strong> — drives us to optimize materials, reduce waste, and deliver precision-engineered structures that meet international building codes.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center space-x-3 p-3 bg-surface rounded-lg">
                            <svg class="w-5 h-5 text-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span class="text-sm font-medium text-steel">Advanced BIM Modeling</span>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-surface rounded-lg">
                            <svg class="w-5 h-5 text-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span class="text-sm font-medium text-steel">Material Optimization</span>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-surface rounded-lg">
                            <svg class="w-5 h-5 text-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span class="text-sm font-medium text-steel">International Codes</span>
                        </div>
                        <div class="flex items-center space-x-3 p-3 bg-surface rounded-lg">
                            <svg class="w-5 h-5 text-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span class="text-sm font-medium text-steel">Zero-Waste Process</span>
                        </div>
                    </div>

                    <a href="#contact" class="inline-flex items-center text-primary font-bold text-sm uppercase tracking-wider group hover:text-primary-dark transition-colors">
                        Partner With Us
                        <svg class="w-4 h-4 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== SERVICES ==================== --}}
    <section id="services" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Section Header --}}
            <div class="text-center mb-20">
                <div class="inline-flex items-center space-x-3 mb-4">
                    <span class="w-8 h-px bg-secondary"></span>
                    <span class="text-primary text-xs font-bold tracking-[0.2em] uppercase">What We Do</span>
                    <span class="w-8 h-px bg-secondary"></span>
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold text-steel mb-4 tracking-tight">Our Core Services</h2>
                <p class="text-gray-500 max-w-2xl mx-auto leading-relaxed">
                    From concept to fabrication-ready drawings — full-spectrum structural engineering and BIM services for steel construction projects worldwide.
                </p>
            </div>

            {{-- Row 1: Image Left / Services Right --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-20">
                <div class="rounded-2xl overflow-hidden">
                    <img src="/assets/img/service-structural.png" alt="Structural Engineering" class="w-full h-[420px] object-cover">
                </div>
                <div class="space-y-8">
                    {{-- Service 1 --}}
                    <div class="flex items-start space-x-5">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-steel mb-2 tracking-tight">Structural Design & Engineering</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">Full structural analysis and design for light gauge and hot-rolled steel structures per AISI, Eurocode, AS/NZS, and NBC standards.</p>
                        </div>
                    </div>
                    {{-- Service 2 --}}
                    <div class="flex items-start space-x-5">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-steel mb-2 tracking-tight">BIM & 3D Modeling</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">Highly accurate Revit and Tekla 3D models with zero-clash engineering for efficient coordination and manufacturing.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Row 2: Services Left / Image Right --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-20">
                <div class="space-y-8 order-2 lg:order-1">
                    {{-- Service 3 --}}
                    <div class="flex items-start space-x-5">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-steel mb-2 tracking-tight">LGSF Framing & Detailing</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">Complete LGSF panelization, shop drawings, and roll-forming files for prefabricated steel frame construction.</p>
                        </div>
                    </div>
                    {{-- Service 4 --}}
                    <div class="flex items-start space-x-5">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-steel mb-2 tracking-tight">Connection Design</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">Detailed connection design including welded and bolted joints, base plates, and moment connections.</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-2xl overflow-hidden order-1 lg:order-2">
                    <img src="/assets/img/bim.png" alt="BIM Modeling" class="w-full h-[420px] object-cover">
                </div>
            </div>

            {{-- Row 3: Image Left / Services Right --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="rounded-2xl overflow-hidden">
                    <img src="/assets/img/shop.png" alt="Steel Fabrication" class="w-full h-[420px] object-cover">
                </div>
                <div class="space-y-8">
                    {{-- Service 5 --}}
                    <div class="flex items-start space-x-5">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-steel mb-2 tracking-tight">Modular Construction</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">Off-site prefabricated modular design for residential and commercial projects, optimized for rapid assembly.</p>
                        </div>
                    </div>
                    {{-- Service 6 --}}
                    <div class="flex items-start space-x-5">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center text-primary shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-steel mb-2 tracking-tight">Quality Assurance</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">Rigorous QA/QC processes, material certification verification, and site inspection support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== WHY CHOOSE US ==================== --}}
    <section class="py-24 bg-accent relative overflow-hidden">
        {{-- Decorative --}}
        <div class="absolute top-0 left-0 w-full h-full opacity-5"
             style="background-image: url('/assets/img/footer-bg.png'); background-size: cover; background-position: center;">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- Left --}}
                <div>
                    <div class="inline-flex items-center space-x-3 mb-4">
                        <span class="w-3 h-3 bg-secondary rounded-sm"></span>
                        <span class="text-secondary text-xs font-bold tracking-[0.2em] uppercase">Why S2S Designs</span>
                    </div>

                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6 tracking-tight leading-tight">
                        Technology-Driven <br> Engineering Partner
                    </h2>

                    <p class="text-gray-400 mb-10 leading-relaxed">
                        Our integrated BIM workflow ensures seamless coordination between design, fabrication, and construction — reducing errors and accelerating timelines.
                    </p>

                    {{-- Feature list --}}
                    <div class="space-y-5">
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm mb-1">Faster Project Timelines</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">Prefabricated components and digital workflows cut project time by up to 40%.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm mb-1">Zero-Clash Engineering</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">Real-time clash detection in BIM ensures no surprises on site.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm mb-1">Global Standards Compliance</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">Designs compliant with AISI, NBC (Canada), Eurocode, AS/NZS, and IS codes.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                            </div>
                            <div>
                                <h4 class="text-white font-bold text-sm mb-1">Sustainable Construction</h4>
                                <p class="text-gray-400 text-sm leading-relaxed">Recycled steel, optimized material use, and zero waste off-cuts.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: BIM Image --}}
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/5">
                        <img src="/assets/img/bim.png" alt="BIM Model Visualization" class="w-full h-auto">
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-full h-full border-2 border-secondary/10 rounded-2xl -z-10"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== TRUSTED BY / SEPARATOR ==================== --}}
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="text-center lg:text-left">
                    <h3 class="text-2xl font-bold text-steel tracking-tight mb-2">Trusted by Builders Worldwide</h3>
                    <p class="text-gray-500 text-sm">Delivering precision engineering across residential, commercial, and industrial sectors.</p>
                </div>
                <div class="flex items-center space-x-8 lg:space-x-12">
                    <div class="text-center">
                        <p class="text-3xl font-bold text-primary">500<span class="text-secondary">+</span></p>
                        <p class="text-gray-400 text-xs uppercase tracking-wider mt-1">Projects</p>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-primary">15<span class="text-secondary">+</span></p>
                        <p class="text-gray-400 text-xs uppercase tracking-wider mt-1">Countries</p>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="text-3xl font-bold text-primary">98<span class="text-secondary">%</span></p>
                        <p class="text-gray-400 text-xs uppercase tracking-wider mt-1">Satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== CONTACT / GET A QUOTE ==================== --}}
    <section id="contact" class="relative py-24 lg:py-28 overflow-hidden">
        {{-- Dark background with image overlay --}}
        <div class="absolute inset-0 bg-accent"></div>
        <div class="absolute inset-0 opacity-[0.07]"
             style="background-image: url('/assets/img/shop.png'); background-size: cover; background-position: center;"></div>
        {{-- Gradient overlays --}}
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 blur-[150px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-secondary/10 blur-[120px] rounded-full"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

                {{-- Left: Headline + Contact Info --}}
                <div>
                    <div class="inline-flex items-center space-x-3 mb-6">
                        <span class="w-8 h-px bg-secondary"></span>
                        <span class="text-secondary text-xs font-bold tracking-[0.25em] uppercase">Start Your Project</span>
                    </div>

                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 tracking-tight leading-[1.15]">
                        Ready to Build<br>
                        <span class="text-secondary">Something Great?</span>
                    </h2>

                    <p class="text-gray-400 text-base lg:text-lg leading-relaxed mb-10 max-w-lg">
                        Get a professional consultation for your next steel construction project. Our engineering team delivers precision-built solutions tailored to your needs.
                    </p>

                    {{-- Compact contact info --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-[10px] font-bold uppercase tracking-widest">Email</p>
                                <a href="mailto:info@s2sdesigns.com" class="text-white text-sm hover:text-secondary transition-colors">info@s2sdesigns.com</a>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-[10px] font-bold uppercase tracking-widest">Phone</p>
                                <span class="text-white text-sm">+1 (XXX) XXX-XXXX</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-[10px] font-bold uppercase tracking-widest">Offices</p>
                                <span class="text-white text-sm">Canada & India</span>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-gray-500 text-[10px] font-bold uppercase tracking-widest">Response</p>
                                <span class="text-white text-sm">Within 24 Hours</span>
                            </div>
                        </div>
                    </div>

                    {{-- Quick promise --}}
                    <div class="flex items-center space-x-4 pt-6 border-t border-white/10">
                        <svg class="w-5 h-5 text-secondary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <p class="text-gray-400 text-sm">Free consultation · No obligation · Response within 24 hours</p>
                    </div>
                </div>

                {{-- Right: Form Card --}}
                <div>
                    <div class="bg-white rounded-2xl p-8 lg:p-10">
                        <h3 class="text-xl font-bold text-steel mb-1 tracking-tight">Request a Free Consultation</h3>
                        <p class="text-gray-400 text-sm mb-6">Tell us about your project and we'll get back to you shortly.</p>

                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="first_name" class="block text-xs font-bold text-steel uppercase tracking-wider mb-1.5">First Name</label>
                                    <input type="text" id="first_name" name="first_name" required
                                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-steel placeholder:text-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-colors"
                                           placeholder="John">
                                </div>
                                <div>
                                    <label for="last_name" class="block text-xs font-bold text-steel uppercase tracking-wider mb-1.5">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" required
                                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-steel placeholder:text-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-colors"
                                           placeholder="Doe">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="email" class="block text-xs font-bold text-steel uppercase tracking-wider mb-1.5">Email</label>
                                    <input type="email" id="email" name="email" required
                                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-steel placeholder:text-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-colors"
                                           placeholder="john@company.com">
                                </div>
                                <div>
                                    <label for="phone" class="block text-xs font-bold text-steel uppercase tracking-wider mb-1.5">Phone</label>
                                    <input type="tel" id="phone" name="phone"
                                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-steel placeholder:text-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-colors"
                                           placeholder="+1 (XXX) XXX-XXXX">
                                </div>
                            </div>

                            <div>
                                <label for="service" class="block text-xs font-bold text-steel uppercase tracking-wider mb-1.5">Service Required</label>
                                <select id="service" name="service"
                                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-steel focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-colors appearance-none"
                                        style="background-image: url('data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2212%22 height=%2212%22 viewBox=%220 0 24 24%22 fill=%22none%22 stroke=%22%23666%22 stroke-width=%222%22><path d=%22M6 9l6 6 6-6%22/></svg>'); background-repeat: no-repeat; background-position: right 1rem center;">
                                    <option value="">Select a service</option>
                                    <option value="structural">Structural Design & Engineering</option>
                                    <option value="bim">BIM & 3D Modeling</option>
                                    <option value="lgsf">LGSF Framing & Detailing</option>
                                    <option value="connection">Connection Design</option>
                                    <option value="modular">Modular Construction</option>
                                    <option value="other">Other / General Inquiry</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-xs font-bold text-steel uppercase tracking-wider mb-1.5">Project Details</label>
                                <textarea id="message" name="message" rows="3"
                                          class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg text-sm text-steel placeholder:text-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-colors resize-none"
                                          placeholder="Tell us about your project requirements..."></textarea>
                            </div>

                            <button type="submit"
                                    class="w-full bg-primary text-white py-4 rounded-lg font-bold text-sm uppercase tracking-wider hover:bg-secondary transition-all duration-300 flex items-center justify-center space-x-2">
                                <span>Get Your Free Quote</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>