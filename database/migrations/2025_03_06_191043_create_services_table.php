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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');              // Nama layanan
            $table->json('includes')->nullable(); // Daftar fitur sebagai JSON
            $table->decimal('price', 8, 2);      // Harga dengan 2 desimal
            $table->string('price_unit');         // Satuan harga (misalnya, "/day")
            $table->boolean('is_active')->default(true)->after('price_unit')->comment('Service status');
            $table->string('icon')->nullable();   // Ikon untuk layanan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
