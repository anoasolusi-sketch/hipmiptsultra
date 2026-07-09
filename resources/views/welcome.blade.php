@extends('layouts.main')

@section('title', 'Beranda - HIPMI PT SULTRA')

@section('content')
<!-- Editorial Hero Section -->
<div class="relative bg-white border-b border-gray-200 flex flex-col md:flex-row">
    
    <!-- Left Content Box -->
    <div class="w-full md:w-1/2 flex items-center p-8 md:p-16 lg:p-24 xl:p-32">
        <div class="max-w-xl">
            <p class="text-sm font-bold text-hipmiBlue tracking-widest uppercase mb-6 flex items-center">
                <span class="w-8 h-px bg-hipmiBlue mr-4"></span>
                HIPMI Perguruan Tinggi
            </p>
            <h1 class="text-5xl lg:text-7xl font-extrabold text-gray-900 leading-[1.05] tracking-tight mb-8">
                Dari Kampus,<br>Mulai Berbisnis.
            </h1>
            <p class="text-lg text-gray-600 leading-relaxed mb-10 border-l-4 border-hipmiYellow pl-6 py-1">
                Tempat ngumpulnya mahasiswa Sulawesi Tenggara yang sedang merintis usaha. Dapatkan relasi, mentor, dan wawasan bisnis untuk membesarkan usahamu sejak di bangku kuliah.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('incubators') }}" class="inline-flex justify-center items-center px-8 py-4 bg-hipmiBlue text-white text-sm font-bold tracking-widest uppercase hover:bg-blue-900 transition-colors">
                    Mulai Inisiatif
                </a>
                <a href="{{ route('programs') }}" class="inline-flex justify-center items-center px-8 py-4 bg-white border-2 border-gray-900 text-gray-900 text-sm font-bold tracking-widest uppercase hover:bg-gray-900 hover:text-white transition-colors">
                    Jelajahi Program
                </a>
            </div>
        </div>
    </div>
    
    <!-- Right Image Box -->
    <div class="w-full md:w-1/2 min-h-[60vh] md:min-h-screen relative bg-gray-100 border-l border-gray-200">
        <!-- CSS Filters for clean color grading (no glowing overlays, just solid contrast) -->
        <img src="{{ asset('images/herohipmi.jpg') }}" alt="HIPMI PT SULTRA" class="absolute inset-0 w-full h-full object-cover filter contrast-[1.1] saturate-[1.1] brightness-[0.9]">
        <div class="absolute inset-0 bg-hipmiBlue mix-blend-multiply opacity-20"></div>
    </div>
</div>

<!-- Editorial About Section -->
@if($about)
<div class="bg-gray-50 border-b border-gray-200">
    <div class="max-w-screen-2xl mx-auto">
        <div class="flex flex-col lg:flex-row">
            
            <!-- Image Area -->
            <div class="w-full lg:w-1/2 min-h-[40vh] lg:min-h-0 relative bg-gray-200 lg:border-r border-gray-200">
                <img src="{{ $about->image ? (Str::startsWith($about->image, 'images/') ? asset($about->image) : Storage::url($about->image)) : asset('images/tentang.jpg') }}" alt="Tentang HIPMI PT SULTRA" class="absolute inset-0 w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
            </div>
            
            <!-- Content Area -->
            <div class="w-full lg:w-1/2 p-8 md:p-16 lg:p-24 flex items-center">
                <div class="max-w-xl">
                    <p class="text-sm font-bold text-gray-400 tracking-widest uppercase mb-4">Profil Organisasi</p>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-8">
                        {{ $about->title ?? 'Tentang Kami' }}
                    </h2>
                    <div class="text-lg text-gray-600 leading-relaxed mb-10 border-l-2 border-hipmiBlue pl-6">
                        {!! nl2br(e(Str::limit($about->content ?? '', 300))) !!}
                    </div>
                    <a href="{{ route('about') }}" class="inline-flex items-center text-hipmiBlue font-bold uppercase tracking-widest text-sm border-b-2 border-hipmiBlue pb-1 hover:text-blue-900 hover:border-blue-900 transition-all group">
                        Selengkapnya <span class="ml-2 transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endif

