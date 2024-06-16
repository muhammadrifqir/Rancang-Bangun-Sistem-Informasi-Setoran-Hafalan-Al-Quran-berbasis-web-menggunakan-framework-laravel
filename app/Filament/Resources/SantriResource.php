<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Santri;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SantriResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SantriResource\RelationManagers;
use Filament\Tables\Columns\ToggleColumn;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class SantriResource extends Resource
{
    protected static ?string $model = Santri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nis')
                    ->label('Nomor Induk Santri')
                    ->required()
                    ->maxLength(20),
                TextInput::make('nama')
                    ->required(),
                TextInput::make('tmp_lahir')
                    ->label('Tempat Lahir')
                    ->required(),
                DatePicker::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                Select::make('jk')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan'
                    ])
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->unique()
                    ->required(),
                Toggle::make('status_aktif')
                    ->nullable(),
                FileUpload::make('image')
                    ->image()
                    ->directory('santri/thumbnails')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file, callable $get) {
                        $name = $get('nis');
                        return (string) str($file->getClientOriginalName())
                            ->prepend($name . '-');
                    })->columnSpanFull(),
                Select::make('kelompok_id')
                    ->label('Kelompok')
                    ->relationship('kelompok', 'kategori_santri')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->size(50)
                    ->disk('public')
                    ->url(fn ($record) => $record->image),
                TextColumn::make('nis')
                    ->label('Nomor Induk Santri')
                    ->searchable(),
                TextColumn::make('nama')
                    ->searchable(),
                TextColumn::make('tmp_lahir')
                    ->label('Tempat Lahir')
                    ->searchable(),
                TextColumn::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),
                TextColumn::make('jk')
                    ->label('Jenis Kelamin')
                    ->searchable(),
                TextColumn::make('email')
                    ->searchable(),
                ToggleColumn::make('status_aktif')
                    ->boolean(),
                TextColumn::make('kelompok.kategori_santri')
                    ->label('Kelompok')
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
            'index' => Pages\ListSantris::route('/'),
            'create' => Pages\CreateSantri::route('/create'),
            'edit' => Pages\EditSantri::route('/{record}/edit'),
        ];
    }
}
