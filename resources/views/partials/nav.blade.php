@php $wa = config('cars.whatsapp_number'); @endphp
<!-- Solid White Full-Width Navbar -->
<header x-data="{ open: false, scrolled: false }" 
        @scroll.window="scrolled = (window.pageYOffset > 20)"
        :class="scrolled ? 'shadow-md border-slate-200' : 'border-slate-100'"
        class="fixed top-0 left-0 right-0 w-full z-50 bg-white border-b transition-all duration-300">
    
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        
        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-2xl font-extrabold tracking-tighter text-slate-900 flex items-center gap-1">
            Auto<span class="text-blue-600">Expert</span>
        </a>
        
        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex items-center gap-6 text-sm font-bold text-slate-600">
            <a href="{{ route('buy') }}" class="hover:text-slate-900 transition-colors">Buy</a>
            <a href="{{ route('sell') }}" class="hover:text-slate-900 transition-colors">Sell</a>
            <a href="{{ route('diagnosis') }}" class="hover:text-slate-900 transition-colors">Diagnosis</a>
            <a href="{{ route('financing') }}" class="hover:text-slate-900 transition-colors">Financing</a>
            <a href="{{ route('test-drive') }}" class="hover:text-slate-900 transition-colors">Test Drive</a>
            <a href="{{ route('about') }}" class="hover:text-slate-900 transition-colors">About</a>
        </nav>
        
        <!-- Right Side CTA & Menu -->
        <div class="flex items-center gap-5">
            <a href="{{ route('contact') }}" 
               class="hidden lg:inline-block bg-slate-900 hover:bg-slate-800 text-white transition-all px-7 py-2.5 rounded-full text-sm font-bold shadow-md hover:-translate-y-0.5">
                Contact Us
            </a>
            
            <!-- Mobile Menu Toggle -->
            <button @click="open = !open" class="lg:hidden text-slate-900 p-1 hover:text-blue-600 transition-colors">
                <svg x-show="!open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="open" x-cloak class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div x-show="open" x-cloak @click.away="open = false" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden absolute top-full left-0 w-full bg-white border-b border-slate-200 shadow-2xl px-6 py-6 space-y-5">
         
        <a href="{{ route('buy') }}" class="block text-slate-600 hover:text-slate-900 font-bold text-lg">Buy a Car</a>
        <a href="{{ route('sell') }}" class="block text-slate-600 hover:text-slate-900 font-bold text-lg">Sell Your Car</a>
        <a href="{{ route('diagnosis') }}" class="block text-slate-600 hover:text-slate-900 font-bold text-lg">Diagnosis</a>
        <a href="{{ route('financing') }}" class="block text-slate-600 hover:text-slate-900 font-bold text-lg">Financing</a>
        <a href="{{ route('test-drive') }}" class="block text-slate-600 hover:text-slate-900 font-bold text-lg">Test Drive</a>
        <a href="{{ route('about') }}" class="block text-slate-600 hover:text-slate-900 font-bold text-lg">About</a>
        
        <hr class="border-slate-100 my-2">
        
        <a href="{{ route('contact') }}" class="block w-full bg-slate-900 hover:bg-slate-800 text-white transition-colors px-5 py-4 rounded-xl text-center font-bold">
            Contact Us
        </a>
    </div>
</header>