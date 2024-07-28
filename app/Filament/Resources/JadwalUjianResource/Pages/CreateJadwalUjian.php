<?php

namespace App\Filament\Resources\JadwalUjianResource\Pages;

use App\Filament\Resources\JadwalUjianResource;
use App\Models\JadwalUjian;
use App\Models\Nilai;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\DB;

class CreateJadwalUjian extends CreateRecord
{
    protected static string $resource = JadwalUjianResource::class;

    protected function handleRecordCreation(array $data): JadwalUjian
    {
        return DB::transaction(function () use ($data) {
            // Buat rekaman untuk JadwalUjian
            $jadwalUjian = JadwalUjian::create($data);

            // Buat bagian Nilai untuk santri
            Nilai::create([
                'santri_id' => $data['santri_id'],
                'jadwal_ujian_id' => $jadwalUjian->id,
            ]);

            return $jadwalUjian;

        });
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
