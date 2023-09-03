<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;
use WireUi\Traits\Actions;

class Frontend extends Component
{
    use Actions;

    public string $screen = 'list';

    public ?Collection $users = null;

    public ?Customer $customer = null;

    protected $listeners = [
        'message::success' => 'showSuccessMessage',
    ];

    public function mount(?Customer $customer): void
    {
        $this->users = User::all();

        if (str(request()?->fullUrl())->contains('adicionar')) {
            $this->screen = 'add';
        }

        if (!is_null($customer) && str(request()?->fullUrl())->contains('editar')) {
            $this->customer = $customer;
            $this->screen = 'edit';
        }
    }

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
