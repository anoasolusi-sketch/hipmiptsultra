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
                        {{ Str::limit(strip_tags($about->content ?? ''), 300) }}
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
                
                @if($article->cover_image)
                <div class="aspect-video w-full overflow-hidden mb-6 bg-gray-100 border border-gray-100">
                    <img src="{{ $article->cover_image }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="{{ $article->title }}">
                </div>
                @endif
                
                <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-hipmiBlue transition-colors">
                    <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                </h3>
                <p class="text-gray-600 leading-relaxed flex-grow">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <a href="{{ route('articles.show', $article->id) }}" class="inline-flex items-center text-hipmiBlue font-bold uppercase tracking-widest text-xs hover:text-blue-900 group">
                        Baca Selengkapnya <span class="ml-1 transform group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </a>
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

<!-- Agenda Calendar Section -->
<div class="bg-gray-50 py-20 md:py-32 border-t border-gray-200" id="agenda">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row justify-between items-end border-b border-gray-300 pb-6 mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#001736] tracking-tight">Kalender Event Terdekat</h2>
            <a href="#" class="mt-4 md:mt-0 text-orange-500 font-bold uppercase tracking-widest text-sm flex items-center hover:text-orange-600 transition-colors">
                Seluruh Agenda <span class="ml-2">&rarr;</span>
            </a>
        </div>

        <div x-data="calendarData()" class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            
            <!-- Calendar Widget (Left) -->
            <div class="lg:col-span-1 bg-white rounded-xl shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] p-8 border border-gray-100">
                
                <!-- Month Navigation -->
                <div class="flex justify-between items-center mb-8 px-2">
                    <button @click="prevMonth()" class="text-gray-400 hover:text-gray-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <h3 class="text-lg font-bold text-[#001736] tracking-widest uppercase" x-text="monthName + ' ' + year"></h3>
                    <button @click="nextMonth()" class="text-gray-400 hover:text-gray-900 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
                
                <!-- Days Header -->
                <div class="grid grid-cols-7 gap-1 mb-4">
                    <template x-for="day in ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min']">
                        <div class="text-center font-bold text-xs uppercase tracking-widest text-[#7C8B9D]" x-text="day"></div>
                    </template>
                </div>
                
                <!-- Dates Grid -->
                <div class="grid grid-cols-7 gap-y-4 gap-x-1 mb-8">
                    <template x-for="blank in blankDays">
                        <div class="aspect-square"></div>
                    </template>
                    <template x-for="date in daysInMonth">
                        <div class="relative flex justify-center items-center">
                            <button 
                                @click="selectDate(date)"
                                class="w-10 h-10 flex items-center justify-center rounded-xl transition-all duration-200 font-medium text-sm"
                                :class="{
                                    'border-2 border-orange-400 text-gray-900 bg-white font-bold': isSelected(date),
                                    'border-2 border-orange-400 text-gray-900 bg-white': isToday(date) && !isSelected(date),
                                    'text-[#3B4C68] hover:bg-gray-100 border-2 border-transparent': !isSelected(date) && !isToday(date)
                                }"
                            >
                                <span x-text="date"></span>
                            </button>
                            <!-- Fire Icon Indicator -->
                            <div x-show="hasEvent(date)" class="absolute -top-1 -right-0.5 text-[0.65rem]" title="Ada Agenda">
                                🔥
                            </div>
                        </div>
                    </template>
                </div>
                
                <!-- Legend -->
                <div class="flex items-center justify-center gap-6 text-xs font-medium text-gray-500 pt-6 border-t border-gray-100">
                    <div class="flex items-center gap-2">
                        <span>🔥</span> Ada Event
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-4 h-4 rounded-full border-2 border-orange-400"></div> Hari Ini
                    </div>
                </div>
            </div>

            <!-- Event Details (Right) -->
            <div class="lg:col-span-2">
                <!-- Empty State -->
                <div x-show="!selectedDate || selectedEvents.length === 0" class="border-2 border-dashed border-gray-300 rounded-xl bg-white p-12 min-h-[420px] flex flex-col items-center justify-center text-center transition-all">
                    <div class="w-16 h-16 text-gray-300 mb-6">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-xl font-extrabold text-gray-900 mb-3">Silakan Pilih Tanggal</h4>
                    <p class="text-gray-500">Pilih tanggal di kalender untuk melihat daftar agenda.</p>
                </div>

                <!-- Event List State -->
                <div x-show="selectedDate && selectedEvents.length > 0" class="bg-white border border-gray-200 shadow-sm rounded-xl p-8 lg:p-12 min-h-[420px]" style="display: none;">
                    <div class="flex items-center gap-3 mb-8 pb-6 border-b border-gray-100">
                        <span class="text-2xl">🔥</span>
                        <h4 class="text-2xl font-extrabold text-[#001736]">
                            Agenda <span x-text="selectedDateText" class="text-orange-500"></span>
                        </h4>
                    </div>
                    
                    <div class="space-y-6">
                        <template x-for="event in selectedEvents" :key="event.id">
                            <div class="flex flex-col md:flex-row gap-6 p-6 rounded-xl border border-gray-100 bg-gray-50 hover:bg-white hover:shadow-md hover:border-gray-200 transition-all group">
                                <div class="flex flex-col min-w-[120px]">
                                    <span class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">WAKTU</span>
                                    <span class="text-lg font-extrabold text-orange-500" x-text="event.time ? event.time : 'Seharian'"></span>
                                </div>
                                <div class="flex-grow">
                                    <h5 class="font-bold text-xl text-gray-900 group-hover:text-hipmiBlue transition-colors mb-3" x-text="event.title"></h5>
                                    <div class="flex items-center text-sm text-gray-600 mb-4" x-show="event.location">
                                        <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                        <span x-text="event.location"></span>
                                    </div>
                                    <p class="text-gray-600 leading-relaxed text-sm" x-text="event.description"></p>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('calendarData', () => ({
        month: new Date().getMonth(),
        year: new Date().getFullYear(),
        today: new Date(),
        selectedDate: null,
        events: @json($agendas),
        
        get monthName() {
            const months = ['JANUARY', 'FEBRUARY', 'MARCH', 'APRIL', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEPTEMBER', 'OCTOBER', 'NOVEMBER', 'DECEMBER'];
            return months[this.month];
        },
        
        get daysInMonth() {
            return new Date(this.year, this.month + 1, 0).getDate();
        },
        
        get blankDays() {
            let dayOfWeek = new Date(this.year, this.month, 1).getDay();
            return dayOfWeek === 0 ? 6 : dayOfWeek - 1;
        },
        
        get selectedDateText() {
            if(!this.selectedDate) return '';
            const monthsIndo = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            return `${this.selectedDate} ${monthsIndo[this.month]} ${this.year}`;
        },
        
        get selectedEvents() {
            if(!this.selectedDate) return [];
            const selectedDateString = `${this.year}-${String(this.month + 1).padStart(2, '0')}-${String(this.selectedDate).padStart(2, '0')}`;
            return this.events.filter(e => e.date.substring(0, 10) === selectedDateString);
        },
        
        selectDate(date) {
            this.selectedDate = date;
        },
        
        isSelected(date) {
            return this.selectedDate === date;
        },
        
        isToday(date) {
            return this.today.getDate() === date && this.today.getMonth() === this.month && this.today.getFullYear() === this.year;
        },
        
        hasEvent(date) {
            const dateString = `${this.year}-${String(this.month + 1).padStart(2, '0')}-${String(date).padStart(2, '0')}`;
            return this.events.some(e => e.date.substring(0, 10) === dateString);
        },
        
        nextMonth() {
            if (this.month === 11) {
                this.month = 0;
                this.year++;
            } else {
                this.month++;
            }
            this.selectedDate = null;
        },
        
        prevMonth() {
            if (this.month === 0) {
                this.month = 11;
                this.year--;
            } else {
                this.month--;
            }
            this.selectedDate = null;
        }
    }));
});
</script>
@endsection
