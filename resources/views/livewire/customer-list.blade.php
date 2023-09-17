<div>
    <div class="flex justify-between py-4" wire:poll.1500ms="updateTotalCustomers">
        <h1>Lista de Clientes [Total: {{ $totalCustomer }}]</h1>

        <a href="{{ route('customer-add') }}" class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-full">Adicionar</a>
    </div>

    {{ $this->table }}
</div>
