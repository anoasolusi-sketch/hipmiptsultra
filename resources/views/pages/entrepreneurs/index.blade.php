@extends('layouts.main')

@section('title', 'Direktori Pengusaha Mahasiswa - HIPMI PT SULTRA')

@section('content')
<div class="bg-hipmiYellow py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-hipmiBlue">
        <h1 class="text-4xl font-extrabold mb-4">Direktori Pengusaha Mahasiswa</h1>
        <p class="text-xl text-gray-800">Daftar mahasiswa pengusaha inspiratif dari seluruh kampus di Sulawesi Tenggara.</p>
        <div class="mt-8">
            <a href="{{ route('pengusaha.create') }}" class="inline-block bg-hipmiBlue text-white font-bold py-3 px-8 rounded-lg shadow hover:bg-blue-900 transition-colors">
                Daftarkan Bisnis Anda
            </a>
        </div>
    </div>
</div>

<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($entrepreneurs as $entrepreneur)
            <div class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition">
                <div class="h-48 bg-gray-200 flex items-center justify-center">
                    @if($entrepreneur->image)
                        <img src="{{ Storage::url($entrepreneur->image) }}" class="object-cover h-full w-full" alt="{{ $entrepreneur->business_name }}">
                    @else
                        <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    @endif
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $entrepreneur->business_name }}</h3>
                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded font-semibold mb-4">{{ $entrepreneur->business_sector }}</span>
                    
                    <div class="text-sm text-gray-600 mb-2">
                        <strong>Pemilik:</strong> {{ $entrepreneur->name }}
                    </div>
                    <div class="text-sm text-gray-600 mb-4">
                        <strong>Kampus:</strong> {{ $entrepreneur->campus }}
                    </div>
                    
                    <div class="border-t border-gray-100 pt-4 mt-2">
                        <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/[^0-9]/', '', $entrepreneur->phone)) }}" target="_blank" class="flex items-center justify-center text-green-600 hover:text-green-700 font-semibold transition-colors">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            Hubungi via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500 py-12">
                <p class="text-xl">Belum ada data pengusaha mahasiswa.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
