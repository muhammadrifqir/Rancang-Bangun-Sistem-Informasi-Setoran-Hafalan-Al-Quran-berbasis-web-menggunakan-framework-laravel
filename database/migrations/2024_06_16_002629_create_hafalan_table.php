<?php

use App\Models\Kategori;
use App\Models\Santri;
use App\Models\Surat;
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
        Schema::create('hafalan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl');
            $table->time('waktu');
            $table->string('surat_dari');
            $table->string('ayat_dari');
            $table->string('hal_dari');
            $table->string('surat_ke');
            $table->string('ayat_ke');
            $table->string('hal_ke');
            $table->string('jumlah', 65)->nullable();
            $table->string('akumulasi_keseluruhan', 65)->nullable();
            $table->string('keterangan', 45)->nullable();
            $table->foreignIdFor(Santri::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hafalan');
    }
};
