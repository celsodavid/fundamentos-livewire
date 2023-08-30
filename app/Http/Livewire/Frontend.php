<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;
use WireUi\Traits\Actions;

class Frontend extends Component
{
    use Actions;

    protected $listeners = [
        'message::success' => 'showSuccessMessage',
    ];

    public function showSuccessMessage(array $params): void
    {
        // dispara a notificação do para o front usando o wireUi
        $this->notification()
            ->success("Tudo certo!", "Hey {$params['name']}, o seu formulário foi enviado com sucesso!");
    }

    public function render()
    {
        return view('livewire.frontend');
    }
}
