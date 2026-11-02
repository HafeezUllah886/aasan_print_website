<header class="sticky top-0 z-40 bg-slate-950/80 backdrop-blur-xl border-b border-slate-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="h-11 px-2.5 py-1.5 rounded-xl bg-white flex items-center justify-center shadow-md shadow-emerald-500/10 group-hover:scale-105 transition-transform duration-200">
                    <img src="{{ asset('images/nexgen-logo.png') }}" alt="Nexgen Pakistan" class="h-7 w-auto object-contain">
                </div>
                <div class="flex flex-col">
                    <div class="flex items-center gap-2">
                        <span class="text-xl font-extrabold tracking-tight text-white group-hover:text-amber-400 transition-colors">Aasan Print</span>
                        <span class="text-[10px] uppercase font-bold tracking-widest px-1.5 py-0.5 rounded bg-amber-500/10 text-amber-400 border border-amber-500/20">POS</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-[11px] text-slate-400 font-medium">
                        <span class="font-urdu leading-none pt-0.5">آسان پرنٹ</span>
                        <span class="text-slate-600">&bull;</span>
                        <span class="text-emerald-400 text-[10px] font-semibold">by Nexgen Pakistan</span>
                    </div>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-1 lg:gap-2 text-sm font-medium">
                <a href="{{ route('features') }}" 
                   class="px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-900 transition-colors {{ request()->routeIs('features') ? 'text-amber-400 bg-slate-900' : '' }}">
                    Features
                </a>
                <a href="{{ route('how-it-works') }}" 
                   class="px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-900 transition-colors {{ request()->routeIs('how-it-works') ? 'text-amber-400 bg-slate-900' : '' }}">
                    How It Works
                </a>
                <a href="{{ route('pricing') }}" 
                   class="px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-900 transition-colors {{ request()->routeIs('pricing') ? 'text-amber-400 bg-slate-900' : '' }}">
                    Pricing
                </a>
                <a href="{{ route('download') }}" 
                   class="px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-900 transition-colors {{ request()->routeIs('download') ? 'text-amber-400 bg-slate-900' : '' }}">
                    Download Terminal
                </a>
                <a href="{{ route('contact') }}" 
                   class="px-3.5 py-2 rounded-xl text-slate-300 hover:text-white hover:bg-slate-900 transition-colors {{ request()->routeIs('contact') ? 'text-amber-400 bg-slate-900' : '' }}">
                    Contact
                </a>
            </nav>

            <!-- Desktop CTAs -->
            <div class="hidden md:flex items-center gap-3">
                <a href="https://nexgenpakistan.com" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="hidden xl:inline-flex items-center gap-1.5 text-xs text-slate-400 hover:text-white px-3 py-2 rounded-xl border border-slate-800 hover:border-slate-700 hover:bg-slate-900 transition-colors">
                    <span>nexgenpakistan.com</span>
                    <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
                <button @click="demoModalOpen = true" 
                        type="button"
                        class="text-xs font-semibold text-slate-300 hover:text-white px-3.5 py-2.5 rounded-xl hover:bg-slate-900 transition-colors">
                    Request Demo
                </button>
                <a href="{{ route('download') }}" 
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-bold px-4 py-2.5 rounded-xl shadow-lg shadow-amber-500/20 hover:shadow-amber-500/30 transition-all text-xs tracking-wide">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    <span>Get Started Free</span>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden items-center gap-2">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2.5 rounded-xl bg-slate-900 text-slate-300 hover:text-white focus:outline-none">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu modal/drawer -->
    <div x-show="mobileMenuOpen" 
         x-cloak 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden border-b border-slate-800 bg-slate-950/95 backdrop-blur-xl px-4 pt-3 pb-6 space-y-3">
        <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-xl text-base font-medium text-slate-200 hover:bg-slate-900">Home</a>
        <a href="{{ route('features') }}" class="block px-3 py-2.5 rounded-xl text-base font-medium text-slate-200 hover:bg-slate-900">Features</a>
        <a href="{{ route('how-it-works') }}" class="block px-3 py-2.5 rounded-xl text-base font-medium text-slate-200 hover:bg-slate-900">How It Works</a>
        <a href="{{ route('pricing') }}" class="block px-3 py-2.5 rounded-xl text-base font-medium text-slate-200 hover:bg-slate-900">Pricing</a>
        <a href="{{ route('download') }}" class="block px-3 py-2.5 rounded-xl text-base font-medium text-slate-200 hover:bg-slate-900">Download Terminal</a>
        <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-xl text-base font-medium text-slate-200 hover:bg-slate-900">Contact Us</a>
        <div class="pt-3 border-t border-slate-800 space-y-2">
            <button @click="mobileMenuOpen = false; demoModalOpen = true" class="w-full text-center py-2.5 px-4 rounded-xl text-sm font-semibold bg-slate-900 text-slate-200">
                Request Free Live Demo
            </button>
            <a href="{{ route('download') }}" class="block w-full text-center py-2.5 px-4 rounded-xl text-sm font-bold bg-amber-500 text-slate-950">
                Download Free Trial
            </a>
        </div>
    </div>
</header>
