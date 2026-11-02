@extends('layouts.app')

@section('title', 'Aasan Print - Smart QR Printing & Desktop Terminal for Print Shops')
@section('meta_description', 'Say goodbye to WhatsApp chaos. Customers scan your counter QR standee, upload documents, and your desktop terminal chimes and prints in 1 click.')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-32">
    <!-- Ambient Background Glows -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-amber-500/10 blur-[130px] rounded-full pointer-events-none"></div>
    <div class="absolute top-1/3 right-10 w-[400px] h-[300px] bg-orange-600/10 blur-[120px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Top Badges -->
        <div class="flex flex-wrap items-center justify-center gap-3 mb-6">
            <a href="https://nexgenpakistan.com" target="_blank" rel="noopener noreferrer" 
               class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-white text-slate-950 shadow-md hover:bg-slate-100 transition-all transform hover:-translate-y-0.5">
                <img src="{{ asset('images/nexgen-logo.png') }}" alt="Nexgen Pakistan Logo" class="h-3.5 w-auto">
                <span class="font-bold">A Product of Nexgen Pakistan</span>
                <span class="text-slate-500 text-[10px]">&nearr;</span>
            </a>
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold bg-amber-500/10 border border-amber-500/30 text-amber-400 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
                Built For Print Shops & Photostat Centers
            </span>
            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full text-xs font-semibold bg-slate-900 border border-slate-800 text-slate-300">
                <svg class="w-3.5 h-3.5 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                Zero WhatsApp Chat Clutter
            </span>
        </div>

        <!-- Headline & Subtitle -->
        <div class="text-center max-w-4xl mx-auto space-y-6">
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white tracking-tight leading-[1.1]">
                Stop Sharing WhatsApp.<br>
                <span class="bg-gradient-to-r from-amber-400 via-orange-400 to-amber-500 bg-clip-text text-transparent">
                    Automate Your Print Counter.
                </span>
            </h1>

            <p class="text-xl sm:text-2xl text-amber-300/90 font-urdu tracking-wide leading-relaxed">
                گاہک کیو آر کوڈ اسکین کرے گا، فائل اپلوڈ ہوگی، اور آپ کے کمپیوٹر پر گھنٹی بجے گی!
            </p>

            <p class="text-slate-300 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                Place our branded QR standee on your shop counter. Customers scan, upload PDF/photos, choose B&W or Color, and see their exact bill. Your desktop terminal chimes and prints silently in 1 click.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                <a href="{{ route('download') }}" 
                   class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-amber-500 via-amber-400 to-amber-500 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-extrabold px-8 py-4 rounded-2xl shadow-xl shadow-amber-500/25 transition-all transform hover:-translate-y-0.5 active:translate-y-0 text-base">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    <span>Download Windows Terminal</span>
                    <span class="text-xs bg-slate-950 text-amber-300 px-2 py-0.5 rounded-full font-bold">14-Day Free</span>
                </a>

                <button @click="playBell()" 
                        type="button"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-slate-900/90 hover:bg-slate-800 border border-slate-700/80 hover:border-amber-500/50 text-white font-bold px-6 py-4 rounded-2xl transition-all text-base group">
                    <span class="text-amber-400 group-hover:scale-125 transition-transform">🔔</span>
                    <span>Test Terminal Bell Chime</span>
                </button>
            </div>

            <!-- Guarantee row -->
            <div class="flex flex-wrap items-center justify-center gap-6 pt-2 text-xs text-slate-400">
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    No credit card required
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Windows 10 / 11 Compatible
                </span>
                <span class="flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Free Printable Counter Standee
                </span>
            </div>
        </div>

        <!-- Interactive Terminal & Counter Simulator -->
        <div class="mt-16 sm:mt-24 max-w-5xl mx-auto"
             x-data="{
                 simulatedJobs: [
                     { id: 48, name: 'Usman Ali', phone: '0312-4567890', file: 'Final_Thesis_Bind.pdf', pages: 24, type: 'B&W Duplex', size: 'A4', price: 96, status: 'Printing', time: 'Just now' },
                     { id: 47, name: 'Ayesha Bibi', phone: '0300-8877665', file: 'CNIC_BothSides_Scan.jpg', pages: 2, type: 'Color Simplex', size: 'A4', price: 40, status: 'Ready', time: '2 mins ago' },
                     { id: 46, name: 'Hassan Raza', phone: '0345-1122334', file: 'Legal_Affidavit_Stamp.docx', pages: 3, type: 'B&W Simplex', size: 'Legal', price: 30, status: 'Completed', time: '5 mins ago' }
                 ],
                 jobCounter: 49,
                 isNewJobFlash: false,
                 simulateCustomerOrder() {
                     window.playAasanChime();
                     this.isNewJobFlash = true;
                     const newId = this.jobCounter++;
                     const randomNames = ['Zain Malik', 'Fatima Zahra', 'Bilal Ahmed', 'Khurram Shehzad', 'Marium Tariq'];
                     const randomFiles = ['CV_Resume_Updated.pdf', 'Court_Deed_Signed.pdf', 'Chapter_5_Physics_Notes.pdf', 'Challan_Form_Bank.pdf'];
                     const randomName = randomNames[Math.floor(Math.random() * randomNames.length)];
                     const randomFile = randomFiles[Math.floor(Math.random() * randomFiles.length)];
                     const randomPages = Math.floor(Math.random() * 15) + 3;
                     const isColor = Math.random() > 0.6;
                     const isDuplex = Math.random() > 0.5;
                     
                     let price = randomPages * (isColor ? (isDuplex ? 35 : 20) : (isDuplex ? 8 : 5));

                     this.simulatedJobs.unshift({
                         id: newId,
                         name: randomName,
                         phone: '03' + Math.floor(100000000 + Math.random() * 900000000).toString().substring(0, 9),
                         file: randomFile,
                         pages: randomPages,
                         type: (isColor ? 'Color ' : 'B&W ') + (isDuplex ? 'Duplex' : 'Simplex'),
                         size: 'A4',
                         price: price,
                         status: 'Pending',
                         time: 'Just now'
                     });

                     setTimeout(() => { this.isNewJobFlash = false; }, 2500);
                 },
                 markPrinted(job) {
                     job.status = 'Completed';
                 }
             }">

            <!-- Desktop Mockup Container -->
            <div class="relative rounded-3xl bg-slate-900/90 border border-slate-700/80 shadow-2xl overflow-hidden backdrop-blur-xl">
                <!-- Mac/Windows Window Header -->
                <div class="bg-slate-950 px-4 py-3 border-b border-slate-800 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-rose-500/80"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-500/80"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-500/80"></span>
                        <span class="text-xs font-mono text-slate-400 ml-2 hidden sm:inline">AasaanPrint Terminal v2.4 (Live Counter Mode)</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center gap-1.5 text-[11px] text-emerald-400 font-semibold bg-emerald-500/10 px-2.5 py-1 rounded-full border border-emerald-500/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            HP LaserJet P2055 (USB Ready)
                        </span>

                        <button @click="simulateCustomerOrder()" 
                                class="inline-flex items-center gap-1.5 bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold px-3 py-1 rounded-lg text-xs transition-colors shadow-sm">
                            <span>⚡ Simulate Customer Order</span>
                        </button>
                    </div>
                </div>

                <!-- Terminal Body -->
                <div class="p-4 sm:p-6 lg:p-8 space-y-6">
                    <!-- Stat Bar -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <div class="bg-slate-950/80 border border-slate-800/80 rounded-2xl p-4">
                            <span class="text-xs text-slate-400 font-medium block">Today's Jobs</span>
                            <span class="text-xl sm:text-2xl font-black text-white" x-text="simulatedJobs.length + 35"></span>
                        </div>
                        <div class="bg-slate-950/80 border border-slate-800/80 rounded-2xl p-4">
                            <span class="text-xs text-slate-400 font-medium block">Total Pages</span>
                            <span class="text-xl sm:text-2xl font-black text-amber-400">428 Pages</span>
                        </div>
                        <div class="bg-slate-950/80 border border-slate-800/80 rounded-2xl p-4">
                            <span class="text-xs text-slate-400 font-medium block">Cash Collected</span>
                            <span class="text-xl sm:text-2xl font-black text-emerald-400">Rs. 3,840</span>
                        </div>
                        <div class="bg-slate-950/80 border border-slate-800/80 rounded-2xl p-4">
                            <span class="text-xs text-slate-400 font-medium block">Terminal Mode</span>
                            <span class="text-sm sm:text-base font-bold text-slate-200">Auto Chime ON 🔔</span>
                        </div>
                    </div>

                    <!-- Live Order Table -->
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs text-slate-400 px-1">
                            <span class="font-bold text-slate-200 uppercase tracking-wider">Live Incoming Print Queue</span>
                            <span class="text-[11px]">Click "Simulate Customer Order" above to trigger chime</span>
                        </div>

                        <div class="space-y-2.5">
                            <template x-for="(job, index) in simulatedJobs" :key="job.id">
                                <div class="bg-slate-950/90 border rounded-2xl p-4 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 transition-all duration-300"
                                     :class="{
                                         'border-amber-500 shadow-lg shadow-amber-500/10 ring-1 ring-amber-500': index === 0 && isNewJobFlash,
                                         'border-slate-800 hover:border-slate-700': !(index === 0 && isNewJobFlash)
                                     }">
                                    <!-- Job Info -->
                                    <div class="flex items-center gap-3.5">
                                        <div class="w-10 h-10 rounded-xl flex items-center justify-center font-mono font-bold text-sm shrink-0"
                                             :class="job.status === 'Completed' ? 'bg-slate-900 text-slate-500 border border-slate-800' : 'bg-amber-500/10 text-amber-400 border border-amber-500/30'">
                                            #<span x-text="job.id"></span>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-bold text-white text-sm" x-text="job.name"></span>
                                                <span class="text-xs font-mono text-slate-400" x-text="job.phone"></span>
                                                <span class="text-[10px] px-2 py-0.5 rounded-full font-semibold"
                                                      :class="{
                                                          'bg-amber-500/10 text-amber-300 border border-amber-500/30': job.status === 'Pending',
                                                          'bg-blue-500/10 text-blue-300 border border-blue-500/30': job.status === 'Printing',
                                                          'bg-emerald-500/10 text-emerald-400 border border-emerald-500/30': job.status === 'Completed'
                                                      }"
                                                      x-text="job.status"></span>
                                            </div>
                                            <div class="flex flex-wrap items-center gap-2 text-xs text-slate-400 mt-0.5">
                                                <span class="text-slate-300 font-mono truncate max-w-[200px]" x-text="job.file"></span>
                                                <span>&bull;</span>
                                                <span class="text-amber-400 font-semibold" x-text="job.pages + ' Pages'"></span>
                                                <span>&bull;</span>
                                                <span x-text="job.type"></span>
                                                <span>&bull;</span>
                                                <span x-text="job.size"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Price & Actions -->
                                    <div class="flex items-center justify-between sm:justify-end gap-4 w-full sm:w-auto pt-2 sm:pt-0 border-t sm:border-t-0 border-slate-800">
                                        <div class="text-left sm:text-right">
                                            <span class="text-[10px] text-slate-400 uppercase tracking-wider block">Total Bill</span>
                                            <span class="text-base font-extrabold text-emerald-400" x-text="'Rs. ' + job.price"></span>
                                        </div>

                                        <div class="flex items-center gap-2">
                                            <button @click="markPrinted(job)" 
                                                    type="button"
                                                    :disabled="job.status === 'Completed'"
                                                    class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl text-xs font-bold transition-all"
                                                    :class="job.status === 'Completed' ? 'bg-slate-900 text-slate-500 cursor-default' : 'bg-amber-500 hover:bg-amber-400 text-slate-950 shadow-md shadow-amber-500/15'">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4H7v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                                                <span x-text="job.status === 'Completed' ? 'Printed ✓' : 'Print Now'"></span>
                                            </button>

                                            <button type="button" 
                                                    title="Print Thermal Token Slip"
                                                    class="p-2 rounded-xl bg-slate-900 hover:bg-slate-800 text-slate-400 hover:text-white border border-slate-800 transition-colors">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>

                <!-- Bottom Simulation Prompt -->
                <div class="bg-slate-950/90 border-t border-slate-800 px-6 py-3 text-xs text-slate-400 flex flex-col sm:flex-row items-center justify-between gap-2">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        <span>This is a live interactive simulation of what runs on your shop PC.</span>
                    </div>
                    <button @click="demoModalOpen = true" class="text-amber-400 font-bold hover:underline">
                        Install on your computer in 3 minutes &rarr;
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- The WhatsApp Nightmare vs Aasan Print Solution -->
<section class="py-20 bg-slate-900/60 border-y border-slate-800 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 class="text-xs font-bold uppercase tracking-widest text-amber-400">Comparison</h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Why Traditional Print Shops Are Slow & Losing Money
            </h3>
            <p class="text-slate-400 text-sm sm:text-base">
                See what happens when you switch from chaotic WhatsApp file sharing to Aasan Print's automated counter workflow.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            <!-- The Old Way (WhatsApp) -->
            <div class="bg-rose-950/20 border border-rose-900/40 rounded-3xl p-6 sm:p-8 space-y-6">
                <div class="flex items-center gap-3 pb-4 border-b border-rose-900/30">
                    <div class="w-10 h-10 rounded-xl bg-rose-500/20 text-rose-400 flex items-center justify-center font-bold text-lg">
                        ✕
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-white">The Old Way: WhatsApp Clutter</h4>
                        <span class="text-xs text-rose-400">Slow, frustrating, and prone to mistakes</span>
                    </div>
                </div>

                <ul class="space-y-4 text-sm text-slate-300">
                    <li class="flex items-start gap-3">
                        <span class="text-rose-400 font-bold mt-0.5">✕</span>
                        <span>Giving your personal mobile number to 50+ strangers every day.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-rose-400 font-bold mt-0.5">✕</span>
                        <span>WhatsApp Web takes 2-3 minutes to sync, freezing your PC with 30 open tabs.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-rose-400 font-bold mt-0.5">✕</span>
                        <span>Downloads folder clogged with thousands of mixed-up customer files.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-rose-400 font-bold mt-0.5">✕</span>
                        <span>Manually scrolling through 80-page PDFs to count pages and calculate the bill.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-rose-400 font-bold mt-0.5">✕</span>
                        <span>Disputes over single vs double-sided rates, lost slips, and customer walkaways.</span>
                    </li>
                </ul>

                <div class="pt-4 border-t border-rose-900/30 text-xs text-rose-300 font-medium">
                    Average wait time per customer: <strong>6 to 10 minutes</strong>
                </div>
            </div>

            <!-- The Aasan Print Way -->
            <div class="bg-amber-950/20 border border-amber-500/30 rounded-3xl p-6 sm:p-8 space-y-6 relative overflow-hidden">
                <div class="absolute top-0 right-0 bg-amber-500 text-slate-950 font-black text-[10px] uppercase tracking-wider px-3 py-1 rounded-bl-xl">
                    10x Faster
                </div>

                <div class="flex items-center gap-3 pb-4 border-b border-amber-500/20">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-lg">
                        ✓
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-white">The Aasan Print Way</h4>
                        <span class="text-xs text-amber-400 font-urdu">تیز رفتار اور بغیر واٹس ایپ کے</span>
                    </div>
                </div>

                <ul class="space-y-4 text-sm text-slate-300">
                    <li class="flex items-start gap-3">
                        <span class="text-amber-400 font-bold mt-0.5">✓</span>
                        <span><strong>Zero personal numbers shared:</strong> Customer points phone camera at counter standee.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-400 font-bold mt-0.5">✓</span>
                        <span><strong>No app needed:</strong> Works instantly on any iPhone, Android, or mobile browser.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-400 font-bold mt-0.5">✓</span>
                        <span><strong>Instant bill calculation:</strong> Detects pages automatically and shows live price to customer.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-400 font-bold mt-0.5">✓</span>
                        <span><strong>Audio chime alert:</strong> Your desktop rings as soon as a document is sent.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-amber-400 font-bold mt-0.5">✓</span>
                        <span><strong>1-Click Silent Print:</strong> Direct job sending to your USB or network laser printer.</span>
                    </li>
                </ul>

                <div class="pt-4 border-t border-amber-500/20 text-xs text-amber-300 font-medium">
                    Average wait time per customer: <strong>45 seconds</strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive ROI & Savings Calculator -->
