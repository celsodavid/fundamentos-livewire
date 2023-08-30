<div>
    <h2 class="text-xl">Buscador de CEP</h2>

    <form id="contact" class="flex flex-col gap-4">
        <div class="flex flex-col">
            <label for="zipcode">CEP</label>
            <input wire:model.lazy="zipcode" type="text" id="zipcode" placeholder="Seu CEP...">
        </div>

        <div class="flex flex-col">
            <label for="street">Rua</label>
            <input wire:model="street" type="text" id="street" placeholder="Sua rua...">
        </div>

        <div class="flex flex-col">
            <label for="neighborhood">Bairro</label>
            <input wire:model="neighborhood" type="text" id="neighborhood" placeholder="Seu bairro...">
        </div>

        <div class="flex flex-col">
            <label for="city">Cidade</label>
            <input wire:model="city" type="text" id="city" placeholder="Sua cidade...">
        </div>

        <div class="flex flex-col">
            <label for="state">Estado</label>
            <input wire:model="state" type="text" id="state" placeholder="Seu estado...">
        </div>
    </form>
</div>
