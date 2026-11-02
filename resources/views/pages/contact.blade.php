@extends('layouts.app')

@section('title', 'Contact Us - Aasan Print by Nexgen Pakistan')
@section('meta_description', 'Get in touch with Aasan Print by Nexgen Pakistan. Book a live counter demo, get remote setup assistance on AnyDesk, or call +92 316 3560803.')

@section('content')
<!-- Hero Header -->
<section class="py-16 lg:py-24 bg-slate-950 border-b border-slate-800 text-center relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-amber-500/10 border border-amber-500/30 text-amber-400 mb-6">
            Nexgen Pakistan Support Desk
        </span>
        <h1 class="text-4xl sm:text-6xl font-black text-white tracking-tight">
            Talk To An Aasan Print Specialist
        </h1>
        <p class="text-slate-300 text-base max-w-xl mx-auto mt-4 leading-relaxed">
            Have questions about printer compatibility, multi-counter setups, or need a 1-on-1 AnyDesk walkthrough? Our Nexgen Pakistan technical support team is here to assist.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-widest text-amber-400">Direct Channels</span>
                    <h2 class="text-3xl font-extrabold text-white tracking-tight">
                        Instant WhatsApp & Phone Support
                    </h2>
                    <p class="text-sm text-slate-300 leading-relaxed">
                        We know print shop keepers and businesses are busy. Don't wait days for email tickets—reach our Nexgen Pakistan support team on WhatsApp for rapid responses within 15 minutes.
                    </p>
                </div>

                <div class="space-y-4">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/923163560803" target="_blank" 
                       class="flex items-center gap-4 p-5 rounded-2xl bg-slate-900 border border-slate-800 hover:border-emerald-500/50 transition-colors group">
                        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 flex items-center justify-center shrink-0 group-hover:scale-105 transition-transform">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.2.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.102-.115.434-.506.549-.68.116-.173.232-.144.39-.086.159.058 1.011.477 1.184.564.173.087.289.13.332.202.043.073.043.419-.101.824zM12.031 2C6.49 2 2 6.49 2 12.031c0 1.808.484 3.504 1.325 4.974L2 22l5.178-1.314A9.972 9.972 0 0 0 12.031 22C17.571 22 22 17.571 22 12.031 22 6.49 17.571 2 12.031 2z"/></svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 font-medium block">WhatsApp Sales & Support (9 AM - 10 PM)</span>
                            <span class="text-base font-bold text-white group-hover:text-emerald-400 transition-colors">+92 316 3560803</span>
                        </div>
                    </a>

                    <!-- Email -->
                    <div class="flex items-center gap-4 p-5 rounded-2xl bg-slate-900 border border-slate-800">
                        <div class="w-12 h-12 rounded-xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 font-medium block">Official Email</span>
                            <a href="mailto:info@nexgenpakistan.com" class="text-base font-bold text-white hover:text-amber-400">info@nexgenpakistan.com</a>
                        </div>
                    </div>

                    <!-- Office & Regional Hubs -->
                    <div class="flex items-center gap-4 p-5 rounded-2xl bg-slate-900 border border-slate-800">
                        <div class="w-12 h-12 rounded-xl bg-blue-500/10 text-blue-400 border border-blue-500/20 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 font-medium block">Office & Operations</span>
                            <span class="text-sm font-semibold text-white">Quetta, Pakistan</span>
                            <span class="block text-xs text-slate-400 mt-0.5">Nationwide AnyDesk & Remote Setup across Karachi, Lahore, Islamabad & Peshawar</span>
                        </div>
                    </div>

                    <!-- Company Link & Social -->
                    <div class="flex items-center justify-between p-5 rounded-2xl bg-slate-900 border border-slate-800">
                        <div>
                            <span class="text-xs text-slate-400 font-medium block">Nexgen Pakistan Website</span>
                            <a href="https://nexgenpakistan.com" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-amber-400 hover:underline">
                                nexgenpakistan.com &nearr;
                            </a>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="https://www.facebook.com/profile.php?id=61589611622853" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-slate-950 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:border-blue-500 transition-colors" title="Facebook">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="https://wa.me/923163560803" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-slate-950 border border-slate-800 flex items-center justify-center text-slate-300 hover:text-white hover:border-emerald-500 transition-colors" title="WhatsApp">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.2.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.102-.115.434-.506.549-.68.116-.173.232-.144.39-.086.159.058 1.011.477 1.184.564.173.087.289.13.332.202.043.073.043.419-.101.824zM12.031 2C6.49 2 2 6.49 2 12.031c0 1.808.484 3.504 1.325 4.974L2 22l5.178-1.314A9.972 9.972 0 0 0 12.031 22C17.571 22 22 17.571 22 12.031 22 6.49 17.571 2 12.031 2z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-10 shadow-2xl">
                <h3 class="text-2xl font-bold text-white mb-2">Send Us a Message</h3>
                <p class="text-xs text-slate-400 mb-6">Fill in your shop details and we will call or WhatsApp you within 15 minutes.</p>

                <form action="{{ route('lead.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <input type="hidden" name="source" value="contact_page">

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Your Full Name *</label>
                        <input type="text" name="name" required placeholder="e.g. Aslam Khan"
                               class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">Phone / WhatsApp *</label>
                            <input type="text" name="phone" required placeholder="03163560803"
                                   class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-300 mb-1">City *</label>
                            <input type="text" name="city" required placeholder="Quetta, Lahore, Karachi, etc."
                                   class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Shop / Business Name</label>
                        <input type="text" name="shop_name" placeholder="e.g. Master Photostat"
                               class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-300 mb-1">Message / Questions</label>
                        <textarea name="message" rows="3" placeholder="Tell us how we can help you."
                                  class="w-full bg-slate-950 border border-slate-800 rounded-xl px-3.5 py-2.5 text-sm text-white placeholder-slate-500 focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500"></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-black py-3.5 rounded-xl transition-all shadow-lg shadow-amber-500/20 text-sm">
                            Submit Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