<section class="py-20 bg-slate-950 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 class="text-xs font-bold uppercase tracking-widest text-amber-400">Interactive Calculator</h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Calculate How Much Time & Money You Save Daily
            </h3>
            <p class="text-slate-400 text-sm sm:text-base">
                Slide the controls below based on your print shop's daily traffic to see your productivity boost.
            </p>
        </div>

        <div class="max-w-4xl mx-auto bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-10 shadow-2xl"
             x-data="{
                 dailyOrders: 60,
                 avgPages: 12,
                 bwPrice: 5,
                 get timeSavedHours() {
                     // Saves about 4.5 minutes per order compared to WhatsApp
                     return ((this.dailyOrders * 4.5) / 60).toFixed(1);
                 },
                 get monthlyRevenue() {
                     return (this.dailyOrders * this.avgPages * this.bwPrice * 30).toLocaleString();
                 },
                 get extraCustomersServed() {
                     return Math.floor(this.dailyOrders * 0.35);
                 }
             }">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Sliders -->
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between text-sm font-semibold mb-2">
                            <span class="text-slate-300">Daily Customer Print Orders:</span>
                            <span class="text-amber-400 font-mono font-bold text-base" x-text="dailyOrders + ' orders/day'"></span>
                        </div>
                        <input type="range" min="15" max="250" step="5" x-model="dailyOrders" 
                               class="w-full h-2 bg-slate-800 rounded-lg appearance-none cursor-pointer accent-amber-500">
                        <div class="flex justify-between text-[11px] text-slate-500 mt-1">
                            <span>15 orders (Small shop)</span>
                            <span>250 orders (High street/College)</span>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm font-semibold mb-2">
                            <span class="text-slate-300">Average Pages Per Customer:</span>
                            <span class="text-amber-400 font-mono font-bold text-base" x-text="avgPages + ' pages'"></span>
                        </div>
                        <input type="range" min="2" max="50" step="1" x-model="avgPages" 
                               class="w-full h-2 bg-slate-800 rounded-lg appearance-none cursor-pointer accent-amber-500">
                        <div class="flex justify-between text-[11px] text-slate-500 mt-1">
                            <span>2 pages</span>
                            <span>50 pages</span>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-sm font-semibold mb-2">
                            <span class="text-slate-300">Your B&W Price Per Page (PKR):</span>
                            <span class="text-emerald-400 font-mono font-bold text-base" x-text="'Rs. ' + bwPrice"></span>
                        </div>
                        <input type="range" min="3" max="25" step="1" x-model="bwPrice" 
                               class="w-full h-2 bg-slate-800 rounded-lg appearance-none cursor-pointer accent-emerald-500">
                    </div>
                </div>

                <!-- Results Output Card -->
                <div class="bg-slate-950 border border-slate-800 rounded-2xl p-6 sm:p-8 flex flex-col justify-between space-y-6">
                    <div class="space-y-4">
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">Your Estimated Gains</span>
                        
                        <div>
                            <span class="text-xs text-slate-400 block">Counter Time Saved Daily:</span>
                            <span class="text-3xl sm:text-4xl font-black text-amber-400" x-text="timeSavedHours + ' Hours'"></span>
                            <span class="text-xs text-slate-400 block mt-0.5">No WhatsApp downloading, no manual math</span>
                        </div>

                        <div class="pt-3 border-t border-slate-800">
                            <span class="text-xs text-slate-400 block">Extra Capacity / More Customers Handled:</span>
                            <span class="text-2xl font-bold text-white" x-text="'+' + extraCustomersServed + ' customers / day'"></span>
                            <span class="text-xs text-slate-400 block mt-0.5">Zero line congestion outside your shop</span>
                        </div>

                        <div class="pt-3 border-t border-slate-800">
                            <span class="text-xs text-slate-400 block">Estimated Monthly Print Revenue:</span>
                            <span class="text-2xl font-bold text-emerald-400" x-text="'Rs. ' + monthlyRevenue"></span>
                        </div>
                    </div>

                    <button @click="demoModalOpen = true" 
                            class="w-full bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-bold py-3 px-4 rounded-xl text-center text-sm transition-all shadow-lg shadow-amber-500/20">
                        Start 14-Day Free Trial (Rs. 0 Today)
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Product Features Grid -->
<section class="py-20 bg-slate-900/50 border-t border-slate-800 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 class="text-xs font-bold uppercase tracking-widest text-amber-400">Everything Included</h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Designed for the Realities of Pakistani Print Shops
            </h3>
            <p class="text-slate-400 text-sm sm:text-base">
                From flaky internet handling to thermal slips and document camera scans, Aasan Print solves your daily headaches.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-slate-950 border border-slate-800 rounded-3xl p-6 sm:p-8 hover:border-amber-500/40 transition-all group">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-2">Counter QR Standees</h4>
                <p class="text-slate-400 text-sm leading-relaxed mb-4">
                    Place our customized printable standee on your desk. Customers scan it with any smartphone camera—no app download required.
                </p>
                <div class="text-xs font-semibold text-amber-400 font-urdu">
                    گاہک صرف کیمرہ اوپن کر کے اسکین کرے گا!
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="bg-slate-950 border border-slate-800 rounded-3xl p-6 sm:p-8 hover:border-amber-500/40 transition-all group">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-2">Mobile Scanner & Filters</h4>
                <p class="text-slate-400 text-sm leading-relaxed mb-4">
                    When customers take photos of handwritten book pages or CNIC cards, our built-in scanner auto-crops and applies magic B&W contrast filters for clean prints.
                </p>
                <div class="text-xs font-semibold text-amber-400 font-urdu">
                    صاف ستھری فوٹو کاپی کے لیے آٹو اینہانسمنٹ
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="bg-slate-950 border border-slate-800 rounded-3xl p-6 sm:p-8 hover:border-amber-500/40 transition-all group">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-2">Native Windows Terminal</h4>
                <p class="text-slate-400 text-sm leading-relaxed mb-4">
                    Ultra-fast desktop app built for Windows 10 & 11. Plays pleasant audio alerts, previews documents, and sends jobs to your printers with 1 click.
                </p>
                <div class="text-xs font-semibold text-amber-400 font-urdu">
                    آف لائن محفوظ، ونڈوز ۱۰ اور ۱۱ کے لیے
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="bg-slate-950 border border-slate-800 rounded-3xl p-6 sm:p-8 hover:border-amber-500/40 transition-all group">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-2">Auto Page & Price Engine</h4>
                <p class="text-slate-400 text-sm leading-relaxed mb-4">
                    Automatically inspects PDF files to count pages. Computes exact rate based on B&W single/duplex, Color, Legal, or A4 paper settings.
                </p>
                <div class="text-xs font-semibold text-amber-400 font-urdu">
                    صفحات کی آٹو گنتی اور بالکل درست بل
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="bg-slate-950 border border-slate-800 rounded-3xl p-6 sm:p-8 hover:border-amber-500/40 transition-all group">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4H7v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-2">Thermal Slips & Tokens</h4>
                <p class="text-slate-400 text-sm leading-relaxed mb-4">
                    Print queue tokens or receipt slips on any 58mm or 80mm thermal receipt printer. Keep queue disciplined during rush hours.
                </p>
                <div class="text-xs font-semibold text-amber-400 font-urdu">
                    تھرمل پرنٹر پر کسٹمر ٹوکن اور رسید
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="bg-slate-950 border border-slate-800 rounded-3xl p-6 sm:p-8 hover:border-amber-500/40 transition-all group">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-400 border border-amber-500/20 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h4 class="text-xl font-bold text-white mb-2">Daily Cashbook & Ledger</h4>
                <p class="text-slate-400 text-sm leading-relaxed mb-4">
                    See your total daily sales, total pages printed, pending jobs, and cash balance at the end of the day. Know your true profits.
                </p>
                <div class="text-xs font-semibold text-amber-400 font-urdu">
                    روزانہ کی سیلز، کیش بک اور مکمل کھاتہ
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Free Printable Standee Showcase -->
<section class="py-20 bg-slate-950 border-t border-slate-800 relative" id="standees">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-amber-500/10 text-amber-400 border border-amber-500/20">
                    Included 100% Free With Every Account
                </span>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                    Instant Printable Standee Posters for Your Shop Counter
                </h3>
                <p class="text-slate-300 text-base leading-relaxed">
                    Don't worry about designing artwork or hiring a graphic designer. Your Aasan Print dashboard automatically generates ready-to-print high-resolution A4 posters featuring your shop name, logo, custom rates, and unique QR code.
                </p>

                <div class="space-y-3 text-sm text-slate-300">
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-full bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-xs shrink-0">1</span>
                        <span><strong>3 Designer Templates:</strong> Modern Amber, High-Contrast Bold, and Clean Minimal.</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-full bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-xs shrink-0">2</span>
                        <span><strong>Official Tagline:</strong> "Scan to Print – No WhatsApp, No Wait!"</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-6 h-6 rounded-full bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold text-xs shrink-0">3</span>
                        <span><strong>1-Click PDF Download:</strong> Print on your own color printer or laminate for your acrylic standee.</span>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="{{ route('download') }}" class="inline-flex items-center gap-2 text-sm font-bold text-amber-400 hover:text-amber-300 underline">
                        Download Sample Standee PDF &rarr;
                    </a>
                </div>
            </div>

            <!-- Standee Visual Mockup -->
            <div class="relative flex justify-center">
                <div class="w-72 sm:w-80 bg-white text-slate-950 rounded-2xl shadow-2xl p-6 border-4 border-amber-400 relative transform rotate-1 hover:rotate-0 transition-transform duration-300">
                    <!-- Standee Header -->
                    <div class="text-center pb-4 border-b-2 border-slate-900">
                        <div class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-amber-500 text-slate-950 font-black mb-2">
                            AP
                        </div>
                        <h4 class="text-xl font-black tracking-tight uppercase">Master Photostat</h4>
                        <p class="text-[11px] font-bold text-amber-600">Scan to Print – No WhatsApp, No Wait!</p>
                    </div>

                    <!-- QR Box -->
                    <div class="my-5 p-4 bg-slate-50 border-2 border-dashed border-slate-300 rounded-xl flex flex-col items-center justify-center">
                        <!-- High Quality Vector SVG QR Code -->
                        <div class="w-40 h-40 bg-white p-2 border border-slate-300 rounded-lg flex items-center justify-center shadow-inner">
                            <svg class="w-full h-full text-slate-950" viewBox="0 0 100 100" fill="currentColor">
                                <rect width="100" height="100" fill="white"/>
                                <!-- Top-Left Target -->
                                <rect x="10" y="10" width="25" height="25" fill="#020617"/>
                                <rect x="15" y="15" width="15" height="15" fill="white"/>
                                <rect x="18" y="18" width="9" height="9" fill="#f59e0b"/>
                                <!-- Top-Right Target -->
                                <rect x="65" y="10" width="25" height="25" fill="#020617"/>
                                <rect x="70" y="15" width="15" height="15" fill="white"/>
                                <rect x="73" y="18" width="9" height="9" fill="#f59e0b"/>
                                <!-- Bottom-Left Target -->
                                <rect x="10" y="65" width="25" height="25" fill="#020617"/>
                                <rect x="15" y="70" width="15" height="15" fill="white"/>
                                <rect x="18" y="73" width="9" height="9" fill="#f59e0b"/>
                                <!-- Data pixels -->
                                <rect x="42" y="12" width="6" height="6" fill="#020617"/>
                                <rect x="52" y="18" width="6" height="6" fill="#020617"/>
                                <rect x="42" y="30" width="6" height="6" fill="#020617"/>
                                <rect x="12" y="42" width="6" height="6" fill="#020617"/>
                                <rect x="25" y="45" width="6" height="6" fill="#020617"/>
                                <rect x="45" y="45" width="10" height="10" fill="#020617"/>
                                <rect x="62" y="42" width="6" height="6" fill="#020617"/>
                                <rect x="78" y="48" width="6" height="6" fill="#020617"/>
                                <rect x="42" y="65" width="6" height="6" fill="#020617"/>
                                <rect x="55" y="72" width="6" height="6" fill="#020617"/>
                                <rect x="70" y="65" width="6" height="6" fill="#020617"/>
                                <rect x="80" y="78" width="6" height="6" fill="#020617"/>
                            </svg>
                        </div>
                        <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest mt-2">Point phone camera to scan</span>
                    </div>

                    <!-- Steps on Standee -->
                    <div class="space-y-1.5 text-[11px] text-slate-700 font-semibold text-center border-t border-slate-200 pt-3">
                        <div class="text-slate-900">1. Scan &bull; 2. Upload Document &bull; 3. Collect Print</div>
                        <div class="text-[10px] text-amber-600 font-bold font-urdu">واٹس ایپ نمبر کے بغیر ڈائریکٹ پرنٹنگ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Plans Section -->
