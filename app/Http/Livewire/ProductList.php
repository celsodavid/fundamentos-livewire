<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Product;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

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
            Tables\Columns\TextColumn::make('name')
                ->label('Produto')
                ->searchable(),
            Tables\Columns\TextColumn::make('category.name')
                ->label('Categoria'),
            Tables\Columns\TextColumn::make('price')
                ->label('Preço')
                ->formatStateUsing(fn (string $state) => sprintf('R$ %s', number_format(($state/100), 2, ',', '.'))),
            Tables\Columns\TextColumn::make('stock')
                ->label('Estoque'),
        ];
    }
    public function render()
    {
        return view('livewire.product-list');
    }
}
