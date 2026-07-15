@extends('layouts.main')

@section('title', $article->title . ' - HIPMI PT SULTRA')
@section('meta_description', Str::limit(strip_tags($article->content), 150))

@section('content')
<div class="py-12 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back button -->
        <a href="{{ route('articles') }}" class="inline-flex items-center text-hipmiBlue font-medium hover:text-blue-900 transition-colors mb-8">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Kembali ke Artikel
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
            <!-- Article Content (Left) -->
            <div class="lg:col-span-2">
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

            <!-- Sidebar (Right) -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 md:p-8 sticky top-28">
                    <h3 class="text-xl font-extrabold text-gray-900 mb-6 border-b border-gray-100 pb-4">Artikel Terbaru</h3>
                    <div class="space-y-6">
                        @forelse($latestArticles as $latest)
                        <div class="flex gap-4 group relative">
                            <div class="w-20 h-20 flex-shrink-0 bg-gray-100 rounded-lg overflow-hidden border border-gray-100">
                                @if($latest->cover_image)
                                    <img src="{{ $latest->cover_image }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-300" alt="{{ $latest->title }}">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-[0.6rem] text-gray-400">No Image</div>
                                @endif
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="text-[0.65rem] text-hipmiBlue font-bold uppercase tracking-widest mb-1">{{ $latest->created_at->format('d M Y') }}</p>
                                <h4 class="font-bold text-gray-900 text-sm leading-snug group-hover:text-hipmiBlue transition-colors line-clamp-3">
                                    <a href="{{ route('articles.show', $latest->id) }}" class="after:absolute after:inset-0">{{ $latest->title }}</a>
                                </h4>
                            </div>
                        </div>
                        @empty
                        <p class="text-gray-500 text-sm">Belum ada artikel lain.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
