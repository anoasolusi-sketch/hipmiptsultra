<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary SEO Meta Tags -->
    <title>@yield('title', 'HIPMI PT SULTRA - Pengusaha Muda Kampus Sulawesi Tenggara')</title>
    <meta name="title" content="@yield('title', 'HIPMI PT SULTRA - Pengusaha Muda Kampus Sulawesi Tenggara')">
    <meta name="description" content="@yield('meta_description', 'Himpunan Pengusaha Muda Indonesia Perguruan Tinggi (HIPMI PT) Sulawesi Tenggara. Wadah independen pencetak pengusaha mahasiswa berdaya saing nasional.')">
    <meta name="keywords" content="HIPMI, HIPMI PT, SULTRA, Sulawesi Tenggara, Pengusaha Muda, Mahasiswa Pengusaha, Bisnis Kampus, Inkubator Bisnis Sultra, Organisasi Pengusaha">
    <meta name="author" content="HIPMI PT SULTRA">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'HIPMI PT SULTRA - Pengusaha Muda Kampus Sulawesi Tenggara')">
    <meta property="og:description" content="@yield('meta_description', 'Himpunan Pengusaha Muda Indonesia Perguruan Tinggi (HIPMI PT) Sulawesi Tenggara. Wadah independen pencetak pengusaha mahasiswa berdaya saing nasional.')">
    <meta property="og:image" content="{{ asset('images/logohipmi.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'HIPMI PT SULTRA - Pengusaha Muda Kampus Sulawesi Tenggara')">
    <meta property="twitter:description" content="@yield('meta_description', 'Himpunan Pengusaha Muda Indonesia Perguruan Tinggi (HIPMI PT) Sulawesi Tenggara. Wadah independen pencetak pengusaha mahasiswa berdaya saing nasional.')">
    <meta property="twitter:image" content="{{ asset('images/logohipmi.png') }}">
    <link rel="icon" href="{{ asset('images/logohipmi.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: #111827; /* gray-900 */
        }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen selection:bg-hipmiYellow selection:text-hipmiBlue">
    @php $site_setting = \App\Models\Setting::first(); @endphp

    <!-- Solid, Structured Corporate Navbar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center group gap-3">
                        <img src="{{ asset('images/logohipmi.png') }}" alt="Logo HIPMI PT SULTRA" class="h-10 w-auto">
                        <div class="flex flex-col">
                            <span class="font-extrabold text-xl leading-none tracking-tight text-hipmiBlue">HIPMI PT</span>
                            <span class="font-normal text-[0.65rem] leading-none tracking-widest text-gray-500 mt-1">SULTRA</span>
                        </div>
                    </a>
                </div>
                
                <!-- Main Navigation (Desktop) -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-hipmiBlue border-b-2 border-hipmiBlue' : 'text-gray-600 hover:text-hipmiBlue border-b-2 border-transparent hover:border-gray-300' }} py-8 text-sm font-semibold transition-colors">BERANDA</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-hipmiBlue border-b-2 border-hipmiBlue' : 'text-gray-600 hover:text-hipmiBlue border-b-2 border-transparent hover:border-gray-300' }} py-8 text-sm font-semibold transition-colors">TENTANG</a>
                    <a href="{{ route('programs') }}" class="{{ request()->routeIs('programs') ? 'text-hipmiBlue border-b-2 border-hipmiBlue' : 'text-gray-600 hover:text-hipmiBlue border-b-2 border-transparent hover:border-gray-300' }} py-8 text-sm font-semibold transition-colors">PROGRAM</a>
                    <a href="{{ route('incubators') }}" class="{{ request()->routeIs('incubators') ? 'text-hipmiBlue border-b-2 border-hipmiBlue' : 'text-gray-600 hover:text-hipmiBlue border-b-2 border-transparent hover:border-gray-300' }} py-8 text-sm font-semibold transition-colors">INKUBATOR</a>
                    <a href="{{ route('recruitments') }}" class="{{ request()->routeIs('recruitments') ? 'text-hipmiBlue border-b-2 border-hipmiBlue' : 'text-gray-600 hover:text-hipmiBlue border-b-2 border-transparent hover:border-gray-300' }} py-8 text-sm font-semibold transition-colors">REKRUTMEN</a>
                    <a href="{{ route('articles') }}" class="{{ request()->routeIs('articles') ? 'text-hipmiBlue border-b-2 border-hipmiBlue' : 'text-gray-600 hover:text-hipmiBlue border-b-2 border-transparent hover:border-gray-300' }} py-8 text-sm font-semibold transition-colors">ARTIKEL</a>
                </nav>
                
                <!-- CTA, Search & Hamburger -->
                <div class="flex items-center gap-3 md:gap-6">
                    
                    <!-- Search Form (Desktop) -->
                    <form action="{{ route('articles') }}" method="GET" class="hidden md:flex items-center">
                        <div class="relative">
                            <input type="text" name="q" placeholder="Cari Artikel..." value="{{ request('q') }}" class="w-48 pl-8 pr-4 py-1.5 border-b border-gray-300 focus:outline-none focus:border-hipmiBlue text-sm bg-transparent transition-colors">
                            <svg class="w-4 h-4 text-gray-400 absolute left-0 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                    </form>
                
                    <!-- Hamburger Button (Mobile) -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-btn" class="text-gray-600 hover:text-hipmiBlue focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-50 border-t border-gray-200 absolute w-full left-0 shadow-lg">
            
            <!-- Mobile Search -->
            <div class="px-4 pt-4 pb-2 border-b border-gray-200">
                <form action="{{ route('articles') }}" method="GET">
                    <div class="relative">
                        <input type="text" name="q" placeholder="Cari Artikel..." value="{{ request('q') }}" class="w-full pl-10 pr-4 py-2 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-hipmiBlue text-sm">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                </form>
            </div>

            <nav class="flex flex-col px-4 pt-2 pb-6 space-y-1">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-white text-hipmiBlue font-bold' : 'text-gray-600 hover:bg-gray-100 hover:text-hipmiBlue' }} block px-3 py-3 rounded-md text-base font-medium">BERANDA</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'bg-white text-hipmiBlue font-bold' : 'text-gray-600 hover:bg-gray-100 hover:text-hipmiBlue' }} block px-3 py-3 rounded-md text-base font-medium">TENTANG</a>
                <a href="{{ route('programs') }}" class="{{ request()->routeIs('programs') ? 'bg-white text-hipmiBlue font-bold' : 'text-gray-600 hover:bg-gray-100 hover:text-hipmiBlue' }} block px-3 py-3 rounded-md text-base font-medium">PROGRAM</a>
                <a href="{{ route('incubators') }}" class="{{ request()->routeIs('incubators') ? 'bg-white text-hipmiBlue font-bold' : 'text-gray-600 hover:bg-gray-100 hover:text-hipmiBlue' }} block px-3 py-3 rounded-md text-base font-medium">INKUBATOR</a>
                <a href="{{ route('recruitments') }}" class="{{ request()->routeIs('recruitments') ? 'bg-white text-hipmiBlue font-bold' : 'text-gray-600 hover:bg-gray-100 hover:text-hipmiBlue' }} block px-3 py-3 rounded-md text-base font-medium">REKRUTMEN</a>
                <a href="{{ route('articles') }}" class="{{ request()->routeIs('articles') ? 'bg-white text-hipmiBlue font-bold' : 'text-gray-600 hover:bg-gray-100 hover:text-hipmiBlue' }} block px-3 py-3 rounded-md text-base font-medium">ARTIKEL</a>
            </nav>
        </div>
    </header>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Structured Footer -->
    <footer class="bg-gray-50 border-t border-gray-200 pt-16 md:pt-20 pb-10 md:pb-12 mt-auto">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-x-6 gap-y-10 md:gap-12 mb-12 md:mb-16">
                <!-- Branding -->
                <div class="col-span-2 md:col-span-1">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 mb-6">
                        <img src="{{ asset('images/logohipmi.png') }}" alt="Logo HIPMI PT SULTRA" class="h-10 md:h-12 w-auto">
                        <div class="flex flex-col">
                            <span class="font-extrabold text-xl md:text-2xl leading-none tracking-tight text-hipmiBlue">HIPMI PT</span>
                            <span class="font-normal text-[0.65rem] md:text-xs leading-none tracking-widest text-gray-500 mt-1">SULTRA</span>
                        </div>
                    </a>
                    <p class="text-gray-600 text-xs md:text-sm leading-relaxed pr-4 md:pr-0">
                        Himpunan Pengusaha Muda Indonesia Perguruan Tinggi (HIPMI PT) Sulawesi Tenggara. Wadah pencetak pengusaha mahasiswa berdaya saing nasional.
                    </p>
                </div>
                
                <!-- Sitemaps -->
                <div class="col-span-1 md:col-span-1 md:col-start-3">
                    <h4 class="text-[0.65rem] md:text-xs font-bold text-gray-900 tracking-widest uppercase mb-4 md:mb-6">Organisasi</h4>
                    <ul class="space-y-2 md:space-y-3">
                        <li><a href="{{ route('about') }}" class="text-gray-600 hover:text-hipmiBlue text-xs md:text-sm transition-colors">Tentang Kami</a></li>
                        <li><a href="{{ route('programs') }}" class="text-gray-600 hover:text-hipmiBlue text-xs md:text-sm transition-colors">Program Kerja</a></li>
                        <li><a href="{{ route('incubators') }}" class="text-gray-600 hover:text-hipmiBlue text-xs md:text-sm transition-colors">Direktori Inkubator</a></li>
                        <li><a href="{{ route('recruitments') }}" class="text-gray-600 hover:text-hipmiBlue text-xs md:text-sm transition-colors">Peluang Rekrutmen</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div class="col-span-1 md:col-span-1">
                    <h4 class="text-[0.65rem] md:text-xs font-bold text-gray-900 tracking-widest uppercase mb-4 md:mb-6">Kontak</h4>
                    <ul class="space-y-2 md:space-y-3 text-xs md:text-sm text-gray-600">
                        <li class="flex flex-col md:flex-row md:items-start">
                            <span class="font-bold text-gray-900 md:mr-2 md:w-16 mb-1 md:mb-0">Alamat:</span> 
                            <span class="leading-snug">{{ $site_setting->address ?? 'Kendari, SULTRA' }}</span>
                        </li>
                        <li class="flex flex-col md:flex-row md:items-start">
                            <span class="font-bold text-gray-900 md:mr-2 md:w-16 mb-1 md:mb-0">Email:</span> 
                            <a href="mailto:{{ $site_setting->email ?? 'info@hipmiptsultra.org' }}" class="hover:text-hipmiBlue transition-colors break-words">{{ $site_setting->email ?? 'info@hipmiptsultra.org' }}</a>
                        </li>
                        <li class="flex flex-col md:flex-row md:items-start">
                            <span class="font-bold text-gray-900 md:mr-2 md:w-16 mb-1 md:mb-0">Telepon:</span> 
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $site_setting->phone ?? '+62 812-3456') }}" class="hover:text-hipmiBlue transition-colors">{{ $site_setting->phone ?? '+62 812-3456' }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright & Socials -->
            <div class="pt-6 md:pt-8 border-t border-gray-200 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-[0.65rem] md:text-xs text-gray-500 uppercase tracking-widest text-center md:text-left">
                    &copy; {{ date('Y') }} HIPMI PT SULTRA. Hak Cipta Dilindungi.<br>
                    <span class="mt-1 block normal-case font-medium text-gray-400">Built by <a href="https://anoadev.tech" target="_blank" class="text-hipmiBlue hover:text-blue-900 transition-colors">anoadev</a></span>
                </p>
                <div class="flex space-x-4">
                    @if(isset($site_setting->instagram) && $site_setting->instagram)
                    <a href="{{ $site_setting->instagram }}" target="_blank" class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 hover:bg-hipmiBlue hover:text-white transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.20 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                    @endif
                    @if(isset($site_setting->facebook) && $site_setting->facebook)
                    <a href="{{ $site_setting->facebook }}" target="_blank" class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 hover:bg-hipmiBlue hover:text-white transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.597 0 0 .597 0 1.325v21.351C0 23.403.597 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.323-.597 1.323-1.325V1.325C24 .597 23.403 0 22.675 0z"/></svg>
                    </a>
                    @endif
                    @if(isset($site_setting->youtube) && $site_setting->youtube)
                    <a href="{{ $site_setting->youtube }}" target="_blank" class="w-8 h-8 flex items-center justify-center bg-gray-200 text-gray-600 hover:bg-hipmiBlue hover:text-white transition-colors">
                        <span class="sr-only">YouTube</span>
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
