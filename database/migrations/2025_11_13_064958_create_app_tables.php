<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Tabel untuk Jasa Service (Fitur 1 & 2)
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Cuci AC 1 PK", "Bongkar Pasang"
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2); // Harga jasa
            $table->timestamps();
        });

        // 2. Tabel untuk Produk Unit AC (Fitur 2)
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "AC Daikin 1/2 PK"
            $table->string('sku')->unique()->nullable(); // Kode unik produk
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2); // Harga produk
            $table->integer('stock')->default(0);
            $table->string('image_url')->nullable(); // URL gambar produk
            $table->timestamps();
        });

        // 3. Tabel untuk Booking Online (Fitur 1)
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->dateTime('booking_date'); // Tanggal & jam yang diminta user
            $table->text('user_address'); // Alamat user saat booking
            $table->string('user_phone'); // No HP user saat booking
            $table->text('notes')->nullable(); // Catatan dari user
            $table->string('status')->default('pending'); // e.g., pending, confirmed, processing, completed, cancelled
            $table->timestamps();
        });

        // 4. Tabel untuk Order/Pesanan Produk (Fitur 5 & 6)
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->decimal('total_amount', 15, 2);
            $table->string('status')->default('pending'); // e.g., pending, paid, shipping, completed, cancelled
            $table->string('payment_status')->default('unpaid'); // e.g., unpaid, paid, failed
            $table->string('payment_gateway')->nullable(); // e.g., midtrans
            $table->string('payment_token')->nullable(); // Token dari payment gateway
            
            // Info Pengiriman (Fitur 6)
            $table->text('shipping_address');
            $table->string('shipping_courier')->nullable(); // e.g., JNE, TIKI
            $table->string('shipping_service')->nullable(); // e.g., OKE, REG, YES
            $table->string('shipping_tracking_number')->nullable();
            $table->decimal('shipping_cost', 15, 2)->default(0);

            $table->timestamps();
        });

        // 5. Tabel detail untuk Order (Pivot Table)
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price', 15, 2); // Harga produk saat dibeli
        });

        // 6. Tabel untuk Galeri Foto (Fitur 4)
        Schema::create('gallery_items', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('caption')->nullable();
            $table->timestamps();
        });

        // 7. Tabel untuk Pesan Kontak (Fitur 3)
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('subject')->nullable();
            $table->text('message');
            $table->boolean('is_read')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('gallery_items');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('products');
        Schema::dropIfExists('services');
    }
};