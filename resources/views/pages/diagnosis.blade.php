@extends('layouts.app')
@section('title', 'Mobile Car Diagnosis — Auto Expert')
@section('content')

<!-- ==========================================
     CINEMATIC POSTER HERO SECTION
=========================================== -->
<section class="relative min-h-[85vh] lg:min-h-screen flex flex-col justify-end overflow-hidden pt-32 pb-16 lg:pb-24 -mt-24 bg-slate-950">
    <!-- Premium Background Image (Professional mechanic inspecting car) -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1625047509248-ec889cbff17f?auto=format&fit=crop&q=80&w=2074')] bg-cover bg-[position:center_30%] md:bg-center bg-no-repeat bg-scroll md:bg-fixed"></div>

    <!-- Heavy Bottom Gradient for Flawless Text Readability -->
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/50 via-transparent to-transparent"></div>
    <div class="absolute inset-0 bg-blue-900/10 mix-blend-overlay"></div>

    <!-- Content (Bottom-Anchored, Split on Desktop for a creative layout) -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full flex flex-col lg:flex-row lg:items-end justify-between gap-8 mt-auto">

        <!-- Left Side: Title -->
        <div class="max-w-3xl" data-aos="fade-right">
            <span class="inline-block border border-blue-500/50 text-blue-400 bg-blue-500/10 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold tracking-widest mb-6 uppercase shadow-sm">
                Mobile Diagnostics
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tighter text-white leading-[1.1] drop-shadow-lg">
                Never Buy A <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Lemon Again.</span>
            </h1>
        </div>

        <!-- Right Side: Description & CTA -->
        <div class="max-w-lg lg:pb-3" data-aos="fade-left" data-aos-delay="200">
            <p class="text-base sm:text-lg text-slate-300 mb-8 leading-relaxed font-medium drop-shadow-md">
                Buying a used car without a proper inspection is a gamble. Our technicians come to the vehicle's location with professional computer diagnostic equipment to give you the absolute truth before you commit.
            </p>
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%27d%20like%20to%20book%20a%20mobile%20car%20diagnosis."
               target="_blank" class="inline-flex items-center justify-center gap-3 bg-blue-600 hover:bg-blue-500 text-white transition-all duration-300 px-8 py-4 rounded-full font-bold shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:-translate-y-1 w-full sm:w-auto group">
                Book a Diagnosis
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>

    </div>
</section>

<!-- ==========================================
     THE 3-STEP INSPECTION (Dark Premium Cards)
=========================================== -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 mb-4">What We Check</h2>
            <p class="text-slate-500 max-w-xl mx-auto text-lg font-medium">A rigorous, bumper-to-bumper digital and mechanical audit.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['n' => '01', 'title' => 'Engine & Electronics', 'desc' => 'Full OBD2 computer scan of engine control units, cleared error codes, transmission health, and sensor live data.'],
                ['n' => '02', 'title' => 'Mechanical Check', 'desc' => 'Physical inspection of brakes, suspension components, fluid leaks, and other critical wear-and-tear items.'],
                ['n' => '03', 'title' => 'Detailed Report', 'desc' => 'A clear, honest breakdown of the car’s true condition that you can use to negotiate the price down or walk away.'],
            ] as $i => $item)
                <!-- Dark gradient cards with glowing hover effects -->
                <div class="bg-gradient-to-br from-slate-900 to-slate-950 border border-slate-800 rounded-[2rem] p-8 relative overflow-hidden hover:shadow-2xl hover:shadow-blue-900/20 hover:-translate-y-2 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="{{ $i * 150 }}">

                    <!-- Decorative background watermark number -->
                    <div class="absolute -right-6 -top-6 text-[10rem] font-black text-slate-800/50 group-hover:text-slate-800 transition-colors duration-500 z-0 select-none leading-none">
                        {{ $item['n'] }}
                    </div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 mb-8 rounded-2xl bg-blue-600 text-white flex items-center justify-center font-extrabold text-xl shadow-lg shadow-blue-900/50 group-hover:scale-110 group-hover:bg-blue-500 transition-all duration-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="font-extrabold text-2xl mb-3 text-white tracking-tight">{{ $item['title'] }}</h3>
                        <p class="text-slate-400 font-medium leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     WHO IS THIS FOR? (Image & Text Split)
=========================================== -->
<section class="py-24 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

        <!-- Stunning Image Container -->
        <div class="relative h-[400px] md:h-[500px]" data-aos="fade-right" data-aos-duration="1000">
            <div class="absolute inset-0 bg-blue-100 rounded-[2.5rem] transform -translate-x-4 translate-y-4 -z-10 hidden sm:block"></div>
            <!-- High-quality image of diagnostic tablet -->
            <img src="https://images.pexels.com/photos/3806249/pexels-photo-3806249.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Car Diagnostic Tablet" class="rounded-[2.5rem] shadow-2xl shadow-slate-900/20 object-cover h-full w-full">

            <!-- Floating Stat Badge -->
            <div class="absolute -bottom-6 -right-2 sm:-right-6 bg-white p-5 sm:p-6 rounded-3xl shadow-xl shadow-slate-200 border border-slate-100" data-aos="fade-up" data-aos-delay="500">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <p class="font-extrabold text-slate-900 text-sm sm:text-base">On-Site</p>
                        <p class="text-[10px] sm:text-xs text-slate-500 font-bold uppercase tracking-wider">We come to you</p>
                    </div>
                </div>
            </div>
        </div>

        <div data-aos="fade-left" data-aos-duration="1000" class="lg:pl-8">
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight">
                Don't Leave Your Investment <br> <span class="text-slate-400">To Chance.</span>
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mb-8 leading-relaxed font-medium">
                Modern luxury cars are essentially computers on wheels. A polished exterior can easily hide thousands of Rands in electrical or mechanical faults.
            </p>

            <h3 class="font-bold text-slate-900 mb-4 uppercase tracking-wider text-sm">This Service Is Essential If You Are:</h3>
            <ul class="space-y-4 mb-8">
                <li class="flex items-center gap-4 text-slate-700 font-bold text-sm sm:text-base">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Buying a used car from a private seller or unverified yard.
                </li>
                <li class="flex items-center gap-4 text-slate-700 font-bold text-sm sm:text-base">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Importing a vehicle and need it verified upon arrival.
                </li>
                <li class="flex items-center gap-4 text-slate-700 font-bold text-sm sm:text-base">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Experiencing warning lights and need an independent scan.
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- ==========================================
     BOTTOM CTA (Banner Style)
=========================================== -->
<section class="py-32 px-6 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto relative overflow-hidden rounded-[3rem] shadow-2xl">
        <!-- Premium Automotive Background Image -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-slate-900/85 backdrop-blur-sm"></div>

        <div class="relative z-10 text-center px-6 py-20 md:py-32">
            <h3 class="text-3xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Ready For Peace Of Mind?</h3>
            <p class="text-slate-300 mb-10 max-w-2xl mx-auto text-base sm:text-lg font-medium leading-relaxed">
                Send us the location of the vehicle, and our technicians will schedule an immediate call-out to perform the diagnosis.
            </p>
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%27d%20like%20to%20book%20a%20mobile%20car%20diagnosis."
               target="_blank" class="inline-flex items-center justify-center gap-3 bg-white text-slate-900 hover:scale-105 transition-transform duration-300 px-8 sm:px-12 py-4 sm:py-5 rounded-full font-bold text-base sm:text-lg shadow-[0_0_30px_rgba(255,255,255,0.2)] w-full sm:w-auto">
                Book Diagnosis
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</section>
@endsection