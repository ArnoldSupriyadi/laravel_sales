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
            $table->integer('user_id');
            $table->string('nama_acara');
            $table->date('waktu_mulai');
            $table->date('waktu_akhir');
            $table->varchar('tempat');
            $table->varchar('riwayat_event');
            $table->varchar('perkiraan_traffic');
            $table->varchar('document');
            $table->integer('is_approve');
            $table->integer('diperiksa_oleh');
            $table->integer('setujui_oleh');
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
