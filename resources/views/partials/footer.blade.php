@php $wa = config('cars.whatsapp_number'); @endphp
<footer class="bg-slate-950 pt-20 pb-10 px-6">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
        
        <div>
            <div class="text-2xl font-extrabold tracking-tighter text-white mb-4">
                Auto<span class="text-slate-500">Expert</span>
            </div>
            <p class="text-slate-400 text-sm leading-relaxed font-medium">
                Premium vehicle sourcing, sales, diagnostics, and financing — all in one place.
            </p>
        </div>
        
        <div>
            <h4 class="font-bold mb-5 text-sm uppercase tracking-widest text-slate-200">Services</h4>
            <ul class="space-y-3 text-sm font-medium text-slate-400">
                <li><a href="{{ route('buy') }}" class="hover:text-white transition">Buy a Car</a></li>
                <li><a href="{{ route('sell') }}" class="hover:text-white transition">Sell / Consignment</a></li>
                <li><a href="{{ route('diagnosis') }}" class="hover:text-white transition">Mobile Diagnostics</a></li>
                <li><a href="{{ route('financing') }}" class="hover:text-white transition">Financing</a></li>
            </ul>
        </div>
        
        <div>
            <h4 class="font-bold mb-5 text-sm uppercase tracking-widest text-slate-200">Company</h4>
            <ul class="space-y-3 text-sm font-medium text-slate-400">
                <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                <li><a href="{{ route('test-drive') }}" class="hover:text-white transition">Book a Test Drive</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>
        
        <div>
            <h4 class="font-bold mb-5 text-sm uppercase tracking-widest text-slate-200">Get in Touch</h4>
            <a href="https://wa.me/{{ $wa }}" target="_blank" class="text-white font-bold border-b border-slate-700 pb-1 hover:text-slate-300 hover:border-slate-500 transition flex items-center justify-between max-w-[150px]">
                WhatsApp Us <span aria-hidden="true">&rarr;</span>
            </a>
        </div>
        
    </div>
    
    <div class="max-w-7xl mx-auto mt-16 pt-8 border-t border-slate-800 text-slate-500 text-xs font-semibold uppercase tracking-widest">
        © {{ date('Y') }} Auto Expert. All rights reserved.
    </div>
</footer>