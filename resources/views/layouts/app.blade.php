<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Aasan Print by Nexgen Pakistan - Smart QR Printing & POS Terminal for Print Shops')</title>
    <meta name="description" content="@yield('meta_description', 'Say goodbye to WhatsApp chaos. Customers scan a counter QR code, upload documents, and your desktop terminal chimes and prints in 1 click. Developed by Nexgen Pakistan for Photostat, Copy & Digital Printing shops.')">
    <meta name="keywords" content="print shop software, photostat pos, print queue software, qr code printing, pakistan print shop erp, aasan print, nexgen pakistan, nexgenpakistan.com, aasaanprint terminal">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Aasan Print by Nexgen Pakistan - Smart QR Printing & POS Terminal')">
    <meta property="og:description" content="@yield('meta_description', 'No more WhatsApp chaos. Customers scan a counter QR code, upload documents, and your desktop terminal chimes and prints in 1 click.')">
    <meta property="og:site_name" content="Aasan Print - Nexgen Pakistan">
    <meta property="og:image" content="{{ asset('images/nexgen-logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        .font-urdu {
            font-family: 'Noto Nastaliq Urdu', serif;
            line-height: 2.2;
        }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen flex flex-col selection:bg-amber-500 selection:text-slate-950"
      x-data="{ 
          demoModalOpen: false, 
          mobileMenuOpen: false,
          activeCity: 'Karachi',
          playBell() {
              if (window.playAasanChime) {
                  window.playAasanChime();
              }
          }
      }">

    <!-- Flash Notification Toast -->
    @if(session('success'))
        <div x-data="{ show: true }" 
             x-show="show" 
             x-init="setTimeout(() => show = false, 7000)"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-2"
             class="fixed bottom-6 right-6 z-50 max-w-md bg-emerald-900/90 border border-emerald-500/40 text-white px-5 py-4 rounded-2xl shadow-2xl backdrop-blur-md flex items-start gap-3">
            <div class="w-8 h-8 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div class="flex-1 text-sm">
                <div class="font-bold text-emerald-300">Request Sent!</div>
                <div class="text-slate-200 text-xs mt-0.5">{{ session('success') }}</div>
            </div>
            <button @click="show = false" class="text-slate-400 hover:text-white text-xs ml-2">✕</button>
        </div>
    @endif

    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 text-slate-950 px-4 py-2 text-xs font-semibold text-center tracking-wide flex items-center justify-center gap-2 relative z-40">
        <span class="inline-flex items-center px-2 py-0.5 rounded-full bg-slate-950 text-amber-400 text-[10px] font-bold uppercase tracking-wider">A Product of Nexgen Pakistan</span>
        <span>Aasan Print Desktop Terminal 2.4 Released with Silent 1-Click Printing & Standee Generator!</span>
        <a href="{{ route('download') }}" class="underline font-bold hover:text-white transition-colors ml-1 hidden sm:inline-flex items-center gap-1">
            Download Free &rarr;
        </a>
    </div>

    <!-- Navigation Header -->
    @include('components.navbar')

    <!-- Main Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Lead / Demo Modal -->
    @include('components.lead-modal')

    <!-- Floating WhatsApp Action Button -->
    <aside aria-label="Support chat" class="fixed bottom-6 left-6 z-40 group">
        <a href="https://wa.me/923163560803?text=Hello%20Nexgen%20Pakistan!%20I%20want%20a%20free%20demo%20of%20Aasan%20Print%20for%20my%20print%20shop." 
           target="_blank" 
           rel="noopener noreferrer"
           class="flex items-center gap-2.5 bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold px-4 py-3 rounded-full shadow-lg shadow-emerald-500/25 transition-all transform hover:-translate-y-1 hover:scale-105 active:scale-95">
            <svg class="w-6 h-6 text-slate-950 fill-current" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.2.662.591 1.221.774 1.394.861.174.086.275.072.376-.044.102-.115.434-.506.549-.68.116-.173.232-.144.39-.086.159.058 1.011.477 1.184.564.173.087.289.13.332.202.043.073.043.419-.101.824zM12.031 2C6.49 2 2 6.49 2 12.031c0 1.808.484 3.504 1.325 4.974L2 22l5.178-1.314A9.972 9.972 0 0 0 12.031 22C17.571 22 22 17.571 22 12.031 22 6.49 17.571 2 12.031 2z"/>
            </svg>
            <span class="text-sm tracking-tight hidden sm:inline">WhatsApp: +92 316 3560803</span>
        </a>
    </aside>

</body>
</html>
