<?php

use Livewire\Component;

new class extends Component
{
  
};
?>

<div class="overflow-x-hidden">
    <!-- Hero Section -->
    <section class="relative h-[90vh] flex items-center bg-gray-900">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="/assets/img/hero.png" alt="Steel Structure" class="w-full h-full object-cover object-center opacity-40">
            <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/80 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl">
                <div class="flex items-center space-x-4 mb-6">
                    <span class="h-1 w-12 bg-secondary"></span>
                    <span class="text-secondary font-black tracking-[0.3em] uppercase text-sm">Innovating The Future of Steel</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 leading-[1.1]">
                    Precision Engineering <br>
                    <span class="text-gradient-s2s">Building Green</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl mb-10 leading-relaxed max-w-2xl font-medium">
                    Premier engineering and design firm specializing in sustainable light-gauge steel framing and modular solutions. We combine advanced technology with precision engineering to deliver superior structures.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="#services" class="bg-primary text-white px-10 py-5 rounded-md font-black text-sm tracking-[0.2em] uppercase hover:bg-secondary hover:text-primary transition-all shadow-2xl flex items-center justify-center">
                        Explore Services
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#contact" class="border-2 border-white/20 text-white px-10 py-5 rounded-md font-black text-sm tracking-[0.2em] uppercase hover:bg-white/5 transition-all text-center">
                        Our Portfolio
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Bottom bar with accent -->
        <div class="absolute bottom-0 left-0 w-full h-4 bg-gradient-s2s"></div>
    </section>

    <!-- Stats Section -->
    <section class="bg-white py-12 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex flex-col items-center p-6 border-r border-gray-100 last:border-0">
                    <span class="text-4xl font-black text-primary mb-2">250+</span>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">Projects Delivered</span>
                </div>
                <div class="flex flex-col items-center p-6 border-r border-gray-100 last:border-0 lg:md:block hidden">
                    <span class="text-4xl font-black text-primary mb-2">15+</span>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">Years Experience</span>
                </div>
                <div class="flex flex-col items-center p-6 border-r border-gray-100 last:border-0 lg:md:block hidden">
                    <span class="text-4xl font-black text-primary mb-2">50+</span>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">Global Clients</span>
                </div>
                <div class="flex flex-col items-center p-6">
                    <span class="text-4xl font-black text-primary mb-2">SFC</span>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">Precision Design</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Image Side -->
                <div class="lg:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-secondary/10 rounded-full blur-3xl"></div>
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border-x-8 border-primary">
                        <img src="/assets/img/shop.png" alt="Steel Fabrication" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent"></div>
                    </div>
                </div>

                <!-- Content Side -->
                <div class="lg:w-1/2">
                    <div class="inline-block bg-primary/5 px-4 py-1 rounded-full mb-6">
                        <span class="text-primary font-bold uppercase text-xs tracking-widest">About S2S Designs PVT. LTD.</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                        Revolutionizing <span class="text-primary">Sustainable</span> Engineering
                    </h2>
                    <p class="text-gray-600 mb-6 leading-relaxed font-medium">
                        Based in India with a global reach, S2S Designs specializes in end-to-end design and engineering for Light Gauge Steel Framing (LGSF) and structural steel. Our mission is to "Build Green" by optimizing materials and implementing state-of-the-art technology.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 rounded-full bg-secondary"></div>
                            <span class="font-bold text-sm text-gray-800 uppercase tracking-wide">Advanced BIM Modeling</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 rounded-full bg-secondary"></div>
                            <span class="font-bold text-sm text-gray-800 uppercase tracking-wide">Material Optimization</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 rounded-full bg-secondary"></div>
                            <span class="font-bold text-sm text-gray-800 uppercase tracking-wide">Steel Detailing</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 rounded-full bg-secondary"></div>
                            <span class="font-bold text-sm text-gray-800 uppercase tracking-wide">Engineering Consulting</span>
                        </div>
                    </div>
                    <a href="#contact" class="inline-flex items-center text-primary font-black uppercase text-sm tracking-widest group">
                        Learn More About Our Process
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="services" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 tracking-tight uppercase">Our Core Expertise</h2>
                <div class="w-24 h-1.5 bg-secondary mx-auto mb-6"></div>
                <p class="text-gray-500 max-w-2xl mx-auto font-medium lg:md:block hidden">
                    We provide a comprehensive range of structural engineering services tailored for the modern construction industry.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="group p-10 bg-gray-50 rounded-2xl hover:bg-primary transition-all duration-500 border border-gray-100 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center text-primary mb-8 shadow-sm group-hover:bg-secondary group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-white uppercase tracking-tight">Design & Engineering</h3>
                    <p class="text-gray-500 group-hover:text-gray-200 mb-8 leading-relaxed">
                        Full structural analysis and design for light gauge steel and hot-rolled steel structures according to international codes.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="group p-10 bg-gray-50 rounded-2xl hover:bg-primary transition-all duration-500 border border-gray-100 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center text-primary mb-8 shadow-sm group-hover:bg-secondary group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-white uppercase tracking-tight">BIM & 3D Modeling</h3>
                    <p class="text-gray-500 group-hover:text-gray-200 mb-8 leading-relaxed">
                        Highly accurate 3D models using industry-leading software to ensure zero-clash engineering and efficient fabrication.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="group p-10 bg-gray-50 rounded-2xl hover:bg-primary transition-all duration-500 border border-gray-100 hover:shadow-2xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center text-primary mb-8 shadow-sm group-hover:bg-secondary group-hover:text-white transition-colors">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a2 2 0 11-4 0V4zm-6 8a2 2 0 114 0v1a2 2 0 11-4 0v-1zm0 8a2 2 0 104 0v-1a2 2 0 10-4 0v1z"/></svg>
                    </div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 group-hover:text-white uppercase tracking-tight">LGSF Detailing</h3>
                    <p class="text-gray-500 group-hover:text-gray-200 mb-8 leading-relaxed">
                        Specialized detailing for Light Gauge Steel Framing (LGSF) projects including shop drawings and panelization.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- BIM Visualization Section -->
    <section class="py-24 bg-gray-900 flex items-center overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="lg:w-1/2">
                    <h2 class="text-5xl font-black text-white mb-8 tracking-tighter uppercase leading-none">High-Tech <br> <span class="text-secondary">BIM Integration</span></h2>
                    <p class="text-gray-400 text-lg mb-10 leading-relaxed font-medium">
                        Our integrated BIM process ensures seamless coordination between engineering, architecture, and manufacturing. Experience reduced onsite errors and optimized construction timelines.
                    </p>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center space-x-3 text-white">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                            <span class="font-bold uppercase text-xs tracking-widest">Real-time Clash Detection</span>
                        </li>
                        <li class="flex items-center space-x-3 text-white">
                            <svg class="w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 0 00-1.414 1.414l2 2a1 0 001.414 0l4-4z"/></svg>
                            <span class="font-bold uppercase text-xs tracking-widest">Automated BOM Generation</span>
                        </li>
                    </ul>
                </div>
                <div class="lg:w-1/2 relative group">
                    <div class="absolute inset-0 bg-secondary/20 blur-[100px] rounded-full group-hover:bg-secondary/40 transition-all"></div>
                    <img src="/assets/img/bim.png" alt="BIM Model" class="relative z-10 w-full h-auto rounded-xl shadow-2xl border border-white/5">
                </div>
            </div>
        </div>
    </section>

    <!-- Project Gallery Simple -->
    <section id="projects" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-4 uppercase tracking-tight">Recent Projects</h2>
                <div class="w-24 h-1.5 bg-primary mx-auto mb-6"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="relative group h-[400px] rounded-2xl overflow-hidden shadow-xl">
                    <img src="/assets/img/hero.png" alt="Project 1" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-10">
                        <span class="bg-secondary text-primary px-3 py-1 text-[10px] font-black tracking-widest uppercase mb-4 inline-block">Commercial</span>
                        <h4 class="text-2xl font-black text-white uppercase tracking-tight">Industrial Steel Warehouse</h4>
                    </div>
                </div>
                <div class="relative group h-[400px] rounded-2xl overflow-hidden shadow-xl">
                    <img src="/assets/img/shop.png" alt="Project 2" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-10">
                        <span class="bg-secondary text-primary px-3 py-1 text-[10px] font-black tracking-widest uppercase mb-4 inline-block">Residential</span>
                        <h4 class="text-2xl font-black text-white uppercase tracking-tight">Modular LGSF Housing Block</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section id="contact" class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 z-0 bg-primary">
            <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_top_right,var(--color-secondary),transparent_70%)] opacity-30"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-8 tracking-tighter uppercase leading-none">Ready to start <br> your <span class="text-secondary underline decoration-4 underline-offset-8">Green</span> project?</h2>
            <p class="text-gray-200 text-lg mb-12 font-medium">
                S2S Designs Pvt. Ltd. provides global structural and engineering solutions with an emphasis on sustainable light gauge steel. Get a professional consultation today.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-8">
                <a href="mailto:info@s2sdesigns.com" class="bg-white text-primary px-12 py-5 rounded-md font-black text-sm tracking-[0.2em] uppercase hover:bg-secondary transition-all shadow-2xl">
                    Get a Quote
                </a>
                <a href="#" class="border-2 border-white/20 text-white px-12 py-5 rounded-md font-black text-sm tracking-[0.2em] uppercase hover:bg-white/10 transition-all">
                    Contact Our Office
                </a>
            </div>
        </div>
    </section>
</div>