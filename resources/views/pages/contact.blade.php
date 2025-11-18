@extends('layouts.public')

@section('title', 'Kontak Kami')

@section('content')
    <div class="max-w-3xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-6">Hubungi Kami</h1>

        <div class="space-y-6">
            <div>
                <h2 class="text-xl font-semibold">📧 Email</h2>
                <p class="text-gray-700">megaacjaya@gmail.com</p>
            </div>

            <div>
                <h2 class="text-xl font-semibold">📱 Telepon / WhatsApp</h2>
                <p class="text-gray-700">+62 856-7670-006 (Fast Response)</p>
                <a href="https://wa.me/628567670006" target="_blank"
                    class="inline-flex items-center gap-2 mt-6 px-5 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition">
                    💬 Chat via WhatsApp
                </a>
            </div>

            <div>
                <h2 class="text-xl font-semibold">📍 Alamat</h2>
                <p class="text-gray-700">Perum Megaregency blok A9 No 2, Desa Sukasari,<br> Kecamatan Serang Baru, Kabupaten Bekasi</p>
            </div>

            <div>
                <h2 class="text-xl font-semibold">🕒 Jam Operasional</h2>
                <ul class="list-disc ml-6 text-gray-700">
                    <li>Senin: 08.00 - 17.00</li>
                    <li>Selasa: 08.00 - 17.00</li>
                    <li>Rabu: 08.00 - 17.00</li>
                    <li>Kamis: 08.00 - 17.00</li>
                    <li>Jumat: Libur</li>
                    <li>Sabtu: 08.00 - 17.00</li>
                    <li>Minggu: 08.00 - 17.00</li>
                </ul>
                        

            <div>
                        <div>
                <h2 class="text-xl font-semibold">🌐 Sosial Media</h2>
                <ul class="list-disc ml-6 text-gray-700">
                    <li>TikTok: <a href="https://www.tiktok.com/@mega.ac.jaya" target="_blank" class="text-blue-600 hover:underline">@mega.ac.jaya</a></li>
                    <li>Instagram: <a href="https://www.instagram.com/mega_ac_jaya" target="_blank" class="text-blue-600 hover:underline">@mega_ac_jaya</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
