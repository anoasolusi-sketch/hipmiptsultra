@extends('layouts.main')

@section('title', 'Seluruh Agenda')

@section('content')
<!-- Header Section -->
<div class="bg-hipmiBlue pt-32 pb-20 border-b-4 border-hipmiYellow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-4 drop-shadow-md">
            Agenda Kegiatan
        </h1>
        <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto font-light">
            Ikuti dan hadiri seluruh rangkaian kegiatan HIPMI PT Sulawesi Tenggara
        </p>
    </div>
</div>

<!-- Agenda List Section -->
<div class="bg-gray-50 py-16">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($agendas->isEmpty())
            <div class="text-center py-20 bg-white rounded-2xl shadow-sm border border-gray-100">
                <div class="w-20 h-20 text-gray-300 mx-auto mb-6">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Agenda Terjadwal</h3>
                <p class="text-gray-500">Saat ini belum ada agenda kegiatan yang akan datang.</p>
            </div>
        @else
            <div class="space-y-6">
                @foreach($agendas as $agenda)
                    <div class="flex flex-col md:flex-row gap-6 p-6 lg:p-8 rounded-2xl border border-gray-100 bg-white shadow-sm hover:shadow-md hover:border-gray-200 transition-all group relative overflow-hidden">
                        
                        <!-- Left Date Block -->
                        <div class="flex flex-col md:w-40 flex-shrink-0 text-center md:text-left border-b md:border-b-0 md:border-r border-gray-100 pb-6 md:pb-0 md:pr-6 justify-center">
                            <span class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-1">{{ \Carbon\Carbon::parse($agenda->date)->translatedFormat('F Y') }}</span>
                            <span class="text-4xl font-extrabold text-hipmiBlue">{{ \Carbon\Carbon::parse($agenda->date)->format('d') }}</span>
                            <span class="text-sm font-semibold text-orange-500 mt-2">{{ $agenda->time ? $agenda->time : 'Seharian' }}</span>
                        </div>
                        
                        <!-- Right Content Block -->
                        <div class="flex-grow">
                            <h4 class="font-bold text-2xl text-gray-900 group-hover:text-hipmiBlue transition-colors mb-4">
                                {{ $agenda->title }}
                            </h4>
                            
                            @if($agenda->location)
                            <div class="flex items-center text-sm text-gray-600 mb-4 bg-gray-50 inline-flex px-3 py-1.5 rounded-lg border border-gray-100">
                                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span>{{ $agenda->location }}</span>
                            </div>
                            @endif
                            
                            @if($agenda->description)
                            <p class="text-gray-600 leading-relaxed">
                                {{ $agenda->description }}
                            </p>
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $agendas->links() }}
            </div>
        @endif
        
    </div>
</div>
@endsection
