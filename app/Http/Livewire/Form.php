<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public string $name = '';

    public string $email = '';

    public string $message = '';

    public array $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public array $messages = [
        'name.required' => 'O campo nome é obrigatório',
        'email.required' => 'O campo e-mail é obrigatório',
        'email.email' => 'O campo e-mail deve ser um e-mail válido',
        'message.required' => 'O campo mensagem é obrigatório',
        'message.min' => 'O campo mensagem deve ter no mínimo 10 caracteres',
    ];

    public function submit(): void
    {
        $this->validate();

        // Enviar um e-mail para o destinatário

        // Guardar a informação no banco de dados

        // dipara um evento para quem estiver a escutar chamar o metodo
        // ideal colocar antes do reset dos campos caso queira passar algum parametro para o metodos a se chamado
        $this->emit('message::success', [
            'name' => $this->name,
        ]);

        // poderia passar somente reset() sem params que limparia todos os atributos
        $this->reset('name', 'email', 'message');
    }

    public function render()
    {
        return view('livewire.form');
    }
}
