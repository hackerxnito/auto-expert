@extends('layouts.app')
@section('title', 'Sell Your Car — Consignment | Auto Expert')
@section('content')

<!-- ==========================================
     CINEMATIC HERO SECTION
=========================================== -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden -mt-24 pt-24">
    <!-- Premium Background Image (Parallax on desktop) -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1583121274602-3e2820c69888?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center bg-scroll md:bg-fixed"></div>

    <!-- Gradient Overlays: Dark at the top for text, clear in the middle for the car, fading to dark slate at the bottom for a perfect transition -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/90 via-slate-950/30 to-slate-950"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-transparent to-slate-950/80"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center mt-12" data-aos="fade-up">
        <span class="inline-block border border-blue-400/30 text-blue-300 bg-blue-900/30 backdrop-blur-md px-5 py-2 rounded-full text-xs font-bold tracking-widest mb-6 uppercase shadow-sm">
            Private Consignment
        </span>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter text-white mb-6 drop-shadow-[0_2px_12px_rgba(0,0,0,0.8)]">
            We Sell Your Car, <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">So You Don't Have To.</span>
        </h1>
        <p class="text-lg md:text-xl text-slate-200 font-medium leading-relaxed max-w-2xl mx-auto drop-shadow-md">
            Skip the endless calls from bargain hunters and time-wasters. We market your vehicle to our network of serious buyers across South Africa, handle inquiries, and bring you real offers.
        </p>
    </div>

    <!-- Animated Scroll Down Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center animate-bounce opacity-70 z-10">
        <span class="text-slate-400 text-xs font-bold tracking-widest uppercase mb-2">Scroll</span>
        <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </div>
</section>

<!-- ==========================================
     THE ADVANTAGE (Image & Text Split)
=========================================== -->
<section class="py-24 max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div data-aos="fade-right" data-aos-duration="1000">
            <h2 class="text-4xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight">
                Maximum Value.<br> <span class="text-slate-400">Zero Friction.</span>
            </h2>
            <p class="text-lg text-slate-600 mb-6 leading-relaxed font-medium">
                Selling a premium vehicle privately exposes you to unnecessary risks, lowball offers, and wasted weekends. Our consignment service is designed for owners who value their time and security.
            </p>
            <ul class="space-y-4 mb-8">
                <li class="flex items-center gap-4 text-slate-700 font-bold">
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Secure test drives managed by our team
                </li>
                <li class="flex items-center gap-4 text-slate-700 font-bold">
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Professional marketing and photography
                </li>
                <li class="flex items-center gap-4 text-slate-700 font-bold">
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Access to our exclusive buyer network
                </li>
            </ul>
        </div>

        <div class="relative h-[500px]" data-aos="fade-left" data-aos-duration="1000">
            <div class="absolute inset-0 bg-slate-100 rounded-[2.5rem] transform translate-x-4 translate-y-4 -z-10"></div>
            <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?auto=format&fit=crop&q=80&w=2071" alt="Keys Handover" class="rounded-[2.5rem] shadow-2xl shadow-slate-900/20 object-cover w-full h-full">
        </div>
    </div>
</section>

<!-- ==========================================
     THE 4-STEP PROCESS (Dark Premium Cards)
=========================================== -->
<section class="py-24 bg-slate-50 border-y border-slate-200 mt-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight text-slate-900 mb-4">How It Works</h2>
            <p class="text-slate-500 max-w-xl mx-auto text-lg font-medium">A transparent, seamless process from listing to payment.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach([
                ['n' => 1, 'title' => 'Tell Us About It', 'desc' => 'Send us the make, model, year, mileage, and current photos via WhatsApp.'],
                ['n' => 2, 'title' => 'We Value & List', 'desc' => 'We assess a fair South African market price and push it to our private network.'],
                ['n' => 3, 'title' => 'We Handle Buyers', 'desc' => 'All inquiries, price negotiations, and secure test drives are managed by us.'],
                ['n' => 4, 'title' => 'You Get Paid', 'desc' => 'Once the deal closes, payment is transferred directly to you. No chasing funds.'],
            ] as $i => $step)
                <!-- Dark gradient cards with glowing hover effects -->
                <div class="bg-gradient-to-br from-slate-900 to-slate-950 border border-slate-800 rounded-[2rem] p-8 relative overflow-hidden hover:shadow-2xl hover:shadow-blue-900/20 hover:-translate-y-2 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    
                    <!-- Decorative background watermark number -->
                    <div class="absolute -right-2 -top-6 text-[10rem] font-black text-slate-800/50 group-hover:text-slate-800 transition-colors duration-500 z-0 select-none leading-none">
                        {{ $step['n'] }}
                    </div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 mb-8 rounded-2xl bg-blue-600 text-white flex items-center justify-center font-extrabold text-xl shadow-lg shadow-blue-900/50 group-hover:scale-110 group-hover:bg-blue-500 transition-all duration-500">
                            {{ $step['n'] }}
                        </div>
                        <h3 class="font-extrabold text-xl mb-3 text-white tracking-tight">{{ $step['title'] }}</h3>
                        <p class="text-slate-400 font-medium leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ==========================================
     BOTTOM CTA (Banner Style)
=========================================== -->
<section class="py-32 px-6 bg-white" data-aos="fade-up">
    <div class="max-w-7xl mx-auto relative overflow-hidden rounded-[3rem] shadow-2xl">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=2066')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-slate-900/85 backdrop-blur-sm"></div>

        <div class="relative z-10 text-center px-6 py-24 md:py-32">
            <h3 class="text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">No Hidden Surprises</h3>
            <p class="text-slate-300 mb-10 max-w-2xl mx-auto text-lg font-medium leading-relaxed">
                We are completely upfront about our commission before you commit. Nothing is deducted or finalized without your explicit agreement.
            </p>
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%20want%20to%20sell%20my%20car%20via%20consignment."
               target="_blank" class="inline-block bg-white text-slate-900 hover:scale-105 transition-transform duration-300 px-12 py-5 rounded-full font-bold text-lg shadow-[0_0_30px_rgba(255,255,255,0.2)]">
                Start Selling Now
            </a>
        </div>
    </div>
</section>
@endsection