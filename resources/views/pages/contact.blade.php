@extends('layouts.app')
@section('title', 'Contact Us — Auto Expert')
@section('content')

<!-- ==========================================
     CINEMATIC GLASSMORPHISM HERO & CONTACT
=========================================== -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden -mt-24 pt-32 pb-20">
    <!-- Premium Background Image (Dark moody auto detail) -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&q=80&w=2070')] bg-cover bg-center bg-fixed"></div>

    <!-- Dark Gradient Overlay for text readability and moody atmosphere -->
    <div class="absolute inset-0 bg-gradient-to-b from-slate-950/95 via-slate-950/80 to-slate-950/90"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(0,0,0,0)_0%,rgba(2,6,23,0.9)_100%)]"></div>

    <div class="relative z-10 w-full max-w-6xl mx-auto px-6" data-aos="fade-up">
        
        <!-- Header Section -->
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 border border-white/20 text-white bg-white/10 backdrop-blur-md px-5 py-2 rounded-full text-xs font-bold tracking-widest mb-6 uppercase shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-400"></span>
                </span>
                Get In Touch
            </span>
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter text-white mb-6 drop-shadow-lg">
                Let's Talk Cars.
            </h1>
            <p class="text-lg text-slate-300 font-medium max-w-2xl mx-auto">
                Whether you prefer the instant connection of WhatsApp or the formality of an email, our concierge team is ready to assist you.
            </p>
        </div>

        <!-- Quick Contact Cards (4 Columns) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            <!-- WhatsApp -->
            <a href="https://wa.me/{{ config('cars.whatsapp_number') }}" target="_blank" class="bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-8 text-center hover:bg-white/10 hover:border-green-500/50 hover:-translate-y-2 transition-all duration-300 group shadow-xl">
                <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-green-500/20 text-green-400 flex items-center justify-center group-hover:bg-green-500 group-hover:text-white transition-colors duration-300 shadow-[0_0_15px_rgba(34,197,94,0.3)]">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                </div>
                <h3 class="font-bold text-white mb-1">WhatsApp</h3>
                <p class="text-slate-400 text-sm font-medium">Fastest response</p>
            </a>

            <!-- Email -->
            <a href="mailto:info@autoexpert.co.za" class="bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-8 text-center hover:bg-white/10 hover:border-blue-500/50 hover:-translate-y-2 transition-all duration-300 group shadow-xl">
                <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-blue-500/20 text-blue-400 flex items-center justify-center group-hover:bg-blue-500 group-hover:text-white transition-colors duration-300 shadow-[0_0_15px_rgba(59,130,246,0.3)]">
                    <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h3 class="font-bold text-white mb-1">Email</h3>
                <p class="text-slate-400 text-sm font-medium">info@autoexpert.co.za</p>
            </a>

            <!-- Phone -->
            <a href="tel:+{{ config('cars.whatsapp_number') }}" class="bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-8 text-center hover:bg-white/10 hover:border-cyan-400/50 hover:-translate-y-2 transition-all duration-300 group shadow-xl">
                <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-cyan-400/20 text-cyan-400 flex items-center justify-center group-hover:bg-cyan-400 group-hover:text-slate-900 transition-colors duration-300 shadow-[0_0_15px_rgba(34,211,238,0.3)]">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </div>
                <h3 class="font-bold text-white mb-1">Call Us</h3>
                <p class="text-slate-400 text-sm font-medium">Mon–Sat, 8am–6pm</p>
            </a>

            <!-- Location -->
            <div class="bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl p-8 text-center shadow-xl">
                <div class="w-14 h-14 mx-auto mb-5 rounded-2xl bg-white/10 text-white flex items-center justify-center">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <h3 class="font-bold text-white mb-1">South Africa</h3>
                <p class="text-slate-400 text-sm font-medium">Private Showroom</p>
            </div>
        </div>

        <!-- Glassmorphism Email Form -->
        <div x-data="{
                name: '',
                email: '',
                subject: '',
                message: '',
                get mailtoLink() {
                    return `mailto:info@autoexpert.co.za?subject=${encodeURIComponent(this.subject || 'Website Inquiry')}&body=${encodeURIComponent('Name: ' + this.name + '\nEmail: ' + this.email + '\n\n' + this.message)}`;
                }
             }"
             class="max-w-3xl mx-auto bg-white/10 backdrop-blur-2xl border border-white/20 rounded-[2.5rem] p-8 md:p-12 shadow-[0_8px_32px_0_rgba(0,0,0,0.36)] relative overflow-hidden">
            
            <!-- Subtle glow behind the form -->
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-blue-500/20 blur-[80px] rounded-full pointer-events-none"></div>

            <div class="relative z-10 space-y-8">
                <div class="text-center mb-8">
                    <h3 class="text-2xl font-bold text-white">Send an Email</h3>
                    <p class="text-slate-400 text-sm mt-2 font-medium">Fill out the form below and it will draft an email to our concierge team.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-3 uppercase tracking-widest">Your Name</label>
                        <input type="text" x-model="name" class="w-full bg-slate-900/50 backdrop-blur-md border border-white/10 rounded-2xl px-5 py-4 text-white font-medium focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all placeholder-slate-500" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-300 mb-3 uppercase tracking-widest">Email Address</label>
                        <input type="email" x-model="email" class="w-full bg-slate-900/50 backdrop-blur-md border border-white/10 rounded-2xl px-5 py-4 text-white font-medium focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all placeholder-slate-500" placeholder="john@example.com">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-3 uppercase tracking-widest">Subject</label>
                    <input type="text" x-model="subject" class="w-full bg-slate-900/50 backdrop-blur-md border border-white/10 rounded-2xl px-5 py-4 text-white font-medium focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all placeholder-slate-500" placeholder="Vehicle Sourcing Inquiry">
                </div>
                
                <div>
                    <label class="block text-xs font-bold text-slate-300 mb-3 uppercase tracking-widest">Message</label>
                    <textarea x-model="message" rows="4" class="w-full bg-slate-900/50 backdrop-blur-md border border-white/10 rounded-2xl px-5 py-4 text-white font-medium focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400 transition-all placeholder-slate-500 resize-none" placeholder="How can we assist you today?"></textarea>
                </div>
                
                <!-- Submit Button triggers mailto link -->
                <a :href="mailtoLink"
                   class="group flex items-center justify-center gap-3 w-full bg-white text-slate-900 hover:bg-slate-100 transition-all duration-300 px-8 py-5 rounded-full font-bold text-lg shadow-[0_0_20px_rgba(255,255,255,0.2)] hover:-translate-y-1 mt-4">
                    Send Email
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
        </div>

    </div>
</section>
@endsection