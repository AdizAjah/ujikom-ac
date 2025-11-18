@extends('layouts.public')

@section('title', 'About Us')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-8">
            <h1 class="text-3xl font-bold mb-4">Tentang Mega AC Jaya</h1>

            <p class="text-gray-700 dark:text-gray-300 mb-4">
                Selamat datang di situs resmi <strong>Mega AC Jaya</strong>. Kami adalah perusahaan profesional yang
                bergerak dalam layanan perawatan, perbaikan, dan instalasi sistem pendingin ruangan (AC). Dengan
                pengalaman bertahun-tahun, kami melayani kebutuhan pelanggan dari rumah tinggal hingga proyek
                komersial dan industri.
            </p>

            <h2 class="text-xl font-semibold mt-6 mb-2">Layanan Kami</h2>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-4">
                <li>Cuci AC dan perawatan berkala</li>
                <li>Service dan perbaikan unit</li>
                <li>Bongkar pasang AC</li>
                <li>Instalasi AC baru</li>
                <li>Instalasi sistem ducting untuk rumah, kantor, dan fasilitas industri</li>
            </ul>

            <h2 class="text-xl font-semibold mt-6 mb-2">Mengapa Memilih Kami?</h2>
            <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 mb-4">
                <li>Tim teknisi bersertifikat dan berpengalaman</li>
                <li>Bahan & suku cadang berkualitas</li>
                <li>Layanan cepat dengan respons profesional</li>
                <li>Harga transparan dan terjangkau</li>
            </ul>

            <p class="text-gray-700 dark:text-gray-300 mb-6">
                Website ini disediakan untuk memberi informasi lengkap dan mudah diakses mengenai layanan kami. Jika lu
                membutuhkan penawaran atau konsultasi, hubungi kami melalui halaman Kontak.
            </p>

            <!-- Optional: visi & misi (hapus komentar kalau mau tampilkan) -->
            {{-- 
            <div class="mt-6">
                <h3 class="text-lg font-semibold mb-2">Visi</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">Menjadi penyedia layanan AC terdepan yang terpercaya dan berorientasi pada kualitas di wilayah kami.</p>

                <h3 class="text-lg font-semibold mb-2">Misi</h3>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                    <li>Menyediakan layanan teknis yang profesional dan tepat waktu.</li>
                    <li>Mengutamakan kepuasan pelanggan lewat kualitas kerja dan bahan terbaik.</li>
                    <li>Terus meningkatkan kompetensi tim teknisi melalui pelatihan berkala.</li>
                </ul>
            </div>
            --}}

        </div>
    </div>
@endsection
