@extends('layouts.app')

@section('title', 'How It Works - Aasan Print 4-Step Counter Workflow')
@section('meta_description', 'Learn how Aasan Print transforms your print shop counter in 4 simple steps: Setup terminal, place QR standee, customer scans & uploads, 1-click silent print.')

@section('content')
<!-- Hero Header -->
<section class="py-16 lg:py-24 bg-slate-950 border-b border-slate-800 relative overflow-hidden text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-amber-500/10 border border-amber-500/30 text-amber-400 mb-6">
            Quick 4-Step Workflow
        </span>
        <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight">
            How Aasan Print Works In Your Shop
        </h1>
        <p class="text-xl text-amber-300 font-urdu mt-4">
            صرف چار آسان مراحل میں آپ کا کاؤنٹر سمارٹ بن جائے گا!
        </p>
        <p class="text-slate-300 text-base max-w-2xl mx-auto mt-4 leading-relaxed">
            From setup to your first automated customer print in under 5 minutes.
        </p>
    </div>
</section>

<!-- 4 Steps Interactive Timeline -->
<section class="py-20 bg-slate-950">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
        <!-- Step 1 -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-10">
            <div class="md:col-span-2 flex items-center justify-center">
                <div class="w-16 h-16 rounded-2xl bg-amber-500/10 border-2 border-amber-500/30 text-amber-400 flex items-center justify-center font-black text-2xl shadow-lg shadow-amber-500/10">
                    01
                </div>
            </div>
            <div class="md:col-span-10 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">Step 1: Setup Terminal</span>
                <h3 class="text-2xl font-bold text-white">Download & Install the Desktop App (2 Minutes)</h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    Download the lightweight Aasan Print Terminal setup for Windows. Run the installer, enter your shop name and rates (B&W page price, Color page price), and select your primary printer. No complicated network configuration required.
                </p>
                <div class="pt-2">
                    <span class="inline-flex items-center gap-2 text-xs text-emerald-400 font-semibold bg-emerald-500/10 px-3 py-1 rounded-full">
                        ✓ Windows 10 & 11 (64-bit) Compatible
                    </span>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-10">
            <div class="md:col-span-2 flex items-center justify-center">
                <div class="w-16 h-16 rounded-2xl bg-amber-500/10 border-2 border-amber-500/30 text-amber-400 flex items-center justify-center font-black text-2xl shadow-lg shadow-amber-500/10">
                    02
                </div>
            </div>
            <div class="md:col-span-10 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">Step 2: Counter Standee</span>
                <h3 class="text-2xl font-bold text-white">Print & Place Your Counter Standee</h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    Click "Download Standee PDF" inside your terminal. It generates a high-resolution A4 poster with your shop name, official logo, and unique customer scan QR code. Print it out and place it on your counter in an acrylic stand.
                </p>
                <div class="pt-2 text-xs text-amber-400 font-urdu font-semibold">
                    کاؤنٹر پر اسٹینڈی رکھیں تاکہ گاہک آتے ہی اسکین کرے
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-10">
            <div class="md:col-span-2 flex items-center justify-center">
                <div class="w-16 h-16 rounded-2xl bg-amber-500/10 border-2 border-amber-500/30 text-amber-400 flex items-center justify-center font-black text-2xl shadow-lg shadow-amber-500/10">
                    03
                </div>
            </div>
            <div class="md:col-span-10 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">Step 3: Customer Self-Service</span>
                <h3 class="text-2xl font-bold text-white">Customer Scans QR Code & Selects Print Settings</h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    Customer points their smartphone camera at the counter standee. Without installing any app, the upload portal opens. They upload PDF, Word files, or snap photos with our auto-crop document scanner. They select copies, paper size, and color options, and see the exact bill upfront.
                </p>
                <div class="pt-2">
                    <span class="inline-flex items-center gap-2 text-xs text-amber-300 font-semibold bg-amber-500/10 px-3 py-1 rounded-full">
                        ✓ No WhatsApp Number Shared &bull; Live Bill Calculation
                    </span>
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-10">
            <div class="md:col-span-2 flex items-center justify-center">
                <div class="w-16 h-16 rounded-2xl bg-amber-500/10 border-2 border-amber-500/30 text-amber-400 flex items-center justify-center font-black text-2xl shadow-lg shadow-amber-500/10">
                    04
                </div>
            </div>
            <div class="md:col-span-10 space-y-3">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">Step 4: Chime & Print</span>
                <h3 class="text-2xl font-bold text-white">Terminal Chimes & Prints in 1 Click</h3>
                <p class="text-sm text-slate-300 leading-relaxed">
                    A pleasant audio chime rings on your PC terminal. The job card appears showing customer name, page count, and total bill. Click "Print Now" and your printer produces the job immediately. Hand over the printout, collect the cash or EasyPaisa/JazzCash, and you're done!
                </p>
                <div class="pt-2 text-xs text-emerald-400 font-semibold">
                    ✓ Total transaction time reduced to under 45 seconds!
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video / Walkthrough CTA -->
<section class="py-16 bg-slate-900/40 border-t border-slate-800 text-center">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <h3 class="text-3xl font-extrabold text-white">Want to See a Live Demo on Your Screen?</h3>
        <p class="text-slate-400 text-sm">
            Book a 10-minute remote desk walkthrough with our team or test the Windows desktop application yourself.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-2">
            <button @click="demoModalOpen = true" class="bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold px-8 py-3.5 rounded-2xl text-sm transition-all shadow-lg shadow-amber-500/20">
                Book Free Live Walkthrough
            </button>
            <a href="{{ route('download') }}" class="bg-slate-900 hover:bg-slate-800 text-white font-bold px-8 py-3.5 rounded-2xl text-sm border border-slate-700 transition-colors">
                Download Windows Setup
            </a>
        </div>
    </div>
</section>
@endsection
