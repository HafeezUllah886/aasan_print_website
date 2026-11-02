@extends('layouts.app')

@section('title', 'Download Aasan Print Terminal for Windows')
@section('meta_description', 'Download Aasan Print Desktop Terminal for Windows 10 and 11. 14-day free trial included. Fast 3-minute setup.')

@section('content')
<!-- Hero Header -->
<section class="py-16 lg:py-24 bg-slate-950 border-b border-slate-800 text-center relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-amber-500/10 border border-amber-500/30 text-amber-400 mb-6">
            Official Windows Release &bull; Version 2.4.0
        </span>
        <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight">
            Download Aasan Print Terminal
        </h1>
        <p class="text-slate-300 text-base max-w-xl mx-auto mt-4 leading-relaxed">
            Install on your counter PC in 3 minutes. Unlock 14 days of free automated printing with zero credit card required.
        </p>

        <!-- Main Download Button Card -->
        <div class="mt-10 max-w-lg mx-auto bg-slate-900 border border-slate-800 rounded-3xl p-8 shadow-2xl space-y-6">
            <div class="space-y-2">
                <div class="flex items-center justify-center gap-3 text-white font-extrabold text-xl">
                    <!-- Windows 11 Logo SVG -->
                    <svg class="w-7 h-7 text-sky-400 fill-current" viewBox="0 0 24 24">
                        <path d="M0 3.449L9.75 2.1v9.451H0m10.949-9.602L24 0v11.4H10.949M0 12.6h9.75v9.451L0 20.699M10.949 12.6H24V24l-12.949-1.801"/>
                    </svg>
                    <span>Windows Desktop Terminal</span>
                </div>
                <div class="text-xs text-slate-400">
                    Windows 10 / 11 (64-bit) &bull; Installer (v2.4.0) &bull; ~78 MB
                </div>
            </div>

            <div class="pt-2">
                <!-- Trigger direct download or simulated package -->
                <a href="#setup-guide" 
                   @click="demoModalOpen = true"
                   class="w-full inline-flex items-center justify-center gap-3 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-black py-4 px-6 rounded-2xl text-base shadow-xl shadow-amber-500/25 transition-all transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    <span>Download Installer & Get Free Key</span>
                </a>
                <p class="text-[11px] text-slate-400 mt-2">
                    Instant 14-day trial key will be sent to your WhatsApp immediately.
                </p>
            </div>

            <div class="pt-4 border-t border-slate-800 flex items-center justify-between text-xs text-slate-400">
                <span>SHA-256 Verified Safe</span>
                <span class="text-emerald-400 font-semibold">100% Virus & Malware Free</span>
            </div>
        </div>
    </div>
</section>

<!-- System Requirements & 3-Step Setup Guide -->
<section class="py-20 bg-slate-950" id="setup-guide">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Setup Guide -->
            <div class="space-y-6">
                <span class="text-xs font-bold uppercase tracking-widest text-amber-400">Installation Guide</span>
                <h3 class="text-3xl font-extrabold text-white tracking-tight">
                    How to Setup on Your Shop PC
                </h3>

                <div class="space-y-6 text-sm text-slate-300">
                    <div class="flex items-start gap-4 bg-slate-900 border border-slate-800 rounded-2xl p-5">
                        <div class="w-8 h-8 rounded-xl bg-amber-500/10 text-amber-400 font-black flex items-center justify-center shrink-0">
                            1
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Run the Installer</h4>
                            <p class="text-slate-400 mt-1">
                                Download <code class="text-amber-400 bg-slate-950 px-1.5 py-0.5 rounded font-mono text-xs">AasaanPrint-Setup.exe</code> and open it. Windows SmartScreen may show a security prompt; simply click "More info" and then "Run anyway".
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-slate-900 border border-slate-800 rounded-2xl p-5">
                        <div class="w-8 h-8 rounded-xl bg-amber-500/10 text-amber-400 font-black flex items-center justify-center shrink-0">
                            2
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Activate with Shop Key</h4>
                            <p class="text-slate-400 mt-1">
                                On first launch, enter your Shop ID and Secret Shop Key. Your terminal will automatically bind to your counter PC.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 bg-slate-900 border border-slate-800 rounded-2xl p-5">
                        <div class="w-8 h-8 rounded-xl bg-amber-500/10 text-amber-400 font-black flex items-center justify-center shrink-0">
                            3
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Select Printer & Print Standee</h4>
                            <p class="text-slate-400 mt-1">
                                Select your connected USB or Network printer from the dropdown. Then click "Print Standee Poster" to generate your counter QR code. You're ready to serve customers!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- System Requirements & Free Remote Setup -->
            <div class="space-y-8">
                <!-- Requirements Card -->
                <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 space-y-4">
                    <h4 class="text-lg font-bold text-white">System Requirements</h4>
                    <div class="space-y-3 text-xs sm:text-sm text-slate-300">
                        <div class="flex justify-between py-2 border-b border-slate-800">
                            <span class="text-slate-400">Operating System:</span>
                            <span class="font-semibold text-white">Windows 10 (64-bit) or Windows 11</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-slate-800">
                            <span class="text-slate-400">Memory (RAM):</span>
                            <span class="font-semibold text-white">4 GB RAM (8 GB Recommended)</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-slate-800">
                            <span class="text-slate-400">Storage:</span>
                            <span class="font-semibold text-white">300 MB Free Disk Space</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-slate-800">
                            <span class="text-slate-400">Printers:</span>
                            <span class="font-semibold text-white">Any Windows-compatible Printer</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-slate-400">Internet:</span>
                            <span class="font-semibold text-white">Standard 3G / 4G / Broadband</span>
                        </div>
                    </div>
                </div>

                <!-- Remote Desk Help Card -->
                <div class="bg-gradient-to-br from-amber-500/10 via-slate-900 to-slate-950 border border-amber-500/30 rounded-3xl p-6 sm:p-8 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-amber-500 text-slate-950 flex items-center justify-center font-bold">
                            AnyDesk
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-base">Want Us To Install It For You?</h4>
                            <p class="text-xs text-amber-400">100% Free Remote Setup Service</p>
                        </div>
                    </div>
                    <p class="text-xs text-slate-300 leading-relaxed">
                        If you're not tech-savvy or want an expert to configure your printer rates, the Nexgen Pakistan technical team will connect via AnyDesk or TeamViewer and set up everything on your counter PC in 10 minutes.
                    </p>
                    <a href="https://wa.me/923163560803?text=Assalam-o-Alaikum!%20Please%20help%20me%20setup%20Aasan%20Print%20on%20my%20counter%20PC." 
                       target="_blank"
                       class="inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold px-4 py-2.5 rounded-xl text-xs transition-colors">
                        <span>Request Free AnyDesk Setup on WhatsApp (+92 316 3560803) &rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
