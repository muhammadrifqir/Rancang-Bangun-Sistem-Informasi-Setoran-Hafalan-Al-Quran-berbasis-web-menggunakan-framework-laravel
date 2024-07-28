<?php

use App\Models\FormNilai;
use App\Models\Hafalan;
use App\Models\JadwalUjian;
use App\Models\Santri;
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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_akademik');
            $table->string('jumlah_hafalan')->nullable();
            $table->string('hafalan_dibaca')->nullable();
            $table->integer('nilai_hafalan')->nullable();
            $table->integer('adab')->nullable();
            $table->integer('tajwid')->nullable();
            $table->integer('kelancaran')->nullable();
            $table->integer('fashohah')->nullable();
            $table->integer('jumlah')->nullable();
            $table->double('rata-rata')->nullable();
            $table->foreignIdFor(Santri::class);
            $table->foreignIdFor(JadwalUjian::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
