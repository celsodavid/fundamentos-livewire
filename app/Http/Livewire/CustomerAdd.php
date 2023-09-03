<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Customer;
use Carbon\Carbon;
use Livewire\Component;
use WireUi\Traits\Actions;

class CustomerAdd extends Component
{
    use Actions;

    public string $name = '';

    public string $email = '';

    public string $document = '';

    public string $birthdate = '';

    public string $socialUrl = '';

    protected array $rules = [
        'name' => ['required'],
        'email' => ['required', 'email'],
        'document' => ['required'],
        'birthdate' => ['nullable'],
        'socialUrl' => ['nullable'],
    ];

    protected array $messages = [
        'name.required' => 'O campo nome é obrigatório.',
        'email.required' => 'O campo e-mail é obrigatório.',
        'email.email' => 'O campo e-mail deve ser um e-mail válido.',
        'documet.required' => 'O campo documento é obrigatório.',
    ];

    public function submit(): void
    {
        $this->validate();

        $birthdate = $this->getBirthDate();

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'document' => $this->document,
            'birthdate' => $birthdate,
            'social_link' => $this->socialUrl,
        ]);

        $this->emit('message::success', [
            'name' => $this->name,
        ]);

        $this->reset();
    }

    // converte a data vindo do front em data de banco de dados
    private function getBirthDate(): Carbon|false
    {
        return Carbon::createFromFormat('d/m/Y', $this->birthdate);
    }

    public function render()
    {
        return view('livewire.customer-add');
    }
}
