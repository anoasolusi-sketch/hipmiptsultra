@extends('layouts.main')

@section('title', 'Inkubator Bisnis - HIPMI PT SULTRA')

@section('content')
<div class="bg-hipmiBlue py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="text-4xl font-extrabold mb-4">Direktori Inkubator</h1>
        <p class="text-xl text-blue-200">Daftar bisnis binaan dari mahasiswa Sulawesi Tenggara.</p>
    </div>
</div>

<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($incubators as $incubator)
            <div class="border border-gray-200 rounded-xl p-6 hover:shadow-lg transition">
                <div class="flex items-center space-x-4 mb-4">
                    <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center overflow-hidden flex-shrink-0">
                        @if($incubator->logo)
                            <img src="{{ Storage::url($incubator->logo) }}" class="w-full h-full object-cover">
                        @else
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        @endif
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">{{ $incubator->name }}</h3>
                        <span class="inline-block bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded font-semibold mt-1">{{ $incubator->category ?? 'Umum' }}</span>
                    </div>
                </div>
                <p class="text-gray-600 line-clamp-4">{{ $incubator->description }}</p>
                <div class="mt-4 pt-4 border-t border-gray-100 flex justify-between items-center">
                    <span class="text-sm font-medium {{ $incubator->status === 'active' ? 'text-green-600' : 'text-gray-500' }}">
                        {{ ucfirst($incubator->status) }}
                    </span>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500 py-12">
                <p class="text-xl">Belum ada bisnis yang terdaftar di inkubator.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
