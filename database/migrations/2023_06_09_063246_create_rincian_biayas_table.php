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
        Schema::create('rincian_biayas', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->integer('id_sub_biaya');
            $table->string('name');
            $table->integer('unit');
            $table->integer('jml_kebutuhan');
            $table->string('keterangan');
            $table->integer('total_all');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rincian_biayas');
    }
};
