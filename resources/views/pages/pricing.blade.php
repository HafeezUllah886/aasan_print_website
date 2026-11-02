@extends('layouts.app')

@section('title', 'Pricing - Aasan Print POS Terminal & QR Printing')
@section('meta_description', 'Affordable, transparent pricing for print shops in Pakistan. 14-day free trial. Plans starting at only PKR 1,500/month or PKR 15,000/year.')

@section('content')
<!-- Hero Header -->
<section class="py-16 lg:py-24 bg-slate-950 border-b border-slate-800 text-center relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-amber-500/10 border border-amber-500/30 text-amber-400 mb-6">
            14-Day Full Access Free Trial
        </span>
        <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight">
            Simple, Honest Pricing.<br>
            <span class="text-amber-400">Zero Commissions.</span>
        </h1>
        <p class="text-xl text-amber-300 font-urdu mt-4">
            کوئی خفیہ چارجز نہیں، صرف ایک آسان فیس!
        </p>
        <p class="text-slate-300 text-base max-w-xl mx-auto mt-4 leading-relaxed">
            You keep 100% of your printing earnings. We only provide the software and customer upload infrastructure.
        </p>
    </div>
</section>

<!-- Pricing Grid -->
<section class="py-20 bg-slate-950" x-data="{ isAnnual: true }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Billing Toggle -->
        <div class="flex items-center justify-center gap-4 mb-16">
            <span class="text-sm font-semibold" :class="!isAnnual ? 'text-white' : 'text-slate-400'">Monthly Billing</span>
            <button @click="isAnnual = !isAnnual" 
                    type="button" 
                    class="relative inline-flex h-8 w-14 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none"
                    :class="isAnnual ? 'bg-amber-500' : 'bg-slate-800'">
                <span class="pointer-events-none inline-block h-7 w-7 transform rounded-full bg-slate-950 shadow ring-0 transition duration-200 ease-in-out"
                      :class="isAnnual ? 'translate-x-6' : 'translate-x-0'"></span>
            </button>
            <div class="flex items-center gap-2">
                <span class="text-sm font-semibold" :class="isAnnual ? 'text-white' : 'text-slate-400'">Annual Billing</span>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-black bg-gradient-to-r from-amber-500 to-orange-500 text-slate-950">
                    Save 17% (2 Months Free!)
                </span>
            </div>
        </div>

        <!-- 3 Tier Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto">
            <!-- Tier 1: Starter Trial -->
            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 flex flex-col justify-between space-y-8">
                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">14-Day Free Trial</span>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-black text-white">Rs. 0</span>
                        <span class="text-xs text-slate-400">/ 14 days</span>
                    </div>
                    <p class="text-xs text-slate-400">
                        Try Aasan Print in your real shop counter without paying anything.
                    </p>

                    <div class="pt-4 border-t border-slate-800 space-y-3 text-xs text-slate-300">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>1 Windows Desktop Terminal</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>1 Counter QR Standee PDF</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Customer Mobile Web Upload</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Real-Time Bell Chimes</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>No Credit Card Needed</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('download') }}" class="w-full bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-4 rounded-xl text-center text-sm transition-colors">
                    Download & Start Free Trial
                </a>
            </div>

            <!-- Tier 2: Pro (Featured) -->
            <div class="bg-slate-900 border-2 border-amber-500 rounded-3xl p-8 flex flex-col justify-between space-y-8 relative shadow-2xl shadow-amber-500/10">
                <div class="absolute -top-3.5 right-6 bg-amber-500 text-slate-950 font-black text-xs uppercase tracking-wider px-3 py-1 rounded-full shadow-md">
                    Recommended
                </div>

                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">Single Shop Pro</span>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-black text-white" x-text="isAnnual ? 'Rs. 15,000' : 'Rs. 1,500'"></span>
                        <span class="text-xs text-slate-400" x-text="isAnnual ? '/ year' : '/ month'"></span>
                    </div>
                    <p class="text-xs text-slate-400" x-text="isAnnual ? 'Billed annually (Save Rs. 3,000 compared to monthly).' : 'Billed monthly. Cancel anytime.'"></p>

                    <div class="pt-4 border-t border-slate-800 space-y-3 text-xs text-slate-300">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span><strong>Full Terminal License & Updates</strong></span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Unlimited Customer Jobs & Files</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>All 3 Printable Standee Templates</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Thermal Slip & Token Printing (58/80mm)</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Daily Cashbook & Financial Reports</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Direct WhatsApp Support</span>
                        </div>
                    </div>
                </div>

                <button @click="demoModalOpen = true" 
                        class="w-full bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-extrabold py-3.5 px-4 rounded-xl text-center text-sm transition-all shadow-lg shadow-amber-500/25">
                    Activate Pro Plan
                </button>
            </div>

            <!-- Tier 3: Multi-Counter Network -->
            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 flex flex-col justify-between space-y-8">
                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Multi-Counter / Franchise</span>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-black text-white">Custom</span>
                    </div>
                    <p class="text-xs text-slate-400">
                        For large copy shops with 3+ counters, university copy centers, or multi-branch printing companies.
                    </p>

                    <div class="pt-4 border-t border-slate-800 space-y-3 text-xs text-slate-300">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Multiple Counter Terminal Licenses</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Load-Balanced Multi-Printer Routing</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Central Owner Dashboard</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>On-Site Counter Setup Assistance</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Dedicated Account Manager</span>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="w-full bg-slate-800 hover:bg-slate-700 text-white font-bold py-3 px-4 rounded-xl text-center text-sm transition-colors">
                    Contact for Enterprise Quote
                </a>
            </div>
        </div>

        <!-- Payment Methods Banner -->
        <div class="mt-16 bg-slate-900 border border-slate-800 rounded-2xl p-6 sm:p-8 max-w-4xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-6">
            <div class="space-y-1 text-center sm:text-left">
                <span class="text-xs font-bold text-amber-400 uppercase tracking-wider">Convenient Local Payment Methods</span>
                <h4 class="text-base font-bold text-white">Pay With Any Pakistani Method</h4>
                <p class="text-xs text-slate-400">EasyPaisa, JazzCash, Meezan Bank, HBL, Raast, or Cash upon installation. Official invoices provided by Nexgen Pakistan.</p>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-3">
                <span class="px-3 py-1.5 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-bold">EasyPaisa</span>
                <span class="px-3 py-1.5 rounded-lg bg-rose-500/10 border border-rose-500/20 text-rose-400 text-xs font-bold">JazzCash</span>
                <span class="px-3 py-1.5 rounded-lg bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold">Online Bank Transfer</span>
            </div>
        </div>
    </div>
</section>
@endsection
