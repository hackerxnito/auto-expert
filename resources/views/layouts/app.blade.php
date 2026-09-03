<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Auto Expert — Premium Car Sourcing & Sales')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        [x-cloak] { display: none !important; }
        /* Light mode scrollbar and base adjustments */
        body { font-family: 'Inter', sans-serif; background-color: #ffffff; color: #0f172a; }
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-100%); }
        }
        .animate-marquee { display: flex; animation: marquee 30s linear infinite; }
        .w-full:hover .animate-marquee { animation-play-state: paused; }
    </style>
    @stack('styles')
</head>
<body class="bg-white text-slate-900 antialiased selection:bg-slate-900 selection:text-white relative">
    
    @include('partials.nav')
    
    <main class="min-h-screen pt-24">
        @yield('content')
    </main>
    
    @include('partials.footer')
    @include('partials.whatsapp-float')
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({ duration: 800, easing: 'ease-out-quad', once: true, offset: 50 });
        });
    </script>
    @stack('scripts')
</body>
</html>