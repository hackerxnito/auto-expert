@extends('layouts.app')
@section('title', 'Auto Expert — Premium Car Sourcing & Sales')
@section('content')

<!-- ==========================================
     HERO SECTION (Cinematic & Dark)
=========================================== -->
<section class="relative min-h-screen flex items-center overflow-hidden -mt-24 pt-24 bg-slate-900">
    <!-- Premium Dark Background Image -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?auto=format&fit=crop&q=80&w=2069')] bg-cover bg-center"></div>
    
    <!-- Gradient overlay to make text readable while keeping the car visible -->
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full" data-aos="fade-right" data-aos-duration="1200">
        <span class="inline-block border border-blue-500/50 text-blue-400 bg-blue-500/10 backdrop-blur-md px-5 py-2 rounded-full text-xs font-bold tracking-widest mb-8 uppercase">
            Elite Auto Concierge
        </span>
        <h1 class="text-6xl md:text-8xl font-extrabold mb-6 tracking-tighter text-white leading-[1.1] max-w-3xl">
            Find Your <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Perfect Drive.</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl leading-relaxed font-medium">
            From premier vehicle sourcing and mobile diagnostics to flexible financing. No inventory needed — just your vision, delivered.
        </p>
        <div class="flex flex-col sm:flex-row gap-5">
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%20am%20looking%20to%20source%20a%20specific%20vehicle."
               target="_blank" class="bg-blue-600 hover:bg-blue-500 text-white transition-all duration-300 px-10 py-4 rounded-full font-bold shadow-lg shadow-blue-900/50 flex items-center justify-center gap-3 group">
                <span>Start Sourcing</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="{{ route('sell') }}" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/20 transition-all duration-300 px-10 py-4 rounded-full font-bold flex items-center justify-center">
                Sell My Car
            </a>
        </div>
    </div>
</section>

<!-- ==========================================
     BRANDS MARQUEE
=========================================== -->
<div class="w-full bg-slate-950 border-b border-slate-800 py-6 overflow-hidden relative z-20">
    <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-slate-950 to-transparent z-10 pointer-events-none"></div>
    <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-slate-950 to-transparent z-10 pointer-events-none"></div>
    <div class="flex animate-marquee whitespace-nowrap gap-24 text-slate-500 font-extrabold tracking-widest text-sm uppercase items-center">
        @foreach(array_merge($brands ?? config('cars.brands'), $brands ?? config('cars.brands')) as $brand)
            <span class="hover:text-white transition-colors duration-300 cursor-default">{{ $brand['name'] }}</span>
        @endforeach
    </div>
</div>

<!-- ==========================================
     FEATURE SECTION (The Creative Split)
=========================================== -->
<section class="py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <!-- Floating Image Collage -->
        <div class="relative h-[600px]" data-aos="fade-right" data-aos-duration="1000">
            <!-- Main large image -->
            <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&q=80&w=2070" alt="Luxury Car" class="absolute top-0 left-0 w-4/5 h-4/5 object-cover rounded-[2.5rem] shadow-2xl z-10">
            <!-- Secondary overlapping image -->
            <img src="https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?auto=format&fit=crop&q=80&w=1932" alt="Detail" class="absolute bottom-0 right-0 w-3/5 h-3/5 object-cover rounded-[2.5rem] shadow-2xl z-20 border-8 border-white">
            <!-- Decorative circle -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-slate-50 rounded-full -z-10"></div>
        </div>

        <div data-aos="fade-left" data-aos-duration="1000" class="lg:pl-10">
            <h2 class="text-4xl md:text-6xl font-extrabold tracking-tighter text-slate-900 mb-6 leading-tight">
                We Don't Just Sell Cars.<br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-slate-400 to-slate-600">We Source Perfection.</span>
            </h2>
            <p class="text-lg text-slate-600 mb-8 leading-relaxed font-medium">
                Whether you are hunting for a rare import or looking to offload your current vehicle without the headache of public marketplaces, our private concierge network handles the negotiations, diagnostics, and paperwork.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                    <div class="w-10 h-10 bg-slate-900 text-white rounded-xl flex items-center justify-center mb-4 font-bold">1</div>
                    <h4 class="font-bold text-slate-900 mb-1">Independent Scans</h4>
                    <p class="text-sm text-slate-500">Full computer diagnostics before any purchase.</p>
                </div>
                <div class="bg-slate-50 p-6 rounded-3xl border border-slate-100">
                    <div class="w-10 h-10 bg-slate-900 text-white rounded-xl flex items-center justify-center mb-4 font-bold">2</div>
                    <h4 class="font-bold text-slate-900 mb-1">Private Network</h4>
                    <p class="text-sm text-slate-500">Sell silently to verified, serious buyers only.</p>
                </div>
            </div>
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-slate-900 font-bold hover:gap-4 transition-all bg-white border-2 border-slate-900 px-8 py-3 rounded-full hover:bg-slate-900 hover:text-white">
                Discover Our Story &rarr;
            </a>
        </div>
    </div>
