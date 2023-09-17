<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class CustomerList extends Component implements HasTable
{
    use InteractsWithTable;

    public int $totalCustomer = 0;

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

    protected function getTableActions(): array
    {
        return [
            Action::make('edit')
                ->url(fn (Customer $record): string => route('customer-edit', $record))
                ->openUrlInNewTab()
        ];
    }

    public function updateTotalCustomers(): void
    {
        $this->totalCustomer = Customer::query()->count();
    }

    public function mount(): void
    {
        $this->totalCustomer = Customer::query()->count();
    }

    public function render()
    {
        return view('livewire.customer-list');
    }
}
