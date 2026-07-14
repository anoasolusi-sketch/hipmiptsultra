@extends('layouts.main')

@section('title', 'Artikel & Berita - HIPMI PT SULTRA')

@section('content')
<div class="bg-hipmiBlue py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="text-4xl font-extrabold mb-4">Artikel & Berita</h1>
        <p class="text-xl text-blue-200">Informasi terbaru, tips bisnis, dan kegiatan HIPMI PT SULTRA.</p>
    </div>
</div>

<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
            @forelse($articles as $article)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    @if($article->cover_image)
                        <img src="{{ $article->cover_image }}" class="object-cover h-full w-full" alt="{{ $article->title }}">
                    @else
                        <span class="text-gray-400">Tanpa Gambar</span>
                    @endif
                </div>
                <div class="p-6">
                    <p class="text-sm text-hipmiBlue font-semibold mb-2">{{ $article->created_at->format('d M Y') }}</p>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 leading-snug hover:text-hipmiBlue transition">
                        <a href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                    </h3>
                    <p class="text-gray-600 line-clamp-3 mb-4">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                    <a href="{{ route('articles.show', $article->id) }}" class="text-hipmiYellow font-semibold hover:text-yellow-600">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500 py-12">
                <p class="text-xl">Belum ada artikel yang dipublikasikan.</p>
            </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            {{ $articles->links() }}
        </div>
    </div>
</div>
@endsection
