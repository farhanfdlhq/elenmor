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
        Schema::create('ctas', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // e.g., "7,000+ Followers...", "Request a Quote"
            $table->text('description')->nullable(); // e.g., "Like me too?...", "Interested in my services?..." (allows HTML)
            $table->string('icon')->nullable(); // e.g., 'like', 'camera'
            $table->string('link_text')->nullable(); // e.g., "facebook.com/elenmor", "Contact me!"
            $table->string('link_url')->nullable(); // e.g., "#", "#contact"
            $table->string('type')->nullable(); // Optional: 'social', 'quote', 'promo' for potential styling/filtering
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctas');
    }
};
