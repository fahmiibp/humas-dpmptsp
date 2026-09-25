<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Support\Icons\Heroicon;
use Filament\Actions\DeleteAction;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('icon'),
                TextColumn::make('color'),
                //TextColumn::make('status'),
                IconColumn::make('status')
                ->icon(fn (string $state): Heroicon => match ($state) {
                 '1' => Heroicon::OutlinedCheckCircle,
                '0' => Heroicon::OutlinedXCircle,
                })
                   ->color(fn (string $state): string => match ($state) {
                    '0' => 'danger',
                    '1' => 'success',
                    default => 'gray',
                }),

                TextColumn::make('description')
                 ->wrap(),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
