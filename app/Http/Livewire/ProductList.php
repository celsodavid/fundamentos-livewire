<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Product;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ProductList extends Component implements HasTable
{
    use InteractsWithTable;

    public function getTableQuery(): Builder
    {
        return Product::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Split::make([
                Tables\Columns\TextColumn::make('name')
                    ->label('Produto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Categoria'),
            ]),
            Panel::make([
                Stack::make([
                    Tables\Columns\TextColumn::make('price')
                        ->label('Preço')
                        ->formatStateUsing(fn (string $state) => sprintf('R$ %s', number_format(($state/100), 2, ',', '.'))),
                    Tables\Columns\TextColumn::make('stock')
                        ->label('Estoque'),
                ]),
            ])->collapsible(),
        ];
    }

    public function render()
    {
        return view('livewire.product-list');
    }
}
