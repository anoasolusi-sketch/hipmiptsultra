@extends('layouts.main')

@section('title', 'Rekrutmen - HIPMI PT SULTRA')

@section('content')
<div class="bg-hipmiYellow py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-hipmiBlue">
        <h1 class="text-4xl font-extrabold mb-4">Rekrutmen Anggota</h1>
        <p class="text-xl text-gray-800">Bergabunglah bersama kami dan wujudkan potensimu.</p>
    </div>
</div>

<div class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-6">
            @forelse($recruitments as $recruitment)
            <div class="bg-white rounded-xl p-8 border border-blue-100 shadow-sm">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-bold text-hipmiBlue mb-2">{{ $recruitment->position }}</h2>
                        <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full font-semibold mb-4">Pendaftaran Buka</span>
                    </div>
                    <button class="bg-hipmiBlue text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-800 transition">Daftar Sekarang</button>
                </div>
                <div class="prose max-w-none text-gray-600 mt-4">
                    {!! $recruitment->description !!}
                </div>
            </div>
            @empty
            <div class="text-center py-16 bg-white rounded-xl border border-gray-100 shadow-sm">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-2 text-lg font-medium text-gray-900">Belum Ada Rekrutmen</h3>
                <p class="mt-1 text-sm text-gray-500">Saat ini tidak ada pembukaan anggota atau posisi kepanitiaan yang aktif.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
