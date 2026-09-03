@extends('layouts.app')
@section('title', 'Buy a Car — Auto Expert')
@section('content')

<!-- ==========================================
     CINEMATIC POSTER HERO SECTION (Bottom-Anchored Split)
=========================================== -->
<section class="relative min-h-[85vh] lg:min-h-screen flex flex-col justify-end overflow-hidden pt-32 pb-16 lg:pb-24 -mt-24 bg-slate-950">
    <!-- Premium Background Image (Dark showroom, real luxury cars) -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1767907571229-01cf4ba03590?auto=format&fit=crop&q=80&w=2400')] bg-cover bg-[position:center_40%] md:bg-center bg-no-repeat bg-scroll md:bg-fixed"></div>

    <!-- Blue-tinted gradient: keeps the showroom visible through a brand-blue haze -->
    <div class="absolute inset-0" style="background-image: linear-gradient(to top, rgba(2,6,23,0.98) 0%, rgba(8,15,35,0.85) 30%, rgba(15,30,70,0.45) 60%, rgba(15,30,70,0.15) 100%);"></div>
    <div class="absolute inset-0 opacity-70 mix-blend-overlay bg-[radial-gradient(circle_at_15%_15%,rgba(56,189,248,0.3),transparent_45%),radial-gradient(circle_at_85%_10%,rgba(96,165,250,0.2),transparent_40%)]"></div>

    <!-- Content (Bottom-Anchored, Split on Desktop) -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full flex flex-col lg:flex-row lg:items-end justify-between gap-10 mt-auto">

        <!-- Left Side: Badge + Title -->
        <div class="max-w-3xl" data-aos="fade-right">
            <span class="inline-flex items-center gap-2 border border-blue-400/30 text-blue-300 bg-blue-900/30 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold tracking-widest mb-6 uppercase shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-300 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-300"></span>
                </span>
                Premium Showroom
            </span>
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tighter text-white leading-[1.05] drop-shadow-lg">
                We Deal In <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-400 bg-[length:200%_auto] animate-[gradient_6s_linear_infinite]">Premium Marques.</span>
            </h1>
        </div>

        <!-- Right Side: Description, Features & Scroll Cue -->
        <div class="max-w-lg lg:pb-3" data-aos="fade-left" data-aos-delay="200">
            <p class="text-base sm:text-lg text-slate-200 mb-6 leading-relaxed font-medium drop-shadow-md">
                Browse our specialized sourcing categories below. Send us your requirements — model, year, budget — and we will locate the exact vehicle you desire across South Africa and beyond.
            </p>

            <!-- Feature strip -->
            <div class="flex flex-wrap items-center gap-x-6 gap-y-3 text-slate-300 text-xs md:text-sm font-semibold uppercase tracking-wider mb-8">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Nationwide Sourcing
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-cyan-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Any Make, Any Model
                </span>
            </div>

            <a href="#brand-grid" class="inline-flex items-center justify-center gap-3 bg-blue-600 hover:bg-blue-500 text-white transition-all duration-300 px-8 py-4 rounded-full font-bold shadow-[0_0_20px_rgba(37,99,235,0.4)] hover:-translate-y-1 w-full sm:w-auto group">
                Browse Brands
                <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
            </a>
        </div>

    </div>
</section>

<!-- ==========================================
     PHOTOGRAPHIC BRAND GRID
