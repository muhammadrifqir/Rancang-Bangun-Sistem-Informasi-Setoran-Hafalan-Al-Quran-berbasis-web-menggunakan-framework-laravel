<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Nilai;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\NilaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NilaiResource\RelationManagers;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-check';

    protected static ?string $navigationGroup = 'Component';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('santri_id')
                    ->label('Santri')
                    ->relationship('santri', 'nama')
                    ->required(),
                TextInput::make('jumlah_hafalan')
                    ->required(),
                TextInput::make('hafalan_dibaca')
                    ->required(),
                TextInput::make('nilai_hafalan')
                    ->required(),
                TextInput::make('adab')
                    ->required(),
                TextInput::make('tajwid')
                    ->required(),
                TextInput::make('kelancaran')
                    ->required(),
                TextInput::make('fashohah')
                    ->required(),
                TextInput::make('jumlah')
                    ->required(),
                TextInput::make('rata-rata')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('santri.nama')
                    ->label('Santri')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('santri.kelas.nama_kelas')
                    ->label('Kelas'),
                TextColumn::make('jadwal.kategori.nama_kategori')
                    ->label('Kategori'),
                TextColumn::make('jumlah_hafalan')
                    ->label('Jumlah Hafalan'),
                TextColumn::make('hafalan_dibaca')
                    ->label('Hafalan Yang Dibaca'),
                // TextColumn::make('nilai_hafalan')
                //     ->label('Nilai Hafalan'),
                // TextColumn::make('adab')
                //     ->label('Nilai Adab'),
                // TextColumn::make('tajwid')
                //     ->label('Nilai Tajwid'),
                // TextColumn::make('kelancaran')
                //     ->label('Nilai Kelancaran'),
                // TextColumn::make('fashohah')
                //     ->label('Nilai Fashohah'),
                TextColumn::make('jumlah')
                    ->label('Nilai Akhir'),
                TextColumn::make('rata_rata')
                    ->label('Rata-rata')
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
            'index' => Pages\ListNilais::route('/'),
            'create' => Pages\CreateNilai::route('/create'),
            'edit' => Pages\EditNilai::route('/{record}/edit'),
        ];
    }
}
