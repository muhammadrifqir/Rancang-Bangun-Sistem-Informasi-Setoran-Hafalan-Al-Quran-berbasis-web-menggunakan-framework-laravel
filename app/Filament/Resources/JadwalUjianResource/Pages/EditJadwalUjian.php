<?php

namespace App\Filament\Resources\JadwalUjianResource\Pages;

use App\Filament\Resources\JadwalUjianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalUjian extends EditRecord
{
    protected static string $resource = JadwalUjianResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\DeleteAction::make(),
    //     ];
    // }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
