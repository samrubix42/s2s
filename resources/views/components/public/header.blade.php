<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<header x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-500"
    :class="scrolled ? 'bg-white shadow-lg border-b border-gray-100' : 'bg-transparent'">

    {{-- Top accent bar --}}

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center transition-all duration-500" :class="scrolled ? 'h-18' : 'h-22'">

            {{-- Logo --}}
            <a href="/" class="flex items-center space-x-3 group">
                <div class="w-12 h-auto flex items-center justify-center text-white font-oswald font-bold text-xl transition-transform group-hover:scale-105">
                    <img src="{{asset('assets/img/logos2.png')}}" alt="">
                </div>
                <div class="flex flex-col justify-center space-y-1">
                    <span class="text-xl font-oswald  font-bold leading-none tracking-tight transition-colors duration-300"
                        :class="scrolled ? 'text-steel' : 'text-white'">
                        Designs Pvt. Ltd.
                    </span>
                    <span class="text-[9px] px-[1px] font-bold tracking-[0.25em] leading-none mt-0.5 transition-colors duration-300"
                        :class="scrolled ? 'text-secondary' : 'text-secondary'">
                        BUILDING GREEN  With Innovation & Technology
                    </span>
                   
                </div>
            </a>

            {{-- Desktop Navigation --}}
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="/" class="text-sm font-bold uppercase tracking-widest transition-colors duration-300 border-b-2 border-transparent hover:border-secondary pb-1"
                    :class="scrolled ? 'text-steel hover:text-primary' : 'text-white/90 hover:text-white'">Home</a>
                <a href="#about" class="text-sm font-bold uppercase tracking-widest transition-colors duration-300 border-b-2 border-transparent hover:border-secondary pb-1"
                    :class="scrolled ? 'text-steel hover:text-primary' : 'text-white/90 hover:text-white'">About</a>
                <a href="#services" class="text-sm font-bold uppercase tracking-widest transition-colors duration-300 border-b-2 border-transparent hover:border-secondary pb-1"
                    :class="scrolled ? 'text-steel hover:text-primary' : 'text-white/90 hover:text-white'">Services</a>
                <a href="#contact" class="bg-secondary text-white px-7 py-2.5 rounded font-bold uppercase text-xs tracking-widest hover:bg-primary transition-all duration-300 shadow-lg hover:shadow-xl">
                    Get a Quote
                </a>
            </nav>

            {{-- Mobile button --}}
            <button @click="open = !open" class="lg:hidden p-2 rounded-lg transition-colors"
                :class="scrolled ? 'text-steel' : 'text-white'">
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="lg:hidden bg-white border-t border-gray-100 shadow-2xl">
        <div class="max-w-7xl mx-auto px-6 py-6 space-y-1">
            <a @click="open = false" href="/" class="block py-3 px-4 text-steel font-bold text-lg hover:bg-surface rounded-lg transition-colors">Home</a>
            <a @click="open = false" href="#about" class="block py-3 px-4 text-steel font-bold text-lg hover:bg-surface rounded-lg transition-colors">About Us</a>
            <a @click="open = false" href="#services" class="block py-3 px-4 text-steel font-bold text-lg hover:bg-surface rounded-lg transition-colors">Services</a>
            <div class="pt-3">
                <a @click="open = false" href="#contact" class="block w-full py-4 bg-primary text-white text-center rounded-lg font-bold uppercase tracking-widest text-sm shadow-lg">Get a Quote</a>
            </div>
        </div>
    </div>
</header>