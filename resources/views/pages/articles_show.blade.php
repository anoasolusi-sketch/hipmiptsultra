@extends('layouts.main')

@section('title', $article->title . ' - HIPMI PT SULTRA')
@section('meta_description', Str::limit(strip_tags($article->content), 150))

@section('content')
<div class="py-12 md:py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back button -->
        <a href="{{ route('articles') }}" class="inline-flex items-center text-hipmiBlue font-medium hover:text-blue-900 transition-colors mb-8">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Artikel
        </a>

        <!-- Article Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            @if($article->thumbnail)
                <div class="w-full h-64 md:h-96">
                    <img src="{{ Storage::url($article->thumbnail) }}" class="w-full h-full object-cover" alt="{{ $article->title }}">
                </div>
            @endif
            
            <div class="p-8 md:p-12">
                <div class="flex items-center text-sm text-gray-500 mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    {{ $article->created_at->format('d M Y') }}
                </div>
                
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-8 leading-tight">{{ $article->title }}</h1>
                
                <div class="prose prose-lg prose-blue max-w-none text-gray-700 leading-relaxed">
                    {!! $article->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
