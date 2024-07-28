<?php

use App\Models\Kategori;
use App\Models\Santri;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_ujians', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_akademik');
            $table->date('tanggal');
            $table->time('waktu_mulai');
            $table->time('waktu_selesai');
            $table->string('keterangan', 65)->nullable();
            $table->string('mustami\'_1', 255);
            $table->string('mustami\'_2', 255)->nullable();
            $table->foreignIdFor(Kategori::class);
            $table->foreignIdFor(Santri::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_ujians');
    }
};
