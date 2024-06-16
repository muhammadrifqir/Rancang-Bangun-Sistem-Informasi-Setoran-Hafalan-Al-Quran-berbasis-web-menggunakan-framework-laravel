<?php

namespace App\Filament\Resources\FormNilaiResource\Pages;

use App\Filament\Resources\FormNilaiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFormNilais extends ListRecords
{
    protected static string $resource = FormNilaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
