@extends('layouts.main')

@section('title', 'Tentang Kami - HIPMI PT SULTRA')

@section('content')
<div class="bg-gray-50 border-b border-gray-200 pt-16 pb-16 md:pt-24 md:pb-24">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-sm font-bold text-gray-400 tracking-widest uppercase mb-4">Profil Organisasi</p>
        <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 tracking-tight">{{ $about->title ?? 'Tentang Kami' }}</h1>
    </div>
</div>

<div class="bg-white py-20 border-b border-gray-200">
    <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
        
        @if($about && $about->image)
        <div class="mb-16 aspect-video bg-gray-100 border border-gray-200 overflow-hidden">
            <img src="{{ Str::startsWith($about->image, 'images/') ? asset($about->image) : Storage::url($about->image) }}" alt="Foto Tentang HIPMI PT SULTRA" class="w-full h-full object-cover">
        </div>
        @endif

        <div class="prose prose-lg prose-blue max-w-none mb-20 text-gray-700 leading-relaxed">
            {!! $about ? $about->content : 'Konten tentang kami belum tersedia.' !!}
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 border-t-4 border-gray-900 pt-12">
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6 flex items-center">
                    <span class="w-6 h-6 bg-hipmiBlue mr-4 block"></span> Visi
                </h2>
                <div class="prose prose-lg prose-blue text-gray-600 leading-relaxed text-lg max-w-none">
                    {!! $about ? $about->vision : 'Visi belum ditentukan.' !!}
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-gray-900 mb-6 flex items-center">
                    <span class="w-6 h-6 bg-hipmiYellow mr-4 block"></span> Misi
                </h2>
                <div class="prose prose-lg prose-yellow text-gray-600 leading-relaxed text-lg max-w-none">
                    {!! $about ? $about->mission : 'Misi belum ditentukan.' !!}
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
