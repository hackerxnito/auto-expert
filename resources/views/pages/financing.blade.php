@extends('layouts.app')
@section('title', 'Financing — Auto Expert')
@section('content')

<!-- ==========================================
     CINEMATIC POSTER HERO SECTION
=========================================== -->
<section class="relative min-h-[85vh] lg:min-h-screen flex flex-col justify-end overflow-hidden pt-32 pb-16 lg:pb-24 -mt-24 bg-slate-950">
    <!-- Brand New Premium Background Image (Range Rover on Dark Background) -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1606152421802-db97b9c7a11b?auto=format&fit=crop&q=80&w=2074')] bg-cover bg-[position:center_30%] md:bg-center bg-no-repeat bg-scroll md:bg-fixed"></div>

    <!-- Heavy Bottom Gradient for Flawless Text Readability -->
    <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/50 via-transparent to-transparent"></div>
    <div class="absolute inset-0 bg-blue-900/10 mix-blend-overlay"></div>

    <!-- Content (Bottom-Anchored, Split on Desktop for a creative layout) -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full flex flex-col lg:flex-row lg:items-end justify-between gap-8 mt-auto">
        
        <!-- Left Side: Title -->
        <div class="max-w-3xl" data-aos="fade-right">
            <span class="inline-block border border-blue-500/50 text-blue-400 bg-blue-500/10 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold tracking-widest mb-6 uppercase shadow-sm">
                Asset Finance
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tighter text-white leading-[1.1] drop-shadow-lg">
                Drive Now, <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Pay Flexibly.</span>
            </h1>
        </div>

        <!-- Right Side: Description & CTA -->
        <div class="max-w-lg lg:pb-3" data-aos="fade-left" data-aos-delay="200">
            <p class="text-base sm:text-lg text-slate-300 mb-8 leading-relaxed font-medium drop-shadow-md">
                We understand that paying for a premium vehicle upfront isn't always practical. We partner with top South African financiers to structure a payment plan tailored perfectly to your lifestyle.
            </p>
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%27m%20interested%20in%20financing%20options."
               target="_blank" class="inline-flex items-center justify-center gap-3 bg-blue-600 hover:bg-blue-500 text-white transition-all duration-300 px-8 py-4 rounded-full font-bold shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:-translate-y-1 w-full sm:w-auto group">
                Ask About Financing
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
        
    </div>
</section>

<!-- ==========================================
     THE 3-STEP PROCESS (Dark Premium Cards)
=========================================== -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 mb-4">How It Works</h2>
            <p class="text-slate-500 max-w-xl mx-auto text-lg font-medium">Securing your dream car is simpler than you think.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['n' => '01', 'title' => 'Tell Us Your Budget', 'desc' => 'Share what you can comfortably afford monthly, or let us know your ideal deposit amount via a quick WhatsApp chat.'],
                ['n' => '02', 'title' => 'We Match Options', 'desc' => 'We negotiate with our network of vehicle finance partners to secure the most competitive interest rates for your profile.'],
                ['n' => '03', 'title' => 'Drive Away', 'desc' => 'Once approved, we handle all the tedious paperwork. You simply sign, take the keys, and enjoy your new drive.'],
            ] as $i => $item)
                <!-- Dark gradient cards with glowing hover effects -->
                <div class="bg-gradient-to-br from-slate-900 to-slate-950 border border-slate-800 rounded-[2rem] p-8 relative overflow-hidden hover:shadow-2xl hover:shadow-blue-900/20 hover:-translate-y-2 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="{{ $i * 150 }}">
                    
                    <!-- Decorative background watermark number -->
                    <div class="absolute -right-6 -top-6 text-[10rem] font-black text-slate-800/50 group-hover:text-slate-800 transition-colors duration-500 z-0 select-none leading-none">
                        {{ $item['n'] }}
                    </div>

                    <div class="relative z-10">
                        <div class="w-14 h-14 mb-8 rounded-2xl bg-blue-600 text-white flex items-center justify-center font-extrabold text-xl shadow-lg shadow-blue-900/50 group-hover:scale-110 group-hover:bg-blue-500 transition-all duration-500">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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
     WHY FINANCE WITH US? (Image & Text Split)
=========================================== -->
<section class="py-24 bg-slate-50 border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <div data-aos="fade-right" data-aos-duration="1000" class="lg:pr-8">
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight">
                Tailored Rates. <br> <span class="text-slate-400">Total Transparency.</span>
            </h2>
            <p class="text-base sm:text-lg text-slate-600 mb-8 leading-relaxed font-medium">
                Going directly to a bank can be tedious and often results in rigid, off-the-shelf loan structures. Our dedicated finance managers leverage our dealership volume to negotiate better rates on your behalf.
            </p>
            
            <ul class="space-y-4 mb-8">
                <li class="flex items-center gap-4 text-slate-700 font-bold text-sm sm:text-base">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Access to major South African banks and private lenders.
                </li>
                <li class="flex items-center gap-4 text-slate-700 font-bold text-sm sm:text-base">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Fast pre-approvals without impacting your credit score unnecessarily.
                </li>
                <li class="flex items-center gap-4 text-slate-700 font-bold text-sm sm:text-base">
                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm">✓</div>
                    Trade-ins accepted as deposits for your new vehicle.
                </li>
            </ul>
        </div>

        <!-- Stunning Image Container -->
        <div class="relative h-[400px] md:h-[500px]" data-aos="fade-left" data-aos-duration="1000">
            <div class="absolute inset-0 bg-blue-100 rounded-[2.5rem] transform translate-x-4 translate-y-4 -z-10 hidden sm:block"></div>
            <!-- High-quality image of handshake/keys -->
            <img src="https://images.pexels.com/photos/7144176/pexels-photo-7144176.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Car Handover" class="rounded-[2.5rem] shadow-2xl shadow-slate-900/20 object-cover h-full w-full">
            
            <!-- Floating Stat Badge -->
            <div class="absolute -bottom-6 -left-2 sm:-left-6 bg-white p-5 sm:p-6 rounded-3xl shadow-xl shadow-slate-200 border border-slate-100" data-aos="fade-up" data-aos-delay="500">
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl">
                        %
                    </div>
                    <div>
                        <p class="font-extrabold text-slate-900 text-sm sm:text-base">Competitive</p>
                        <p class="text-[10px] sm:text-xs text-slate-500 font-bold uppercase tracking-wider">Interest Rates</p>
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
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&q=80&w=2066')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-slate-900/85 backdrop-blur-sm"></div>

        <div class="relative z-10 text-center px-6 py-20 md:py-32">
            <h3 class="text-3xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Ready to Check Your Options?</h3>
            <p class="text-slate-300 mb-10 max-w-2xl mx-auto text-base sm:text-lg font-medium leading-relaxed">
                Start a no-obligation conversation with our finance team today to see what you qualify for.
            </p>
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%27m%20interested%20in%20financing%20options."
               target="_blank" class="inline-flex items-center justify-center gap-3 bg-white text-slate-900 hover:scale-105 transition-transform duration-300 px-8 sm:px-12 py-4 sm:py-5 rounded-full font-bold text-base sm:text-lg shadow-[0_0_30px_rgba(255,255,255,0.2)] w-full sm:w-auto">
                Ask About Financing
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</section>
@endsection