<section class="py-20 bg-slate-900/60 border-t border-slate-800" id="pricing">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 class="text-xs font-bold uppercase tracking-widest text-amber-400">Simple, Transparent Pricing</h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                One Honest Price. 14-Day Free Trial.
            </h3>
            <p class="text-slate-400 text-sm sm:text-base">
                No hidden setup fees. No per-page commissions. You keep 100% of your printing profits.
            </p>
        </div>

        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch"
             x-data="{ isAnnual: true }">

            <!-- Monthly Plan -->
            <div class="bg-slate-950 border border-slate-800 rounded-3xl p-8 flex flex-col justify-between space-y-8">
                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Monthly Basic</span>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-black text-white">Rs. 1,500</span>
                        <span class="text-xs text-slate-400 font-medium">/ month</span>
                    </div>
                    <p class="text-xs text-slate-400">
                        Ideal for small print shops and photocopy centers starting out.
                    </p>

                    <div class="pt-4 border-t border-slate-800 space-y-3 text-xs text-slate-300">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>14-Day Full Access Free Trial</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>1 Windows Desktop Terminal License</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Unlimited Customer Uploads & Scans</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Free Printable Counter Standee PDF</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Standard WhatsApp Support</span>
                        </div>
                    </div>
                </div>

                <button @click="demoModalOpen = true" 
                        class="w-full bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 px-4 rounded-xl text-center text-sm border border-slate-700 transition-colors">
                    Start 14-Day Free Trial
                </button>
            </div>

            <!-- Annual Plan (Best Value) -->
            <div class="bg-slate-950 border-2 border-amber-500 rounded-3xl p-8 flex flex-col justify-between space-y-8 relative shadow-2xl shadow-amber-500/10">
                <div class="absolute -top-3.5 right-8 bg-gradient-to-r from-amber-500 to-orange-500 text-slate-950 font-black text-xs uppercase tracking-wider px-3.5 py-1 rounded-full shadow-md">
                    Save 17% (2 Months Free)
                </div>

                <div class="space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-400 block">Annual Pro (Most Popular)</span>
                    <div class="flex items-baseline gap-2">
                        <span class="text-4xl font-black text-white">Rs. 15,000</span>
                        <span class="text-xs text-slate-400 font-medium">/ year</span>
                    </div>
                    <p class="text-xs text-slate-400">
                        Pay for 10 months and get 12 months of uninterrupted service.
                    </p>

                    <div class="pt-4 border-t border-slate-800 space-y-3 text-xs text-slate-300">
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span><strong>Everything in Monthly Basic</strong></span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>2 Months Completely Free (Save Rs. 3,000)</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Priority WhatsApp & Remote Desk Setup</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Custom Shop Branding & Logo on Standees</span>
                        </div>
                        <div class="flex items-center gap-2.5">
                            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            <span>Automated Daily WhatsApp Sales Summary</span>
                        </div>
                    </div>
                </div>

                <button @click="demoModalOpen = true" 
                        class="w-full bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-extrabold py-3.5 px-4 rounded-xl text-center text-sm transition-all shadow-lg shadow-amber-500/25">
                    Start 14-Day Free Trial
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Shopkeeper Testimonials -->
<section class="py-20 bg-slate-950 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <h2 class="text-xs font-bold uppercase tracking-widest text-amber-400">Loved by Shop Owners</h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Trusted by 500+ Print Shops Across Pakistan
            </h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Review 1 -->
            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 space-y-4 flex flex-col justify-between">
                <p class="text-sm text-slate-300 leading-relaxed italic">
                    "Pehle WhatsApp Web connect karne mein aur files dhoondne mein aadha ghanta zaya hota tha. Jab se counter par Aasan Print standee lagaya hai, customer khud scan karke print bhej deta hai aur seedha bell bajti hai."
                </p>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-800">
                    <div class="w-10 h-10 rounded-full bg-amber-500/20 text-amber-400 font-bold flex items-center justify-center text-sm">
                        MA
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white">Muhammad Aslam</h4>
                        <span class="text-xs text-slate-400">Master Photostat, Urdu Bazaar Lahore</span>
                    </div>
                </div>
            </div>

            <!-- Review 2 -->
            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 space-y-4 flex flex-col justify-between">
                <p class="text-sm text-slate-300 leading-relaxed italic">
                    "Students ke liye sab se behtareen cheez hai. Unko app install nahi karni parti. Direct camera se scan kiya, notes upload kiye aur page count khud bakhud calculate ho kar agya. Zero jhanjhat!"
                </p>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-800">
                    <div class="w-10 h-10 rounded-full bg-emerald-500/20 text-emerald-400 font-bold flex items-center justify-center text-sm">
                        RI
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white">Rehan Iqbal</h4>
                        <span class="text-xs text-slate-400">Campus Copy Center, Islamabad</span>
                    </div>
                </div>
            </div>

            <!-- Review 3 -->
            <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 sm:p-8 space-y-4 flex flex-col justify-between">
                <p class="text-sm text-slate-300 leading-relaxed italic">
                    "The thermal receipt and token generator solved our counter rush. Customers get their slip with total price and wait calmly. Monthly 1500 PKR is nothing compared to the time it saves us."
                </p>
                <div class="flex items-center gap-3 pt-4 border-t border-slate-800">
                    <div class="w-10 h-10 rounded-full bg-blue-500/20 text-blue-400 font-bold flex items-center justify-center text-sm">
                        ZA
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white">Zubair Ahmed</h4>
                        <span class="text-xs text-slate-400">Al-Madina Digital Print, Regal Chowk Karachi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ) -->