</section>

<!-- ==========================================
     VISUAL SERVICES (Photographic Cards)
=========================================== -->
<section id="services" class="py-32 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight text-slate-900 mb-6">Complete Solutions</h2>
            <p class="text-slate-500 max-w-xl mx-auto text-lg font-medium">Everything you need, handled by specialists.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @php
                $services = [
                    ['title' => 'Vehicle Sourcing', 'desc' => 'We hunt down the best local and imported options and bring them to you.', 'route' => 'buy', 'img' => 'https://images.unsplash.com/photo-1580273916550-e323be2ae537?auto=format&fit=crop&q=80&w=1964'],
                    ['title' => 'Consignment Sales', 'desc' => 'We market your car, handle test drives, and secure the best price.', 'route' => 'sell', 'img' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?auto=format&fit=crop&q=80&w=2071'],
                    
                    // Fixed images below using highly reliable Pexels links
                    ['title' => 'Mobile Diagnostics', 'desc' => 'Advanced computer diagnostics to thoroughly inspect any car.', 'route' => 'diagnosis', 'img' => 'https://images.pexels.com/photos/3806249/pexels-photo-3806249.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'],
                    ['title' => 'Financing Options', 'desc' => 'Flexible financing available. Test drive your sourced car at your doorstep.', 'route' => 'financing', 'img' => 'https://images.pexels.com/photos/7144176/pexels-photo-7144176.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'],
                ];
            @endphp
            @foreach($services as $i => $s)
                <a href="{{ route($s['route']) }}" class="group relative overflow-hidden rounded-[2.5rem] h-[400px] hover:shadow-2xl hover:shadow-slate-300/50 hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="{{ ($i % 2) * 100 }}">
                    
                    <!-- Background Image -->
                    <img src="{{ $s['img'] }}" alt="{{ $s['title'] }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    
                    <!-- Dark Gradient Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 p-10 flex flex-col justify-end text-white">
                        <h3 class="text-3xl font-bold mb-3 tracking-tight">{{ $s['title'] }}</h3>
                        <p class="text-slate-300 leading-relaxed font-medium mb-6 max-w-sm">{{ $s['desc'] }}</p>
                        
                        <div class="flex items-center gap-3 font-bold text-sm uppercase tracking-widest text-blue-400 group-hover:text-white transition-colors">
                            Explore 
                            <span class="group-hover:translate-x-2 transition-transform" aria-hidden="true">&rarr;</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     FINAL CTA (With Image Background)
=========================================== -->
<section class="relative py-40 overflow-hidden bg-slate-950 mx-4 md:mx-10 mb-10 rounded-[3rem]" data-aos="fade-up">
    <!-- Outsourced image of premium car interior -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center opacity-40 mix-blend-luminosity"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 to-slate-950/40"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto text-center px-6">
        <h2 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-8 leading-[1.1] text-white">
            Your Next Premier Experience <br><span class="text-blue-400">Is One Message Away.</span>
        </h2>
        <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%20want%20to%20get%20started."
           target="_blank" class="inline-block bg-white text-slate-900 hover:scale-105 transition-transform duration-300 px-12 py-5 rounded-full font-bold text-lg shadow-2xl shadow-white/10 mt-6">
            Let's Start Now
        </a>
    </div>
</section>
@endsection