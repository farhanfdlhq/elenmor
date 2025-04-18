<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('category_id')->constrained('portfolio_categories')->onDelete('cascade');
            $table->string('image')->nullable();         // Thumbnail gambar (opsional)
            $table->string('media_url')->nullable();     // URL untuk video (opsional)
            $table->text('description')->nullable();     // Deskripsi (opsional)
            $table->boolean('is_active')->default(true)->after('description')->comment('Portfolio status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
