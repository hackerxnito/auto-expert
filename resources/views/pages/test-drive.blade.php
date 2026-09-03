@extends('layouts.app')
@section('title', 'Book a Test Drive — Auto Expert')
@section('content')

<!-- ==========================================
     CINEMATIC GLASSMORPHISM HERO & FORM
=========================================== -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden -mt-24 pt-32 pb-20">
    <!-- Premium Background Image (Driver's POV / Interior) -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center bg-fixed"></div>

    <!-- Dark Gradient Overlay for text readability and moody atmosphere -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/90 via-slate-950/60 to-slate-950/80"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,0,0,0)_0%,rgba(2,6,23,0.8)_100%)]"></div>

    <div class="relative z-10 w-full max-w-3xl mx-auto px-6" data-aos="fade-up">
        
        <!-- Header Section -->
        <div class="text-center mb-10">
            <span class="inline-flex items-center gap-2 border border-white/20 text-white bg-white/10 backdrop-blur-md px-5 py-2 rounded-full text-xs font-bold tracking-widest mb-6 uppercase shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-400"></span>
                </span>
                Experience The Drive
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tighter text-white mb-4 drop-shadow-lg">
                Book a Test Drive
            </h1>
            <p class="text-lg text-slate-300 font-medium">
                Select your preferred vehicle and time. We will coordinate the handover via WhatsApp.
            </p>
        </div>
        
        <!-- Glassmorphism Form Container -->
        <div x-data="{
                brand: '{{ $brands[0]['name'] ?? '' }}',
                date: '',
                time: '',
                notes: '',
                get message() {
                    let msg = `Hello Auto Expert, I'd like to book a test drive.%0A%0ACar: ${this.brand}`;
                    if (this.date) msg += `%0APreferred Date: ${this.date}`;
                    if (this.time) msg += `%0APreferred Time: ${this.time}`;
                    if (this.notes) msg += `%0ANotes: ${encodeURIComponent(this.notes)}`;
                    return msg;
                }
             }"
             class="bg-white/10 backdrop-blur-2xl border border-white/20 rounded-[2.5rem] p-8 md:p-12 shadow-[0_8px_32px_0_rgba(0,0,0,0.36)] relative overflow-hidden">
            
            <!-- Subtle glow behind the glass -->
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-blue-500/30 blur-[80px] rounded-full pointer-events-none"></div>
            <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-cyan-500/30 blur-[80px] rounded-full pointer-events-none"></div>

            <div class="relative z-10 space-y-8">
                <!-- Vehicle Selection -->
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-3 uppercase tracking-widest">Which car?</label>
                    <div class="relative">
                        <select x-model="brand" class="w-full bg-slate-900/50 backdrop-blur-md border border-white/10 rounded-2xl px-5 py-4 text-white font-medium focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all appearance-none cursor-pointer">
                            @foreach($brands as $brand)
                                <option value="{{ $brand['name'] }}" class="bg-slate-900 text-white">{{ $brand['name'] }}</option>
                            @endforeach
                            <option value="Other / Not listed" class="bg-slate-900 text-white">Other / Not listed</option>
                        </select>
                        <!-- Custom Select Dropdown Arrow -->
                        <div class="absolute inset-y-0 right-5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>
                
                <!-- Date & Time Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-3 uppercase tracking-widest">Preferred date</label>
                        <input type="date" x-model="date" class="w-full bg-slate-900/50 backdrop-blur-md border border-white/10 rounded-2xl px-5 py-4 text-white font-medium focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all [color-scheme:dark]">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-3 uppercase tracking-widest">Preferred time</label>
                        <input type="time" x-model="time" class="w-full bg-slate-900/50 backdrop-blur-md border border-white/10 rounded-2xl px-5 py-4 text-white font-medium focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all [color-scheme:dark]">
                    </div>
                </div>
                
                <!-- Textarea -->
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-3 uppercase tracking-widest">Anything else? (optional)</label>
                    <textarea x-model="notes" rows="3" class="w-full bg-slate-900/50 backdrop-blur-md border border-white/10 rounded-2xl px-5 py-4 text-white font-medium focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all placeholder-slate-500 resize-none" placeholder="Location, specific model, budget..."></textarea>
                </div>
                
                <!-- Submit Button -->
                <a :href="`https://wa.me/{{ config('cars.whatsapp_number') }}?text=${message}`"
                   target="_blank"
                   class="group flex items-center justify-center gap-3 w-full bg-white text-slate-900 hover:bg-slate-100 transition-all duration-300 px-8 py-5 rounded-full font-bold text-lg shadow-[0_0_20px_rgba(255,255,255,0.2)] hover:-translate-y-1 mt-4">
                    Confirm on WhatsApp
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection