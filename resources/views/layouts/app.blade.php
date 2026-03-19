<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="S2S Designs Pvt. Ltd. – Premier engineering & design firm specializing in sustainable steel framing, BIM modeling, and modular construction solutions.">

        <title>{{ $title ?? 'S2S Designs Pvt. Ltd. | Building Green' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>

        @livewireStyles
    </head>
    <body class="font-sans antialiased text-steel bg-white">
        <livewire:public.header />
        
        <main>
            {{ $slot }}
        </main>

        <livewire:public.footer />

        @livewireScripts
    </body>
</html>
