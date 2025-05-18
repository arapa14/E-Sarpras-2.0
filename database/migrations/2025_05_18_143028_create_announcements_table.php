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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul singkat
            $table->text('message'); // Isi lengkap pengumuman
            $table->enum('type', ['info', 'warning', 'danger', 'success'])->default('info'); // Untuk styling (warna/badge)
            $table->boolean('is_active')->default(true); // Apakah ditampilkan
            $table->timestamp('start_at')->nullable(); // Kapan mulai tampil
            $table->timestamp('end_at')->nullable(); // Kapan berhenti tampil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