=========================================== -->
<section id="brand-grid" class="pt-24 pb-32 max-w-7xl mx-auto px-6">

    <div class="text-center mb-14" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-slate-900 mb-3">Choose Your Marque</h2>
        <p class="text-slate-500 font-medium max-w-xl mx-auto">Tap a brand to start a conversation on WhatsApp — tell us the model, year and budget you have in mind.</p>
    </div>

    @php
        // High-end demo images correctly matched to each brand
        $brandImages = [
            'Mercedes-Benz' => 'https://images.unsplash.com/photo-1514316454349-750a7fd3da3a?auto=format&fit=crop&q=80&w=2070',
            'BMW'           => 'https://images.unsplash.com/photo-1749393800469-2f76f0a38ff1?auto=format&fit=crop&q=80&w=2070',
            'Range Rover'   => 'https://images.unsplash.com/photo-1555404610-4f6162df064d?auto=format&fit=crop&q=80&w=2070',
            'Audi'          => 'https://images.unsplash.com/photo-1741344469226-e94b3d647c0f?auto=format&fit=crop&q=80&w=2070',
            'Toyota'        => 'https://images.unsplash.com/photo-1749058983232-59b967855b18?auto=format&fit=crop&q=80&w=2070',
            'Lexus'         => 'https://images.unsplash.com/photo-1577496549804-8b05f1f67338?auto=format&fit=crop&q=80&w=2070',
            'Porsche'       => 'https://images.unsplash.com/photo-1602830362382-ede84903b5b9?auto=format&fit=crop&q=80&w=2070',
            'Nissan'        => 'https://images.unsplash.com/photo-1577520535358-36fca4076e9b?auto=format&fit=crop&q=80&w=2070',
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($brands as $index => $brand)
            @php
                // Fallback image if brand isn't in our array
                $bgImage = $brandImages[$brand['name']] ?? 'https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&q=80&w=2070';
            @endphp

            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%27m%20interested%20in%20sourcing%20a%20{{ urlencode($brand['name']) }}."
               target="_blank"
               class="group relative overflow-hidden rounded-[2rem] h-[350px] shadow-lg hover:shadow-2xl hover:shadow-blue-900/25 hover:-translate-y-2 transition-all duration-500 ring-1 ring-white/10"
               data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">

                <!-- Background Image -->
                <img src="{{ $bgImage }}" alt="{{ $brand['name'] }}" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 ease-out group-hover:scale-110">

                <!-- Gradient Overlay (Darkens on hover) -->
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-900/40 to-transparent opacity-80 group-hover:opacity-95 transition-opacity duration-500"></div>

                <!-- Glowing top accent line, appears on hover -->
                <div class="absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-cyan-300 to-transparent scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-center"></div>

                <!-- Content -->
                <div class="absolute inset-0 p-8 flex flex-col justify-end text-white">
                    <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <h3 class="text-3xl font-extrabold mb-2 tracking-tight">{{ $brand['name'] }}</h3>
                        <p class="text-slate-300 font-medium mb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">{{ $brand['tagline'] }}</p>

                        <div class="inline-flex items-center gap-2 font-bold text-sm uppercase tracking-widest text-white bg-white/10 backdrop-blur-md border border-white/20 rounded-full px-4 py-2 group-hover:bg-cyan-400 group-hover:text-slate-950 group-hover:border-cyan-300 transition-colors duration-300 w-fit">
                            Inquire Now
                            <span class="group-hover:translate-x-1 transition-transform duration-300" aria-hidden="true">&rarr;</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>

<!-- ==========================================
     BOTTOM CTA (Banner Style)
=========================================== -->
<section class="pb-32 px-6" data-aos="fade-up">
    <div class="max-w-7xl mx-auto relative overflow-hidden rounded-[3rem] shadow-2xl">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?auto=format&fit=crop&q=80&w=1932')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm"></div>
        <div class="absolute inset-0 opacity-50 bg-[radial-gradient(circle_at_50%_120%,rgba(56,189,248,0.35),transparent_60%)]"></div>

        <div class="relative z-10 text-center px-6 py-24 md:py-32">
            <h3 class="text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Don't see your brand?</h3>
            <p class="text-slate-300 mb-10 max-w-2xl mx-auto text-lg font-medium leading-relaxed">
                Our sourcing network isn't limited to the showcase above. From classic collectibles to exotic imports, we can locate virtually any make or model on request.
            </p>
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}?text=Hello%20Auto%20Expert%2C%20I%27m%20looking%20for%20a%20specific%20car%20not%20listed%20on%20the%20website."
               target="_blank" class="group inline-flex items-center gap-2 bg-white text-slate-900 hover:scale-105 transition-transform duration-300 px-10 py-4 rounded-full font-bold text-lg shadow-[0_0_20px_rgba(255,255,255,0.2)]">
                Request Any Car
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</section>

<style>
@keyframes gradient {
    0% { background-position: 0% 50%; }
    100% { background-position: 200% 50%; }
}
</style>
@endsection