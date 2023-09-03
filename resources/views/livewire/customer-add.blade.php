<div>
    <div class="flex justify-between py-4 w-1/2 bg-blue-100 p-4 mx-auto">
        <h1>Adicionar Cliente</h1>

        <a href="{{ route('customer-list') }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-400 text-white rounded-full">Voltar</a>
    </div>

    <form wire:submit.prevent="submit" id="contact" class="flex flex-col gap-4 w-1/2 bg-blue-100 p-4 mx-auto">
        <div class="flex flex-col">
            <label for="name">Informe o seu nome</label>
            <input wire:model.defer="name" type="text" id="name" placeholder="Seu nome...">
            @error('name')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="email">Informe o seu e-mail</label>
            <input wire:model.defer="email" type="text" id="email" placeholder="Seu email...">
            @error('email')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="document">Informe o seu documento</label>
            <input wire:model.defer="document" type="text" id="document" placeholder="Seu documento...">
            @error('document')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="birthdate">Informe a data de nascimento</label>
            <input wire:model.defer="birthdate" type="text" id="birthdate" placeholder="Seu nascimento...">
            @error('birthdate')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="social_url">Informe o link da rede social</label>
            <input wire:model.defer="socialUrl" type="text" id="social_url" placeholder="Sua rede social...">
            @error('socialUrl')
            <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button class="px-4 py-2 bg-green-500 hover:bg-green-400 rounded-full text-white">Salvar Cliente</button>
        </div>
    </form>
</div>
