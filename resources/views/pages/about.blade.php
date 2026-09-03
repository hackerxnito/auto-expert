@extends('layouts.app')
@section('title', 'About Us — Auto Expert')
@section('content')

<!-- ==========================================
     CINEMATIC POSTER HERO SECTION
=========================================== -->
<section class="relative min-h-[85vh] lg:min-h-screen flex flex-col justify-end overflow-hidden pt-32 pb-16 lg:pb-24 -mt-24 bg-slate-950">
    <!-- Premium Background Image (Luxury Auto Interior/Detail) -->
    <div class="absolute inset-0 bg-cover bg-[position:center_40%] bg-no-repeat bg-scroll md:bg-fixed" 
         style="background-image: url('https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&q=80&w=2070');"></div>

    <!-- Heavy Bottom Gradient for Flawless Text Readability -->
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/50 via-transparent to-transparent"></div>
    <div class="absolute inset-0 bg-blue-900/10 mix-blend-overlay"></div>

    <!-- Content (Bottom-Anchored) -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full flex flex-col mt-auto" data-aos="fade-up">
        
        <div class="max-w-4xl mb-12">
            <span class="inline-block border border-blue-500/50 text-blue-400 bg-blue-500/10 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold tracking-widest mb-6 uppercase shadow-sm">
                Our Story
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tighter text-white leading-[1.1] drop-shadow-lg mb-6">
                Built on Trust, <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Driven by Expertise.</span>
            </h1>
            <p class="text-base sm:text-lg md:text-xl text-slate-300 leading-relaxed font-medium drop-shadow-md max-w-3xl">
                Auto Expert exists to remove the guesswork and risk from buying and selling vehicles in South Africa. Whether you're hunting for a specific high-end model, offloading your car without the hassle of buyers, or simply want peace of mind before purchasing — we handle it end to end.
            </p>
        </div>

        <!-- Glassmorphism Stats Strip -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-[2rem] shadow-xl w-full">
            <div class="text-center md:text-left">
                <p class="text-3xl sm:text-4xl font-black text-white">50+</p>
                <p class="text-xs sm:text-sm font-bold text-cyan-400 uppercase tracking-widest mt-1">Vehicles Sourced</p>
            </div>
            <div class="text-center md:text-left">
                <p class="text-3xl sm:text-4xl font-black text-white">100%</p>
                <p class="text-xs sm:text-sm font-bold text-cyan-400 uppercase tracking-widest mt-1">Transparent</p>
            </div>
            <div class="text-center md:text-left">
                <p class="text-3xl sm:text-4xl font-black text-white">Any</p>
                <p class="text-xs sm:text-sm font-bold text-cyan-400 uppercase tracking-widest mt-1">Make & Model</p>
            </div>
            <div class="text-center md:text-left">
                <p class="text-3xl sm:text-4xl font-black text-white">24/7</p>
                <p class="text-xs sm:text-sm font-bold text-cyan-400 uppercase tracking-widest mt-1">Client Support</p>
            </div>
        </div>
        
    </div>
</section>

<!-- ==========================================
     WHY CLIENTS CHOOSE US (Dark Premium Cards)
=========================================== -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 mb-4">Why Clients Choose Us</h2>
            <p class="text-slate-500 max-w-xl mx-auto text-lg font-medium">A completely redefined dealership experience.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'No Pressure Sales', 'desc' => 'We work on your terms. Inquire, ask questions, take your time. You will never experience pushy showroom sales tactics with us.'],
                ['icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Independent Diagnostics', 'desc' => 'Our diagnostic checks are brutal, honest, and thorough, whether the car is one we sourced or one you found elsewhere.'],
                ['icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9', 'title' => 'Wide Sourcing Network', 'desc' => 'Beyond the major brands we showcase, our private network allows us to source virtually any exotic or classic model on request.'],
            ] as $i => $item)
                <!-- Dark gradient cards with glowing hover effects -->
                <div class="bg-gradient-to-br from-slate-900 to-slate-950 border border-slate-800 rounded-[2rem] p-8 relative overflow-hidden hover:shadow-2xl hover:shadow-blue-900/20 hover:-translate-y-2 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="{{ $i * 150 }}">
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 mb-8 rounded-2xl bg-blue-600 text-white flex items-center justify-center font-extrabold text-xl shadow-lg shadow-blue-900/50 group-hover:scale-110 group-hover:bg-blue-500 transition-all duration-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"></path></svg>
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
     THE AUTO EXPERT DIFFERENCE (Image & Text Split)
