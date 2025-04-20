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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "London Studio", "New York Office"
            $table->text('address'); // Can store multi-line address
            $table->string('phone')->nullable();
            $table->string('Maps_url')->nullable();
            $table->string('icon')->nullable()->default('building'); // e.g., 'home', 'building' (from template's CSS)
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
