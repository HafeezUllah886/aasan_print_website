<footer class="bg-slate-950 border-t border-slate-800/80 pt-16 pb-12 text-slate-400 text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800">
            <!-- Brand Info (2 cols) -->
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    <div class="h-11 px-2.5 py-1.5 rounded-xl bg-white flex items-center justify-center shadow-md shadow-emerald-500/10">
                        <img src="{{ asset('images/nexgen-logo.png') }}" alt="Nexgen Pakistan Logo" class="h-7 w-auto object-contain">
                    </div>
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="text-xl font-extrabold text-white">Aasan Print</span>
                            <span class="text-[10px] font-bold uppercase tracking-wider px-1.5 py-0.5 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Nexgen</span>
                        </div>
                        <span class="block text-xs text-amber-400 font-urdu">آسان پرنٹ – پروڈکٹ برائے نیکس جن پاکستان</span>
                    </div>
                </a>
                <p class="text-slate-400 text-xs sm:text-sm leading-relaxed max-w-sm">
                    Aasan Print is an enterprise POS & QR self-service printing terminal engineered by <a href="https://nexgenpakistan.com" target="_blank" rel="noopener noreferrer" class="text-amber-400 font-semibold hover:underline">Nexgen Pakistan</a>. Nexgen Pakistan delivers cutting-edge enterprise solutions, from POS systems to custom applications, helping businesses streamline operations and accelerate growth.
                </p>
                <div class="flex items-center gap-3 pt-2">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        50,000+ Pages Printed Daily
                    </span>
                    <a href="https://nexgenpakistan.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-blue-500/10 text-blue-400 border border-blue-500/20 hover:bg-blue-500/20 transition-colors">
                        <span>nexgenpakistan.com</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                </div>
            </div>

            <!-- Product -->
            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Product</h4>
                <ul class="space-y-2.5 text-xs sm:text-sm">
                    <li><a href="{{ route('features') }}" class="hover:text-amber-400 transition-colors">Features Overview</a></li>
                    <li><a href="{{ route('features') }}#desktop-terminal" class="hover:text-amber-400 transition-colors">Desktop POS Terminal</a></li>
                    <li><a href="{{ route('features') }}#qr-standees" class="hover:text-amber-400 transition-colors">Counter QR Standees</a></li>
                    <li><a href="{{ route('features') }}#mobile-scanner" class="hover:text-amber-400 transition-colors">Mobile Document Scanner</a></li>
                    <li><a href="{{ route('features') }}#thermal-receipts" class="hover:text-amber-400 transition-colors">Thermal Token Printer</a></li>
                    <li><a href="{{ route('download') }}" class="hover:text-amber-400 transition-colors">Windows Desktop App</a></li>
                </ul>
            </div>

            <!-- Solutions -->
            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Use Cases</h4>
                <ul class="space-y-2.5 text-xs sm:text-sm">
                    <li><a href="{{ route('how-it-works') }}" class="hover:text-amber-400 transition-colors">Photostat & Copy Shops</a></li>
                    <li><a href="{{ route('how-it-works') }}" class="hover:text-amber-400 transition-colors">University & College Centers</a></li>
                    <li><a href="{{ route('how-it-works') }}" class="hover:text-amber-400 transition-colors">Court & Legal Document Centers</a></li>
                    <li><a href="{{ route('how-it-works') }}" class="hover:text-amber-400 transition-colors">Digital Printing & Flex</a></li>
                    <li><a href="{{ route('pricing') }}" class="hover:text-amber-400 transition-colors">Multi-Counter Networks</a></li>
                </ul>
            </div>

            <!-- Support & Contact -->
            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-white mb-4">Get In Touch</h4>
                <ul class="space-y-2.5 text-xs sm:text-sm">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.2.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.102-.115.434-.506.549-.68.116-.173.232-.144.39-.086.159.058 1.011.477 1.184.564.173.087.289.13.332.202.043.073.043.419-.101.824zM12.031 2C6.49 2 2 6.49 2 12.031c0 1.808.484 3.504 1.325 4.974L2 22l5.178-1.314A9.972 9.972 0 0 0 12.031 22C17.571 22 22 17.571 22 12.031 22 6.49 17.571 2 12.031 2z"/></svg>
                        <a href="https://wa.me/923163560803" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-400">WhatsApp: +92 316 3560803</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:info@nexgenpakistan.com" class="hover:text-amber-400">info@nexgenpakistan.com</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-blue-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Office: Quetta, Pakistan</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                        <a href="https://nexgenpakistan.com" target="_blank" rel="noopener noreferrer" class="text-amber-400 hover:underline">nexgenpakistan.com</a>
                    </li>
                    <!-- Social icons -->
                    <li class="pt-2 flex items-center gap-3">
                        <a href="https://www.facebook.com/profile.php?id=61589611622853" target="_blank" rel="noopener noreferrer" title="Facebook" class="w-8 h-8 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:border-blue-500/50 transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="https://wa.me/923163560803" target="_blank" rel="noopener noreferrer" title="WhatsApp" class="w-8 h-8 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:border-emerald-500/50 transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.2.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.102-.115.434-.506.549-.68.116-.173.232-.144.39-.086.159.058 1.011.477 1.184.564.173.087.289.13.332.202.043.073.043.419-.101.824zM12.031 2C6.49 2 2 6.49 2 12.031c0 1.808.484 3.504 1.325 4.974L2 22l5.178-1.314A9.972 9.972 0 0 0 12.031 22C17.571 22 22 17.571 22 12.031 22 6.49 17.571 2 12.031 2z"/></svg>
                        </a>
                        <button @click="demoModalOpen = true" class="text-xs font-bold text-amber-400 hover:text-amber-300 underline ml-1">
                            Book Live Demo &rarr;
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <div>
                &copy; {{ date('Y') }} <a href="https://nexgenpakistan.com" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white font-semibold">Nexgen Pakistan</a>. All rights reserved.
            </div>
            <div class="flex items-center gap-6">
                <a href="https://nexgenpakistan.com" target="_blank" rel="noopener noreferrer" class="hover:text-amber-400">Nexgen Corporate</a>
                <a href="{{ route('pricing') }}" class="hover:text-slate-400">Pricing</a>
                <a href="{{ route('download') }}" class="hover:text-slate-400">Downloads</a>
                <a href="{{ route('contact') }}" class="hover:text-slate-400">Contact Sales</a>
                <span class="text-slate-700">|</span>
                <span class="text-amber-400/90 font-urdu font-bold">نیکس جن پاکستان – سمارٹ بزنس سولیوشنز</span>
            </div>
        </div>
    </div>
</footer>