<section class="py-20 bg-slate-900/60 border-t border-slate-800" id="faq">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 space-y-4">
            <h2 class="text-xs font-bold uppercase tracking-widest text-amber-400">Got Questions?</h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                Frequently Asked Questions
            </h3>
        </div>

        <div class="space-y-4" x-data="{ activeFaq: null }">
            <!-- FAQ 1 -->
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden">
                <button @click="activeFaq = (activeFaq === 1 ? null : 1)" 
                        class="w-full text-left px-6 py-4 flex items-center justify-between text-base font-bold text-white">
                    <span>Do customers need to download an app on their phone?</span>
                    <span class="text-amber-400 ml-4 font-mono" x-text="activeFaq === 1 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 1" x-cloak class="px-6 pb-5 text-sm text-slate-400 leading-relaxed border-t border-slate-900 pt-3">
                    No! That is the beauty of Aasan Print. Customers just open their regular phone camera (iPhone or Android), point it at the counter QR code, and our web portal opens instantly in their mobile browser.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden">
                <button @click="activeFaq = (activeFaq === 2 ? null : 2)" 
                        class="w-full text-left px-6 py-4 flex items-center justify-between text-base font-bold text-white">
                    <span>What printers are supported?</span>
                    <span class="text-amber-400 ml-4 font-mono" x-text="activeFaq === 2 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 2" x-cloak class="px-6 pb-5 text-sm text-slate-400 leading-relaxed border-t border-slate-900 pt-3">
                    Aasan Print supports all standard Windows printers including HP, Canon, Xerox, Ricoh, Brother, Konica Minolta, and Epson. It also supports 58mm and 80mm ESC/POS thermal receipt printers for printing queue tokens.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden">
                <button @click="activeFaq = (activeFaq === 3 ? null : 3)" 
                        class="w-full text-left px-6 py-4 flex items-center justify-between text-base font-bold text-white">
                    <span>Can I customize my printing rates?</span>
                    <span class="text-amber-400 ml-4 font-mono" x-text="activeFaq === 3 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 3" x-cloak class="px-6 pb-5 text-sm text-slate-400 leading-relaxed border-t border-slate-900 pt-3">
                    Yes. In your terminal settings, you can configure your Black & White single-side rate, double-side (duplex) rate, Color single and duplex rates, Legal paper surcharge, and binding/stapling charges.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden">
                <button @click="activeFaq = (activeFaq === 4 ? null : 4)" 
                        class="w-full text-left px-6 py-4 flex items-center justify-between text-base font-bold text-white">
                    <span>What happens if my internet connection is slow or drops?</span>
                    <span class="text-amber-400 ml-4 font-mono" x-text="activeFaq === 4 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 4" x-cloak class="px-6 pb-5 text-sm text-slate-400 leading-relaxed border-t border-slate-900 pt-3">
                    Aasan Print Terminal is designed offline-first. Jobs already received are cached safely in your local terminal database. Printing and receipt generation continue smoothly.
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden">
                <button @click="activeFaq = (activeFaq === 5 ? null : 5)" 
                        class="w-full text-left px-6 py-4 flex items-center justify-between text-base font-bold text-white">
                    <span>How does the 14-day free trial work?</span>
                    <span class="text-amber-400 ml-4 font-mono" x-text="activeFaq === 5 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 5" x-cloak class="px-6 pb-5 text-sm text-slate-400 leading-relaxed border-t border-slate-900 pt-3">
                    You can download the Windows app and start using it immediately with zero payment and no credit card required. After 14 days, you can choose to continue for just PKR 1,500/month or PKR 15,000/year.
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="bg-slate-950 border border-slate-800 rounded-2xl overflow-hidden">
                <button @click="activeFaq = (activeFaq === 6 ? null : 6)" 
                        class="w-full text-left px-6 py-4 flex items-center justify-between text-base font-bold text-white">
                    <span>Who develops and backs Aasan Print?</span>
                    <span class="text-amber-400 ml-4 font-mono" x-text="activeFaq === 6 ? '−' : '+'"></span>
                </button>
                <div x-show="activeFaq === 6" x-cloak class="px-6 pb-5 text-sm text-slate-400 leading-relaxed border-t border-slate-900 pt-3">
                    Aasan Print is developed, supported, and backed by <strong class="text-white">Nexgen Pakistan</strong> (<a href="https://nexgenpakistan.com" target="_blank" rel="noopener noreferrer" class="text-amber-400 hover:underline">nexgenpakistan.com</a>), an enterprise software and digital services provider based in Quetta, Pakistan. Nexgen Pakistan specializes in POS systems, custom software development, and business automation.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final High-Conversion CTA Banner -->
