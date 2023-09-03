<div>
    <h1 class="text-xl">Formulário de Contato</h1>

    <form wire:submit.prevent="submit" id="contact" class="flex flex-col gap-4">
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
            <label for="message">Informe a sua mensagem</label>
            <textarea wire:model.defer="message" id="message" cols="30" rows="10" placeholder="Sua mensagem..."></textarea>
            @error('message')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="file">Informe o seu arquivo de imagem</label>
            <input wire:model.defer="file" type="file" id="file" placeholder="Seu file...">
            @error('file')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button class="px-4 py-2 bg-green-500 hover:bg-green-400 rounded-full text-white">Enviar Contato</button>
        </div>
    </form>
</div>

@section('scripts')
    <script>
        window.addEventListener('fildFocus', event => {
            const element = document.getElementById(event.detail.element);
            element.focus();
        });
    </script>
@endsection
