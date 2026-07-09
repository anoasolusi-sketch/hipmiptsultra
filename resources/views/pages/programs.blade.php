@extends('layouts.main')

@section('title', 'Program Kerja - HIPMI PT SULTRA')

@section('content')
<div class="bg-hipmiBlue py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="text-4xl font-extrabold mb-4">Program Kerja</h1>
        <p class="text-xl text-blue-200">Kumpulan program unggulan untuk memajukan pengusaha mahasiswa.</p>
    </div>
</div>

<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($programs as $program)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                <div class="h-56 bg-gray-200 flex items-center justify-center">
                    @if($program->image)
                        <img src="{{ Storage::url($program->image) }}" class="object-cover h-full w-full" alt="{{ $program->title }}">
                    @else
                        <span class="text-gray-400">Tanpa Gambar</span>
                    @endif
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $program->title }}</h3>
                    <p class="text-gray-600">{{ $program->description }}</p>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500 py-12">
                <p class="text-xl">Saat ini belum ada program kerja yang dipublikasikan.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
