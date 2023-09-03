<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Filament\Tables;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class CustomerList extends Component implements HasTable
{
    use InteractsWithTable;

    public function getTableQuery(): Builder
    {
        return Customer::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->label('Nome do Cliente')
                ->searchable(),
            Tables\Columns\TextColumn::make('email')
                ->label('E-mail')
                ->searchable(),
            Tables\Columns\TextColumn::make('document')
                ->label('Documento'),
            Tables\Columns\TextColumn::make('birthdate')
                ->label('Nascimento')
                ->dateTime('d/m/Y'),

        ];
    }

    public function render()
    {
        return view('livewire.customer-list');
    }
}
