<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ujian;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UjianResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UjianResource\RelationManagers;
use Filament\Forms\Components\TimePicker;

class UjianResource extends Resource
{
    protected static ?string $model = Ujian::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tahun')
                    ->required(),
                TextInput::make('periode')
                    ->required(),
                TimePicker::make('waktu_mulai')
                    ->required(),
                TimePicker::make('waktu_selesai')
                    ->required(),
                TextInput::make('keterangan')
                    ->maxLength(65),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tahun')
                    ->searchable(),
                TextColumn::make('periode')
                    ->searchable(),
                TextColumn::make('waktu_mulai')
                    ->time(),
                TextColumn::make('waktu_selesai')
                    ->time(),
                TextColumn::make('keterangan')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUjians::route('/'),
            'create' => Pages\CreateUjian::route('/create'),
            'edit' => Pages\EditUjian::route('/{record}/edit'),
        ];
    }
}
