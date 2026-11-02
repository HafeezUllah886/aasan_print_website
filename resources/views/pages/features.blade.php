@extends('layouts.app')

@section('title', 'Features - Aasan Print POS Terminal & QR Printing System')
@section('meta_description', 'Explore all powerful features of Aasan Print: Desktop Terminal, Mobile Scanner, Counter QR Standees, Silent Printing, Thermal Slips, and Financial Ledger.')

@section('content')
<!-- Hero Header -->
<section class="py-16 lg:py-24 bg-slate-950 border-b border-slate-800 relative overflow-hidden">
    <div class="absolute top-0 right-1/4 w-96 h-96 bg-amber-500/10 blur-[130px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-amber-500/10 border border-amber-500/30 text-amber-400 mb-6">
            End-To-End Counter Automation
        </span>
        <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight">
            Engineered For Print Shops.<br>
            <span class="text-amber-400">Zero WhatsApp Clutter.</span>
        </h1>
        <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto mt-6 leading-relaxed">
            Every feature in Aasan Print was created specifically to eliminate the friction, wasted time, and confusion that print shop keepers face every day.
        </p>
    </div>
</section>

<!-- Detailed Feature Sections -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 space-y-24">
    <!-- Feature 1: Desktop Terminal -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center" id="desktop-terminal">
        <div class="space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                Core Engine
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Offline-First Desktop Terminal for Windows
            </h2>
            <p class="text-slate-300 text-base leading-relaxed">
                A lightweight, dedicated Windows application running on your shop PC. It stays open on your counter screen all day without freezing your computer.
            </p>
            <ul class="space-y-3.5 text-sm text-slate-300">
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Real-time Audio Chimes:</strong> Plays a pleasant bell tone immediately when a customer scans and submits an order.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>1-Click Silent Printing:</strong> Directly triggers your selected default printer without annoying print dialogs.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Multi-Printer Routing:</strong> Send heavy B&W duplex jobs to your digital photocopier and color jobs to your color laser.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Zero Internet Lockout:</strong> Even if internet connection fluctuates, queued jobs remain safe in your local terminal database.</span>
                </li>
            </ul>
        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 shadow-2xl relative">
            <div class="bg-slate-950 rounded-2xl p-4 border border-slate-800 space-y-4">
                <div class="flex items-center justify-between border-b border-slate-800 pb-3">
                    <span class="text-xs font-mono text-amber-400">Terminal &bull; Canon IR 2525 Ready</span>
                    <span class="text-xs text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded">Silent Print ON</span>
                </div>
                <div class="p-3 bg-slate-900/80 rounded-xl border border-slate-800 flex items-center justify-between">
                    <div>
                        <div class="text-xs font-bold text-white">#104 - Tariq Mehmood</div>
                        <div class="text-[11px] text-slate-400">18 Pages &bull; B&W Duplex &bull; Legal Size</div>
                    </div>
                    <button class="bg-amber-500 text-slate-950 px-3 py-1.5 rounded-lg text-xs font-bold">Print Now</button>
                </div>
                <div class="p-3 bg-slate-900/80 rounded-xl border border-slate-800 flex items-center justify-between">
                    <div>
                        <div class="text-xs font-bold text-white">#103 - Sana Ullah</div>
                        <div class="text-[11px] text-slate-400">2 Pages &bull; Full Color &bull; A4 Photo Paper</div>
                    </div>
                    <button class="bg-slate-800 text-slate-300 px-3 py-1.5 rounded-lg text-xs font-bold">Print Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature 2: Counter QR Standees -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center" id="qr-standees">
        <div class="order-2 lg:order-1 bg-slate-900 border border-slate-800 rounded-3xl p-8 flex justify-center">
            <div class="w-64 bg-white text-slate-950 p-5 rounded-2xl shadow-xl border-2 border-amber-400 text-center">
                <div class="font-extrabold text-sm uppercase">Your Shop Name Here</div>
                <div class="text-[10px] text-amber-600 font-bold mb-3">Scan to Print – No WhatsApp, No Wait!</div>
                <div class="w-36 h-36 mx-auto bg-slate-100 border border-slate-300 rounded-lg flex items-center justify-center">
                    <svg class="w-28 h-28 text-slate-900" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M4 4h4v4H4zm2 2h0m8-2h4v4h-4zm2 2h0m-10 8h4v4H4zm2 2h0m6-2h2v2h-2zm4 0h2v4h-2zm-2 2h2v2h-2zm-2-2h2v-2h-2zm6-6h2v4h-2zm-6 0h2v2h-2zm-2 2h2v2h-2zm4 4h2v2h-2z"/>
                    </svg>
                </div>
                <div class="text-[10px] text-slate-500 mt-2 font-semibold">Point camera to upload files</div>
            </div>
        </div>

        <div class="order-1 lg:order-2 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                Customer Experience
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Designer Counter QR Standees Included Free
            </h2>
            <p class="text-slate-300 text-base leading-relaxed">
                Eliminate customer questions like "Bhai aapka WhatsApp number kya hai?". Customers simply point their smartphone camera at the standee to start printing.
            </p>
            <ul class="space-y-3.5 text-sm text-slate-300">
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Auto-generated printable PDF:</strong> Ready in your terminal dashboard in 3 gorgeous styles: Modern Amber, High-Contrast Bold, and Minimal Clean.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Branded with your shop name:</strong> Features your shop name, logo, custom rates, and support contact.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Standard A4 size:</strong> Easily prints on standard paper for acrylic counter frames.</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Feature 3: Mobile Scanner -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center" id="mobile-scanner">
        <div class="space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                Mobile Technology
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Built-in Document Scanner & Magic Contrast Filters
            </h2>
            <p class="text-slate-300 text-base leading-relaxed">
                Customers often take blurry, shadowed phone pictures of book pages, university slides, or CNIC cards. Our client-side camera scanner fixes them before printing!
            </p>
            <ul class="space-y-3.5 text-sm text-slate-300">
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Auto Perspective Correction:</strong> Flattens angled phone photos into straight document pages.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Magic B&W Clean Filter:</strong> Removes dark shadows and background yellowing to produce crisp photostat black-and-white.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>High-Resolution PDF Generation:</strong> Converts multiple photos into a single clean PDF document.</span>
                </li>
            </ul>
        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 flex items-center justify-center">
            <div class="w-64 bg-slate-950 border border-slate-700 rounded-3xl p-4 space-y-3 shadow-xl">
                <div class="h-44 bg-slate-800 rounded-xl flex items-center justify-center text-xs text-slate-400 relative overflow-hidden">
                    <span class="text-amber-400 font-mono text-[11px]">[ Auto-Crop Active & Filter Applied ]</span>
                </div>
                <div class="flex items-center justify-between text-xs pt-1">
                    <span class="text-slate-400">Filter:</span>
                    <span class="font-bold text-amber-400">Magic Photostat B&W</span>
                </div>
                <button class="w-full bg-amber-500 text-slate-950 font-bold py-2 rounded-xl text-xs">
                    Apply & Send To Print Counter
                </button>
            </div>
        </div>
    </div>

    <!-- Feature 4: Thermal Receipt Printers -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center" id="thermal-receipts">
        <div class="order-2 lg:order-1 bg-slate-900 border border-slate-800 rounded-3xl p-8 flex justify-center">
            <div class="w-56 bg-slate-100 text-slate-900 p-4 font-mono text-xs rounded shadow-lg border-t-4 border-slate-900 space-y-2">
                <div class="text-center font-bold text-sm border-b pb-1">MASTER PHOTOSTAT</div>
                <div class="text-center text-[10px]">Token # 048 &bull; 10:45 AM</div>
                <div class="border-b pb-1 text-[11px] space-y-0.5">
                    <div class="flex justify-between"><span>A4 B&W Duplex:</span><span>18 Pgs</span></div>
                    <div class="flex justify-between"><span>Rate per page:</span><span>Rs. 4.00</span></div>
                </div>
                <div class="flex justify-between font-bold text-sm">
                    <span>TOTAL:</span>
                    <span>Rs. 72.00</span>
                </div>
                <div class="text-center text-[9px] text-slate-500 pt-1">Thank you for visiting!</div>
            </div>
        </div>

        <div class="order-1 lg:order-2 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                Queue & Receipts
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Thermal Slip & Token Printing (58mm / 80mm)
            </h2>
            <p class="text-slate-300 text-base leading-relaxed">
                Connect your standard POS thermal receipt printer. When a customer uploads large thesis or multiple documents, print an instant queue token so they wait calmly without hovering over your desk.
            </p>
            <ul class="space-y-3.5 text-sm text-slate-300">
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Numbered tokens:</strong> Keeps customer order queues polite and fair during rush hours.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-amber-400 font-bold mt-0.5">✓</span>
                    <span><strong>Printed bill receipts:</strong> Shows page count, rate per page, and total price to prevent payment arguments.</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- CTA Banner -->
<section class="py-16 bg-slate-900/60 border-t border-slate-800 text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <h3 class="text-3xl font-extrabold text-white">Experience All These Features In Your Shop Today</h3>
        <p class="text-slate-400 text-sm max-w-xl mx-auto">
            Download the desktop app for Windows and activate your 14-day free trial.
        </p>
        <div class="pt-2">
            <a href="{{ route('download') }}" class="bg-amber-500 hover:bg-amber-400 text-slate-950 font-extrabold px-8 py-3.5 rounded-2xl text-sm transition-all inline-block shadow-lg shadow-amber-500/20">
                Download Windows App &rarr;
            </a>
        </div>
    </div>
</section>
@endsection
