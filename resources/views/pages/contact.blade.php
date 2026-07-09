@extends('layouts.main')

@section('title', 'Kontak Kami - HIPMI PT SULTRA')

@section('content')
<div class="bg-hipmiBlue py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="text-4xl font-extrabold mb-4">Kontak Kami</h1>
        <p class="text-xl text-blue-200">Ada pertanyaan atau peluang kolaborasi? Jangan ragu untuk menghubungi kami.</p>
    </div>
</div>

<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                
                <!-- Info Kontak -->
                <div class="p-10 bg-hipmiBlue text-white">
                    <h3 class="text-2xl font-bold mb-6 text-hipmiYellow">Informasi Kontak</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-hipmiYellow mt-1 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <div>
                                <h4 class="font-semibold text-lg">Alamat Sekretariat</h4>
                                <p class="text-blue-200 mt-1">Gedung Pusat Kegiatan Mahasiswa<br>Kendari, Sulawesi Tenggara, 93231</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-hipmiYellow mt-1 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <div>
                                <h4 class="font-semibold text-lg">Email</h4>
                                <p class="text-blue-200 mt-1">info@hipmiptsultra.org</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-hipmiYellow mt-1 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <div>
                                <h4 class="font-semibold text-lg">Telepon / WhatsApp</h4>
                                <p class="text-blue-200 mt-1">+62 812-3456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-12">
                        <h4 class="font-semibold text-lg mb-4">Sosial Media</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-hipmiYellow hover:text-hipmiBlue transition">IG</a>
                            <a href="#" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-hipmiYellow hover:text-hipmiBlue transition">FB</a>
                            <a href="#" class="w-10 h-10 bg-blue-800 rounded-full flex items-center justify-center hover:bg-hipmiYellow hover:text-hipmiBlue transition">IN</a>
                        </div>
                    </div>
                </div>
                
                <!-- Form Kontak -->
                <div class="p-10">
                    <h3 class="text-2xl font-bold mb-6 text-gray-900">Kirim Pesan</h3>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-hipmiBlue focus:ring-hipmiBlue p-3 border" placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-hipmiBlue focus:ring-hipmiBlue p-3 border" placeholder="john@example.com">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subjek</label>
                            <input type="text" id="subject" name="subject" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-hipmiBlue focus:ring-hipmiBlue p-3 border" placeholder="Perihal pesan">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Pesan</label>
                            <textarea id="message" name="message" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-hipmiBlue focus:ring-hipmiBlue p-3 border" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        <div>
                            <button type="button" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-hipmiBlue hover:bg-blue-800 focus:outline-none transition">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