=========================================== -->
<section class="py-24 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <!-- Stunning Image Container -->
        <div class="relative h-[400px] md:h-[500px]" data-aos="fade-right" data-aos-duration="1000">
            <div class="absolute inset-0 bg-blue-100 rounded-[2.5rem] transform -translate-x-4 translate-y-4 -z-10 hidden sm:block"></div>
            <!-- High-quality lifestyle image -->
            <img src="https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?auto=format&fit=crop&q=80&w=1932" alt="Premium Auto Expert Service" class="rounded-[2.5rem] shadow-2xl shadow-slate-900/20 object-cover h-full w-full">
            
            <!-- Floating Badge -->
            <div class="absolute -bottom-6 -right-2 sm:-right-6 bg-slate-900 p-5 sm:p-8 rounded-3xl shadow-xl border border-slate-800" data-aos="fade-up" data-aos-delay="500">
                <h4 class="text-white font-extrabold text-lg sm:text-xl mb-1">South Africa's</h4>
                <p class="text-cyan-400 font-bold uppercase tracking-widest text-[10px] sm:text-xs">Elite Concierge</p>
            </div>
        </div>

        <div data-aos="fade-left" data-aos-duration="1000" class="lg:pl-8">
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight">
                Operating as your <br> <span class="text-slate-400">Private Concierge.</span>
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mb-8 leading-relaxed font-medium">
                Traditional dealerships are limited by the inventory sitting on their showroom floors. Private sales are riddled with security risks and time-wasters. Auto Expert bridges the gap.
            </p>
            
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex gap-4 items-start transition-all hover:shadow-md">
                    <div class="flex-shrink-0 w-10 h-10 bg-slate-900 text-white rounded-xl flex items-center justify-center font-bold">1</div>
                    <div>
                        <h4 class="font-extrabold text-slate-900 mb-1">Unmatched Sourcing</h4>
                        <p class="text-sm text-slate-500 font-medium leading-relaxed">If the vehicle exists in South Africa, we will locate it and negotiate the absolute best price on your behalf.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex gap-4 items-start transition-all hover:shadow-md">
                    <div class="flex-shrink-0 w-10 h-10 bg-slate-900 text-white rounded-xl flex items-center justify-center font-bold">2</div>
                    <div>
                        <h4 class="font-extrabold text-slate-900 mb-1">End-to-End Execution</h4>
                        <p class="text-sm text-slate-500 font-medium leading-relaxed">From mechanical verification to securing finance and finalizing paperwork, we handle every detail until the keys are in your hand.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================
     BOTTOM CTA (Banner Style)
=========================================== -->
<section class="py-32 px-6 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto relative overflow-hidden rounded-[3rem] shadow-2xl">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" 
             style="background-image: url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&q=80&w=2070');"></div>
        <div class="absolute inset-0 bg-slate-900/85 backdrop-blur-sm"></div>

        <div class="relative z-10 text-center px-6 py-20 md:py-32">
            <h3 class="text-3xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Ready to Talk?</h3>
            <p class="text-slate-300 mb-10 max-w-2xl mx-auto text-base sm:text-lg font-medium leading-relaxed">
                Connect with our concierge team today and let us handle your next automotive move.
            </p>
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%27d%20like%20to%20know%20more%20about%20your%20services."
               target="_blank" class="inline-flex items-center justify-center gap-3 bg-white text-slate-900 hover:scale-105 transition-transform duration-300 px-8 sm:px-12 py-4 sm:py-5 rounded-full font-bold text-base sm:text-lg shadow-[0_0_30px_rgba(255,255,255,0.2)] w-full sm:w-auto">
                Chat With Us
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</section>
@endsection