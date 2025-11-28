@extends('layouts.public')

@section('title', 'Form')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Service - Mega Jaya AC</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .green-glow {
            box-shadow: 0 4px 14px 0 rgba(34, 197, 94, 0.3);
        }
        
        .green-glow:hover {
            box-shadow: 0 6px 20px 0 rgba(34, 197, 94, 0.4);
        }
        
        /* Flatpickr Custom Styling */
        .flatpickr-calendar {
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .flatpickr-day.selected {
            background: #16a34a;
            border-color: #16a34a;
        }
        
        .flatpickr-day.today {
            border-color: #16a34a;
            color: #16a34a;
        }
        
        .flatpickr-day:hover {
            background: #dcfce7;
            border-color: #16a34a;
        }

        .flatpickr-months .flatpickr-month {
            color: #16a34a;
        }

        .flatpickr-current-month .flatpickr-monthDropdown-months:hover {
            background: #dcfce7;
        }

        .flatpickr-weekdays {
            background: #f0fdf4;
        }

        .flatpickr-weekday {
            color: #16a34a;
            font-weight: 600;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <!-- Demo Data Simulation -->
    <script>
        // Simulasi data untuk demo
        const demoData = {
            service: {
                name: "Service AC Regular",
                description: "Layanan service AC rutin termasuk pembersihan filter, pengecekan freon, dan pengecekan komponen utama AC.",
                price: 150000
            },
            user: {
                phone: "628123456789",
                address: "Jl. Contoh Alamat No. 123, Jakarta Selatan"
            }
        };
    </script>

    <div class="min-h-screen bg-gradient-to-br from-green-50 to-green-100 dark:from-gray-900 dark:to-gray-800 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 mx-auto mb-4 bg-gradient-to-r from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg green-glow">
                    <i class="fas fa-calendar-check text-white text-2xl"></i>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-green-600 to-green-800 dark:from-green-400 dark:to-green-600 bg-clip-text text-transparent">
                    Booking Service
                </h1>
                <p class="mt-2 text-gray-600 dark:text-gray-400">Isi form berikut untuk membooking layanan kami</p>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden border border-green-100 dark:border-green-900/30">
                <!-- Service Detail Card -->
                <div class="bg-gradient-to-r from-green-50 to-green-100 dark:from-green-900/20 dark:to-green-800/20 border-b border-green-200 dark:border-green-900/30 p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 rounded-xl bg-white dark:bg-gray-800 shadow-sm flex items-center justify-center">
                                    <i class="fas fa-tools text-green-500 text-lg"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white" id="service-name">Service AC Regular</h3>
                                    <p class="text-green-600 dark:text-green-400 text-lg font-semibold" id="service-price">
                                        Rp 150.000
                                    </p>
                                </div>
                            </div>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed" id="service-description">
                                Layanan service AC rutin termasuk pembersihan filter, pengecekan freon, dan pengecekan komponen utama AC.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6 md:p-8">
                    <!-- Validation Errors Simulation -->
                    <div id="error-display" class="hidden mb-6 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl p-4">
                        <div class="flex items-center gap-2 text-red-800 dark:text-red-200 mb-2">
                            <i class="fas fa-exclamation-circle"></i>
                            <span class="font-semibold">Perhatikan error berikut:</span>
                        </div>
                        <ul class="list-disc list-inside text-sm text-red-600 dark:text-red-400 space-y-1" id="error-list">
                            <!-- Errors will be populated here -->
                        </ul>
                    </div>

                    <form action="{{ route('booking.store') }}" method="POST" id="booking-form" class="space-y-6">
                        @csrf
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <!-- Tanggal Booking -->
                        <div class="space-y-2">
                            <label for="booking_date" class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="fas fa-calendar-day mr-2 text-green-500"></i>
                                Tanggal Booking
                            </label>
                            <div class="relative">
                                <input id="booking_date"
                                    class="block w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 
                                           rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 
                                           dark:bg-gray-800 dark:text-white transition-all duration-300 shadow-sm"
                                    type="text"
                                    name="booking_date"
                                    placeholder="Pilih tanggal booking"
                                    required />
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-calendar text-gray-400"></i>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                <i class="fas fa-info-circle text-green-500"></i>
                                Pilih tanggal kedatangan teknisi
                            </p>
                        </div>
{{-- 
                        <div class="space-y-2">
                            <label for="booking_time" class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="fas fa-clock mr-2 text-green-500"></i>
                                Jam Booking
                            </label>
                        
                            <div class="relative">
                                @foreach (['09:00', '10:00', '11:00', '13:00', '14:00', '15:00', '16:00'] as $time)
                                    <label class="flex items-center gap-2">
                                        <input 
                                            type="radio" 
                                            name="booking_time" 
                                            value="{{ $time }}" 
                                            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 
                                                   dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 
                                                   focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded shadow-sm"
                                            @checked(old('booking_time') == $time)
                                            required
                                        >
                                        <span>{{ $time }}</span>
                                    </label>
                                @endforeach
                            </div>
                        
                            <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                <i class="fas fa-info-circle text-green-500"></i>
                                Pilih waktu kedatangan teknisi
                            </p>
                        </div>                         --}}

                        <!-- No. Telepon -->
                        <div class="space-y-2">
                            <label for="user_phone" class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="fab fa-whatsapp mr-2 text-green-500"></i>
                                Nomor Telepon (WhatsApp)
                            </label>
                            <div class="relative">
                                <input id="user_phone"
                                    class="block w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 
                                           rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 
                                           dark:bg-gray-800 dark:text-white transition-all duration-300 shadow-sm"
                                    type="text"
                                    name="user_phone"
                                    placeholder="628xxxxxxxxxx"
                                    value="628123456789"
                                    required />
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-phone text-gray-400"></i>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                <i class="fas fa-exclamation-triangle text-amber-500"></i>
                                Format wajib: 628xxxxxxxxxx (tidak boleh 08…)
                            </p>
                        </div>

                        <!-- Alamat -->
                        <div class="space-y-2">
                            <label for="user_address" class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="fas fa-map-marker-alt mr-2 text-green-500"></i>
                                Alamat Lengkap Pemasangan/Service
                            </label>
                            <div class="relative">
                                <textarea id="user_address" name="user_address" rows="4"
                                    class="block w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 
                                           rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 
                                           dark:bg-gray-800 dark:text-white transition-all duration-300 shadow-sm resize-none"
                                    placeholder="Masukkan alamat lengkap untuk kunjungan teknisi"
                                    required>Jl. Contoh Alamat No. 123, Jakarta Selatan</textarea>
                                <div class="absolute top-3 left-3 pointer-events-none">
                                    <i class="fas fa-home text-gray-400"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Catatan -->
                        <div class="space-y-2">
                            <label for="notes" class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-300">
                                <i class="fas fa-sticky-note mr-2 text-green-500"></i>
                                Catatan (Opsional)
                            </label>
                            <div class="relative">
                                <textarea id="notes" name="notes" rows="3"
                                    class="block w-full pl-10 pr-4 py-3 border border-gray-300 dark:border-gray-600 
                                           rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 
                                           dark:bg-gray-800 dark:text-white transition-all duration-300 shadow-sm resize-none"
                                    placeholder="Contoh: AC tidak dingin, AC bocor, AC berisik, dll."></textarea>
                                <div class="absolute top-3 left-3 pointer-events-none">
                                    <i class="fas fa-edit text-gray-400"></i>
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 flex items-center gap-1">
                                <i class="fas fa-lightbulb text-green-500"></i>
                                Jelaskan keluhan atau kebutuhan spesifik Anda
                            </p>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit"
                                class="w-full flex items-center justify-center gap-3 py-4 px-6 bg-gradient-to-r from-green-500 to-green-600 
                                       hover:from-green-600 hover:to-green-700 text-white font-semibold rounded-xl 
                                       shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-0.5 
                                       green-glow group">
                                <i class="fas fa-calendar-check group-hover:scale-110 transition-transform"></i>
                                <span class="text-lg">Konfirmasi Booking</span>
                            </button>
                        </div>

                        <!-- Additional Info -->
                        <div class="mt-6 p-4 bg-green-50 dark:bg-green-900/20 rounded-xl border border-green-200 dark:border-green-800">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-clock text-green-500 mt-0.5"></i>
                                <div class="text-sm text-gray-600 dark:text-gray-400">
                                    <p class="font-medium text-green-700 dark:text-green-300 mb-1">Proses Booking</p>
                                    <ul class="space-y-1">
                                        <li>• Teknisi akan menghubungi Anda via WhatsApp untuk konfirmasi</li>
                                        <li>• Jadwal dapat disesuaikan dengan kesepakatan bersama</li>
                                        <li>• Pembayaran dilakukan setelah service selesai</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white dark:bg-gray-800 rounded-2xl p-8 max-w-md mx-4 text-center">
            <div class="w-16 h-16 mx-auto mb-4 bg-green-500 rounded-full flex items-center justify-center">
                <i class="fas fa-check text-white text-2xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Booking Berhasil!</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                Terima kasih telah melakukan booking. Teknisi kami akan menghubungi Anda via WhatsApp untuk konfirmasi jadwal.
            </p>
            <button onclick="closeSuccessModal()" class="w-full bg-green-500 text-white py-3 rounded-xl font-semibold hover:bg-green-600 transition-colors">
                Tutup
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Flatpickr
            flatpickr("#booking_date", {
                enableTime: false,
                dateFormat: "Y-m-d",
                minDate: "today",
                locale: "id",
                disableMobile: true,
                onChange: function(selectedDates, dateStr, instance) {
                    const input = document.getElementById('booking_date');
                    if (dateStr) {
                        input.classList.add('border-green-500', 'ring-2', 'ring-green-500', 'ring-opacity-20');
                    } else {
                        input.classList.remove('border-green-500', 'ring-2', 'ring-green-500', 'ring-opacity-20');
                    }
                },
            });

            // Add focus effects to form inputs
            const inputs = document.querySelectorAll('input, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.classList.add('ring-2', 'ring-green-500', 'ring-opacity-20');
                });
                
                input.addEventListener('blur', function() {
                    this.classList.remove('ring-2', 'ring-green-500', 'ring-opacity-20');
                });
            });

            // Format phone number input
            const phoneInput = document.getElementById('user_phone');
            phoneInput.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.startsWith('0')) {
                    value = '62' + value.substring(1);
                }
                e.target.value = value;
            });

            // Form submission handler
            const form = document.getElementById('booking-form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Simple validation
                const errors = [];
                const bookingDate = document.getElementById('booking_date').value;
                const userPhone = document.getElementById('user_phone').value;
                const userAddress = document.getElementById('user_address').value;

                if (!bookingDate) {
                    errors.push('Tanggal booking harus diisi');
                }

                if (!userPhone) {
                    errors.push('Nomor telepon harus diisi');
                } else if (!userPhone.startsWith('62')) {
                    errors.push('Nomor telepon harus dimulai dengan 62');
                }

                if (!userAddress) {
                    errors.push('Alamat harus diisi');
                }

                // Show errors or submit form
                const errorDisplay = document.getElementById('error-display');
                const errorList = document.getElementById('error-list');

                if (errors.length > 0) {
                    errorList.innerHTML = '';
                    errors.forEach(error => {
                        const li = document.createElement('li');
                        li.textContent = error;
                        errorList.appendChild(li);
                    });
                    errorDisplay.classList.remove('hidden');

                    // Scroll to errors
                    errorDisplay.scrollIntoView({ behavior: 'smooth' });
                } else {
                    errorDisplay.classList.add('hidden');
                    showSuccessModal();
                }
            });
        });

        // function showSuccessModal() {
        //     document.getElementById('success-modal').classList.remove('hidden');
        // }

        function closeSuccessModal() {
            document.getElementById('success-modal').classList.add('hidden');
        }

        // Format price for display
        function formatPrice(price) {
            return new Intl.NumberFormat('id-ID').format(price);
        }

        // Initialize demo data
        document.getElementById('service-name').textContent = demoData.service.name;
        document.getElementById('service-description').textContent = demoData.service.description;
        document.getElementById('service-price').textContent = `Rp ${formatPrice(demoData.service.price)}`;
    </script>
</body>
</html>

@endsection