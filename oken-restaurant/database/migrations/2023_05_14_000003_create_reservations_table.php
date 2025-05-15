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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('reservation_date');
            $table->string('time');
            $table->integer('guests');
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('restaurant_id')->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