<!-- Structured Editorial Grid Section -->
<div class="bg-white border-b border-gray-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 divide-y lg:divide-y-0 lg:divide-x divide-gray-200">
            
            <!-- Program Column -->
            <div class="p-8 md:p-16">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Program<br>Eksklusif.</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Pengembangan kapasitas bisnis melalui modul pelatihan, mentoring dari pakar, hingga eksekusi ide di lapangan.
                </p>
                <a href="{{ route('programs') }}" class="text-hipmiBlue font-bold uppercase tracking-widest text-sm flex items-center hover:text-blue-900 transition-colors">
                    Lihat Program <span class="ml-2">&rarr;</span>
                </a>
            </div>
            
            <!-- Incubator Column -->
            <div class="p-8 md:p-16">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Inkubator<br>Bisnis.</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Direktori lengkap startup dan UMKM binaan mahasiswa. Tempat di mana gagasan divalidasi dan didanai.
                </p>
                <a href="{{ route('incubators') }}" class="text-hipmiYellow font-bold uppercase tracking-widest text-sm flex items-center hover:text-yellow-600 transition-colors">
                    Kunjungi Direktori <span class="ml-2">&rarr;</span>
                </a>
            </div>
            
            <!-- Recruitment Column -->
            <div class="p-8 md:p-16 bg-gray-50">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6">Rekrutmen<br>Anggota.</h2>
                <p class="text-gray-600 mb-8 leading-relaxed">
                    Buka jaringan yang tak ternilai harganya. Saatnya melangkah dari kelas perkuliahan ke realita bisnis sesungguhnya.
                </p>
                <a href="{{ route('recruitments') }}" class="inline-block px-6 py-3 bg-hipmiBlue text-white font-bold uppercase tracking-widest text-xs hover:bg-blue-900 transition-colors">
                    Pendaftaran Dibuka
                </a>
            </div>
            
        </div>
    </div>
</div>

<!-- Editorial Articles Section -->
<div class="bg-white py-20 md:py-32">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row justify-between items-end border-b-2 border-gray-900 pb-8 mb-12">
            <div>
                <p class="text-sm font-bold text-gray-500 tracking-widest uppercase mb-2">Publikasi Publik</p>
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">Kabar & Jurnal</h2>
            </div>
            <a href="{{ route('articles') }}" class="mt-4 md:mt-0 text-gray-900 font-bold uppercase tracking-widest text-sm border-b border-gray-900 pb-1 hover:text-hipmiBlue hover:border-hipmiBlue transition-colors">
                Seluruh Artikel
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse($articles as $article)
            <div class="group border border-gray-200 p-6 flex flex-col h-full bg-white hover:bg-gray-50 transition-colors">
                <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">{{ $article->created_at->format('d M Y') }}</p>
                
                @if($article->thumbnail)
                <div class="aspect-video w-full overflow-hidden mb-6 bg-gray-100 border border-gray-100">
                    <img src="{{ Storage::url($article->thumbnail) }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="{{ $article->title }}">
                </div>
                @endif
                
                <h3 class="text-2xl font-bold text-gray-900 leading-snug mb-4 group-hover:text-hipmiBlue transition-colors">{{ $article->title }}</h3>
                <p class="text-gray-600 leading-relaxed flex-grow">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <span class="text-xs font-bold text-hipmiBlue uppercase tracking-widest">Baca Laporan</span>
                </div>
            </div>
            @empty
            <div class="col-span-3 py-16 text-center border border-gray-200 bg-gray-50">
                <p class="text-gray-500 text-lg">Arsip jurnal sedang kosong.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Editorial Gallery Section -->
<div class="bg-gray-50 py-20 md:py-32 border-t border-gray-200">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row justify-between items-end border-b-2 border-gray-900 pb-8 mb-12">
            <div>
                <p class="text-sm font-bold text-gray-500 tracking-widest uppercase mb-2">Dokumentasi</p>
                <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">Galeri Kegiatan</h2>
            </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @forelse($galleries as $gallery)
            <div class="group relative aspect-square bg-gray-200 overflow-hidden border border-gray-200">
                <img src="{{ Str::startsWith($gallery->image, 'images/') ? asset($gallery->image) : Storage::url($gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500 transform group-hover:scale-105">
                @if($gallery->title)
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                    <p class="text-white font-bold text-sm leading-snug">{{ $gallery->title }}</p>
                </div>
                @endif
            </div>
            @empty
            <div class="col-span-2 md:col-span-4 py-16 text-center border border-gray-200 bg-white">
                <p class="text-gray-500 text-lg">Galeri foto belum tersedia.</p>
            </div>
            @endforelse
        </div>
        
    </div>
</div>
@endsection
