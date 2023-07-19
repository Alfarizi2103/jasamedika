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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('id_pasien');
            $table->string('nama');
            $table->longText('alamat');
            $table->string('no_telp');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan_id')->nullable();
            $table->string('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
