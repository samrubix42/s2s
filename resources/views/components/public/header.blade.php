<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<header class="bg-white border-b border-gray-100 sticky top-0 z-50 shadow-sm" x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 20)">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center transition-all duration-300" :class="scrolled ? 'h-16' : 'h-24'">
            <!-- Logo area -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center space-x-3 group">
                    <div class="w-14 h-14 bg-gradient-s2s rounded-xl flex items-center justify-center text-white font-bold text-2xl shadow-lg ring-4 ring-white transition-transform group-hover:scale-105">S2S</div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-primary leading-none uppercase tracking-tight">S2S Designs</span>
                        <div class="flex items-center space-x-2 mt-1">
                            <div class="h-[2px] w-4 bg-secondary"></div>
                            <span class="text-[10px] font-black text-secondary uppercase tracking-[0.2em] leading-none">Building Green</span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-10">
                <a href="/" class="text-industry font-bold uppercase text-[13px] tracking-widest hover:text-primary transition-colors border-b-2 border-transparent hover:border-secondary py-1">Home</a>
                <a href="#about" class="text-industry font-bold uppercase text-[13px] tracking-widest hover:text-primary transition-colors border-b-2 border-transparent hover:border-secondary py-1">About</a>
                <a href="#services" class="text-industry font-bold uppercase text-[13px] tracking-widest hover:text-primary transition-colors border-b-2 border-transparent hover:border-secondary py-1">Services</a>
                <a href="#projects" class="text-industry font-bold uppercase text-[13px] tracking-widest hover:text-primary transition-colors border-b-2 border-transparent hover:border-secondary py-1">Engineering</a>
                <a href="#contact" class="bg-primary text-white px-8 py-3 rounded-md font-bold uppercase text-xs tracking-[0.2em] hover:bg-secondary hover:text-primary transition-all shadow-xl hover:shadow-secondary/20">Estimate</a>
            </nav>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-industry p-2 focus:outline-none rounded-lg bg-gray-50 border border-gray-100 shadow-sm transition-all" :class="open ? 'bg-primary text-white' : ''">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="md:hidden bg-white border-t border-gray-100 shadow-2xl overflow-hidden absolute w-full left-0">
        <div class="px-6 py-8 flex flex-col space-y-6">
            <a @click="open = false" href="/" class="text-industry font-black text-xl tracking-tight flex items-center justify-between">
                HOME
                <span class="text-secondary">01</span>
            </a>
            <a @click="open = false" href="#about" class="text-industry font-black text-xl tracking-tight flex items-center justify-between">
                ABOUT US
                <span class="text-secondary">02</span>
            </a>
            <a @click="open = false" href="#services" class="text-industry font-black text-xl tracking-tight flex items-center justify-between">
                SERVICES
                <span class="text-secondary">03</span>
            </a>
            <a @click="open = false" href="#projects" class="text-industry font-black text-xl tracking-tight flex items-center justify-between">
                ENGINEERING
                <span class="text-secondary">04</span>
            </a>
            <div class="pt-4">
                <a @click="open = false" href="#contact" class="bg-primary text-white block w-full py-5 rounded-xl font-black text-center text-sm tracking-widest shadow-xl">GET A QUOTE</a>
            </div>
        </div>
    </div>
</header>