<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Hafalan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HafalanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HafalanResource\RelationManagers;

class HafalanResource extends Resource
{
    protected static ?string $model = Hafalan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('tgl')
                    ->label('Tanggal')
                    ->required(),
                TimePicker::make('waktu')
                    ->required(),
                TextInput::make('ayat_dari')
                    ->required(),
                TextInput::make('ayat_ke')
                    ->required(),
                TextInput::make('jml_juz')
                    ->required(),
                TextInput::make('hal_dari')
                    ->required(),
                TextInput::make('hal_ke')
                    ->required(),
                TextInput::make('keterangan')
                    ->maxLength(45),
                Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama_kategori')
                    ->required(),
                Select::make('surat_id')
                    ->label('Surat')
                    ->relationship('surat', 'nama_surat')
                    ->required(),
                Select::make('santri_id')
                    ->label('Santri')
                    ->relationship('santri', 'nama')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tgl')
                    ->date()
                    ->sortable(),
                TextColumn::make('waktu')
                    ->time(),
                TextColumn::make('ayat_dari')
                    ->searchable(),
                TextColumn::make('ayat_ke')
                    ->searchable(),
                TextColumn::make('jml_juz')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('hal_dari')
                    ->searchable(),
                TextColumn::make('hal_ke')
                    ->searchable(),
                TextColumn::make('keterangan')
                    ->searchable(),
                TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori')
                    ->sortable(),
                TextColumn::make('surat.nama_surat')
                    ->label('Surat')
                    ->sortable(),
                TextColumn::make('santri.nama')
                    ->label('Santri')
                    ->sortable(),
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
            'index' => Pages\ListHafalans::route('/'),
            'create' => Pages\CreateHafalan::route('/create'),
            'edit' => Pages\EditHafalan::route('/{record}/edit'),
        ];
    }
}
