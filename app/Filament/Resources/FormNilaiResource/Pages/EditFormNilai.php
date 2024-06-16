<?php

namespace App\Filament\Resources\FormNilaiResource\Pages;

use App\Filament\Resources\FormNilaiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFormNilai extends EditRecord
{
    protected static string $resource = FormNilaiResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
