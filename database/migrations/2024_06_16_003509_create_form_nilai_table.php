<?php

use App\Models\Kategori;
use App\Models\Santri;
use App\Models\Ujian;
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
        Schema::create('form_nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Kategori::class);
            $table->foreignIdFor(Ujian::class);
            $table->foreignIdFor(Santri::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_nilai');
    }
};
