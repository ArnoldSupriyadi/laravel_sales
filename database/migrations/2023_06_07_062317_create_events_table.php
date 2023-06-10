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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->string('nama_acara');
            $table->date('waktu_mulai');
            $table->date('waktu_akhir');
            $table->string('tempat');
            $table->string('riwayat_event');
            $table->string('perkiraan_traffic');
            $table->text('document');
            $table->integer('is_approve');
            $table->foreignId('diperiksa_oleh')->constrained('users');
            $table->foreignId('setujui_oleh')->constrained('users');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
