<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // 🔹 tambahkan foreign key user_id
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('room');
            $table->integer('price');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