<section class="py-20 bg-gradient-to-b from-slate-900 to-slate-950 border-t border-slate-800 text-center relative overflow-hidden">
    <div class="absolute inset-0 bg-amber-500/5 blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 space-y-6">
        <h3 class="text-3xl sm:text-5xl font-black text-white tracking-tight leading-tight">
            Ready to Say Goodbye to WhatsApp Print Chaos?
        </h3>
        <p class="text-amber-300 font-urdu text-xl sm:text-2xl">
            آج ہی آسان پرنٹ انسٹال کریں اور اپنی پرنٹ شاپ کو سمارٹ بنائیں!
        </p>
        <p class="text-slate-300 text-base max-w-xl mx-auto">
            Join hundreds of forward-thinking print shops that serve customers in seconds. Download the Windows terminal and get your free counter standee right now.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
            <a href="{{ route('download') }}" 
               class="w-full sm:w-auto bg-gradient-to-r from-amber-500 to-amber-400 hover:from-amber-400 hover:to-amber-300 text-slate-950 font-extrabold px-8 py-4 rounded-2xl shadow-xl shadow-amber-500/25 transition-all transform hover:-translate-y-0.5 text-base">
                Download Desktop App (Free 14 Days)
            </a>
            <button @click="demoModalOpen = true" 
                    class="w-full sm:w-auto bg-slate-900 hover:bg-slate-800 border border-slate-700 text-white font-bold px-8 py-4 rounded-2xl transition-all text-base">
                Request Free Setup Help
            </button>
        </div>
    </div>
</section>
@endsection
