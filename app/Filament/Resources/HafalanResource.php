<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Surat;
use App\Models\Hafalan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use App\Filament\Resources\HafalanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;

class HafalanResource extends Resource
{
    protected static ?string $model = Hafalan::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Component';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        Select::make('santri_id')
                            ->label('Santri')
                            ->relationship('santri', 'nama', function ($query) {
                                $user = auth()->user();
                                return $query->where('kelompok_id', $user->kelompok->id);
                            })
                            ->required(),
                        DatePicker::make('tgl')
                            ->label('Tanggal')
                            ->required(),
                        TimePicker::make('waktu')
                            ->required(),
                    ])->columns(3),
                Grid::make()
                    ->schema([
                        Select::make('surat_dari')
                            ->options(Surat::all()->pluck('nama_surat', 'nama_surat'))
                            ->searchable()
                            ->required(),
                        TextInput::make('ayat_dari')
                            ->required(),
                        TextInput::make('hal_dari')
                            ->required(),
                    ])->columns(3),
                Grid::make()
                    ->schema([
                        Select::make('surat_ke')
                            ->options(Surat::all()->pluck('nama_surat', 'nama_surat'))
                            ->searchable()
                            ->required(),
                        TextInput::make('ayat_ke')
                            ->required(),
                        TextInput::make('hal_ke')
                            ->required(),
                    ])->columns(3),
                Grid::make()
                    ->schema([
                        TextInput::make('jumlah')
                            ->maxLength(65)
                            ->nullable(),
                        TextInput::make('akumulasi_keseluruhan')
                            ->maxLength(65)
                            ->nullable(),
                    ])->columns(2),
                TextInput::make('keterangan')
                    ->maxLength(45)
                    ->nullable()
                    ->columnSpanFull(),
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
                TextColumn::make('tgl')
                    ->label('Bulan')
                    ->date('F')
                    ->sortable(),
                TextColumn::make('jumlah')
                    ->searchable(),
                TextColumn::make('akumulasi_keseluruhan')
                    ->searchable(),
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
            'index' => Pages\ListHafalans::route('/'),
            'create' => Pages\CreateHafalan::route('/create'),
            'edit' => Pages\EditHafalan::route('/{record}/edit'),
        ];
    }
}
