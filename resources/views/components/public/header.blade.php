<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<header
    x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = window.scrollY > 50"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300">

    <!-- NAVBAR -->
    <div class="w-full"
        :class="scrolled 
            ? 'bg-white border-b border-gray-100 shadow-md' 
            : 'bg-transparent'">

        <div class=" max-w-7xl mx-auto flex justify-between items-center h-20 px-4 md:px-8 transition-all duration-300">

            <!-- LOGO -->
            <a href="/" class="flex items-center space-x-3">
                <img src="{{asset('assets/img/logos2.png')}}" class="w-12">

                <div>
                    <span class="text-lg font-bold transition-colors duration-300"
                        :class="scrolled ? 'text-steel' : 'text-white'">
                        Designs Pvt. Ltd.
                    </span>

                    <p class="text-[9px] tracking-[0.25em] text-secondary">
                        BUILDING GREEN
                    </p>
                </div>
            </a>

            <!-- DESKTOP -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="/" class="nav-link"
                    :class="scrolled ? 'text-steel' : 'text-white'">Home</a>

                <a href="#about" class="nav-link"
                    :class="scrolled ? 'text-steel' : 'text-white'">About</a>

                <a href="#services" class="nav-link"
                    :class="scrolled ? 'text-steel' : 'text-white'">Services</a>

                <a href="#contact"
                    class="bg-secondary text-white px-6 py-2 rounded font-bold text-xs uppercase">
                    Get Quote
                </a>
            </nav>

            <!-- MOBILE BUTTON -->
            <button @click="open = true"
                class="lg:hidden text-2xl p-2"
                :class="scrolled ? 'text-steel' : 'text-white'">

                <i class="ri-menu-3-line"></i>
            </button>
        </div>
    </div>

    
    <!-- FULLSCREEN MOBILE MENU -->
    <div x-show="open" x-cloak
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="fixed inset-0 z-50 bg-white flex flex-col lg:hidden">

        <!-- HEADER IN MENU -->
        <div class="flex justify-between items-center px-6 py-5 border-b border-gray-100">
            <a href="/" @click="open=false" class="flex items-center space-x-3">
                <img src="{{asset('assets/img/logos2.png')}}" class="w-10">
                <div class="flex flex-col">
                    <span class="text-sm font-bold text-steel">Designs Pvt. Ltd.</span>
                    <span class="text-[8px] tracking-[0.2em] text-secondary font-bold">BUILDING GREEN</span>
                </div>
            </a>
            <button @click="open = false" class="text-3xl text-steel leading-none">
                <i class="ri-close-line"></i>
            </button>
        </div>

        <!-- MENU CONTENT -->
        <div class="flex-1 overflow-y-auto px-8 py-10 flex flex-col">
            <!-- NAVIGATION LINKS -->
            <nav class="space-y-8 mb-12">
                <a @click="open=false" href="/" 
                    class="group flex items-center justify-between text-2xl font-bold text-steel hover:text-primary transition-colors">
                    <span>Home</span>
                    <i class="ri-arrow-right-s-line text-gray-300 group-hover:text-primary transition-colors"></i>
                </a>
                <a @click="open=false" href="#about" 
                    class="group flex items-center justify-between text-2xl font-bold text-steel hover:text-primary transition-colors">
                    <span>About Us</span>
                    <i class="ri-arrow-right-s-line text-gray-300 group-hover:text-primary transition-colors"></i>
                </a>
                <a @click="open=false" href="#services" 
                    class="group flex items-center justify-between text-2xl font-bold text-steel hover:text-primary transition-colors">
                    <span>Services</span>
                    <i class="ri-arrow-right-s-line text-gray-300 group-hover:text-primary transition-colors"></i>
                </a>
            </nav>

            <!-- QUICK CONTACT -->
            <div class="mt-auto space-y-6">
                <div class="bg-surface p-6 rounded-2xl border border-gray-100">
                    <p class="text-xs font-bold text-secondary uppercase tracking-widest mb-4">Quick Contact</p>
                    <div class="space-y-4">
                        <a href="mailto:info@s2sdesigns.com" class="flex items-center space-x-3 text-steel/80 hover:text-primary transition-colors">
                            <i class="ri-mail-line text-xl text-primary"></i>
                            <span class="text-sm font-medium">info@s2sdesigns.com</span>
                        </a>
                        <a href="tel:+1XXXXXXXXXX" class="flex items-center space-x-3 text-steel/80 hover:text-primary transition-colors">
                            <i class="ri-phone-line text-xl text-primary"></i>
                            <span class="text-sm font-medium">+1 (XXX) XXX-XXXX</span>
                        </a>
                    </div>
                </div>

                <!-- SOCIAL LINKS -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-surface border border-gray-100 flex items-center justify-center text-steel hover:bg-primary hover:text-white transition-all">
                        <i class="ri-linkedin-fill"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-surface border border-gray-100 flex items-center justify-center text-steel hover:bg-primary hover:text-white transition-all">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-surface border border-gray-100 flex items-center justify-center text-steel hover:bg-primary hover:text-white transition-all">
                        <i class="ri-twitter-x-line"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- MOBILE CTA -->
        <div class="p-6 border-t border-gray-100">
            <a @click="open=false" href="#contact"
                class="flex items-center justify-center w-full py-4 bg-primary text-white rounded-xl font-bold tracking-wider uppercase text-sm shadow-xl shadow-primary/20 active:scale-[0.98] transition-all">
                <span>Start Your Project</span>
                <i class="ri-arrow-right-line ml-2"></i>
            </a>
        </div>
    </div>

</header>