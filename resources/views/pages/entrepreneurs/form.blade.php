@extends('layouts.main')

@section('title', 'Pendaftaran Pengusaha Mahasiswa - HIPMI PT SULTRA')

@section('content')
<div class="bg-hipmiBlue py-16">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="text-4xl font-extrabold mb-4">Database Mahasiswa Pengusaha</h1>
        <p class="text-xl text-blue-200">Formulir pendaftaran untuk masuk ke dalam direktori pengusaha mahasiswa HIPMI PT Sultra.</p>
    </div>
</div>

<div class="py-16 bg-gray-50">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
            <form action="{{ route('pengusaha.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-6 pb-6 border-b border-gray-200">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pin">
                        PIN Akses Rahasia <span class="text-red-500">*</span>
                    </label>
                    <input class="shadow appearance-none border @error('pin') border-red-500 @enderror rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-hipmiBlue" id="pin" name="pin" type="password" placeholder="Masukkan PIN dari Pengurus" required>
                    @error('pin')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                    <p class="text-gray-500 text-xs mt-2">Hanya mahasiswa yang memiliki PIN yang dapat mengirim data.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input class="shadow appearance-none border @error('name') border-red-500 @enderror rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-hipmiBlue" id="name" name="name" type="text" value="{{ old('name') }}" required>
                        @error('name') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="campus">Asal Kampus <span class="text-red-500">*</span></label>
                        <input class="shadow appearance-none border @error('campus') border-red-500 @enderror rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-hipmiBlue" id="campus" name="campus" type="text" value="{{ old('campus') }}" placeholder="Contoh: Universitas Halu Oleo" required>
                        @error('campus') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="business_name">Nama Usaha / Bisnis <span class="text-red-500">*</span></label>
                    <input class="shadow appearance-none border @error('business_name') border-red-500 @enderror rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-hipmiBlue" id="business_name" name="business_name" type="text" value="{{ old('business_name') }}" required>
                    @error('business_name') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="business_sector">Bidang Usaha <span class="text-red-500">*</span></label>
                        <input class="shadow appearance-none border @error('business_sector') border-red-500 @enderror rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-hipmiBlue" id="business_sector" name="business_sector" type="text" value="{{ old('business_sector') }}" placeholder="Contoh: F&B, Jasa, Retail" required>
                        @error('business_sector') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Nomor WhatsApp <span class="text-red-500">*</span></label>
                        <input class="shadow appearance-none border @error('phone') border-red-500 @enderror rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-hipmiBlue" id="phone" name="phone" type="text" value="{{ old('phone') }}" placeholder="Contoh: 08123456789" required>
                        @error('phone') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mb-8">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Foto Produk / Logo Usaha (Opsional)</label>
                    <input class="shadow appearance-none border @error('image') border-red-500 @enderror rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-hipmiBlue bg-gray-50" id="image" name="image" type="file" accept="image/*">
                    @error('image') <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-end">
                    <button class="bg-hipmiBlue hover:bg-blue-900 text-white font-bold py-3 px-8 rounded focus:outline-none focus:shadow-outline transition-colors" type="submit">
                        Kirim Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
