<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('laporan_kegiatans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_LaporanKegiatan');
        $table->text('deskripsi')->nullable();
        $table->date('tanggal');
        $table->time('waktu');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('laporan_kegiatans');
}

};
