<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Guru;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\JadwalUjian;
use App\Models\TahunAkademik;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JadwalUjianResource\Pages;
use App\Filament\Resources\JadwalUjianResource\RelationManagers;

class JadwalUjianResource extends Resource
{
    protected static ?string $model = JadwalUjian::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Component';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('santri_id')
                    ->label('Santri')
                    ->relationship('santri', 'nama')
                    ->required(),
                Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama_kategori')
                    ->required(),
                Select::make('tahun_akademik')
                    ->options(TahunAkademik::where('active', true)->pluck('tahun_pelajaran', 'tahun_pelajaran'))
                    ->required(),
                DatePicker::make('tanggal')
                    ->required(),
                TimePicker::make('waktu_mulai')
                    ->required(),
                TimePicker::make('waktu_selesai')
                    ->required(),
                TextInput::make('keterangan')
                    ->maxLength(65)
                    ->nullable(),
                Select::make('mustami\'_1')
                    ->options(Guru::all()->pluck('nama', 'nama'))
                    ->required(),
                Select::make('mustami\'_2')
                    ->options(Guru::all()->pluck('nama', 'nama'))
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('santri.nama')
                    ->label('Santri')
                    ->sortable(),
                TextColumn::make('santri.kelas.nama_kelas')
                    ->label('Kelas'),
                TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori')
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                TextColumn::make('waktu_mulai')
                    ->label('Waktu'),
                TextColumn::make('keterangan')
                    ->searchable(),
                TextColumn::make('mustami\'_1')
                    ->searchable(),
                TextColumn::make('mustami\'_2')
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
            'index' => Pages\ListJadwalUjians::route('/'),
            'create' => Pages\CreateJadwalUjian::route('/create'),
            'edit' => Pages\EditJadwalUjian::route('/{record}/edit'),
        ];
    }
}
