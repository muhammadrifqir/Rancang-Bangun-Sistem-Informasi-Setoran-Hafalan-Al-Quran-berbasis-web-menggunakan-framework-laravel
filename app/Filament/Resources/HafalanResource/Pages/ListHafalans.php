<?php

namespace App\Filament\Resources\HafalanResource\Pages;

use App\Filament\Resources\HafalanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHafalans extends ListRecords
{
    protected static string $resource = HafalanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
