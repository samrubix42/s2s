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

        <!-- ✅ FIX: removed max-w-7xl (no unwanted side gap) -->
        <div class="flex justify-between items-center h-20 px-4 md:px-8 transition-all duration-300">

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

    
   <div x-show="open" x-cloak
    x-transition.opacity
    class="fixed inset-0 z-50 bg-gradient-to-b from-white via-surface to-white text-steel flex flex-col">

    <!-- TOP BAR WITH LOGO -->
    <div class="flex justify-between items-center px-5 py-4 border-b border-gray-100">

        <!-- LOGO -->
        <a href="/" @click="open=false" class="flex items-center space-x-2">
            <img src="{{asset('assets/img/logos2.png')}}" class="w-10">

            <div class="flex flex-col">
                <span class="text-sm font-bold">
                Designs Pvt. Ltd.
            </span>
            <p class="text-[9px] tracking-[0.25em] text-secondary">
                        BUILDING GREEN
                    </p>
            </div>
        </a>

        <!-- CLOSE BUTTON -->
        <button @click="open = false" class="text-2xl">
            <i class="ri-close-line"></i>
        </button>
    </div>

    <!-- MENU ITEMS -->
    <div class="flex-1 flex flex-col justify-center px-6">

        <div class="space-y-6 text-lg font-medium text-center">

            <a @click="open=false" href="/" 
                class="block transition hover:text-primary">
                Home
            </a>

            <a @click="open=false" href="#about" 
                class="block transition hover:text-primary">
                About
            </a>

            <a @click="open=false" href="#services" 
                class="block transition hover:text-primary">
                Services
            </a>

        </div>

    </div>

    <!-- CTA -->
    <div class="px-6 pb-8">
        <a @click="open=false" href="#contact"
            class="block w-full text-center py-3 bg-primary text-white rounded-md font-semibold tracking-wide hover:bg-primary-dark transition">
            Get a Quote
        </a>
    </div>

</div>

</header>