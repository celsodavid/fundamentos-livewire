<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\Redirector;

class CustomerEdit extends Component
{
    public ?Customer $customer = null;

    public string $name = '';

    public string $email = '';

    public string $document = '';

    public ?string $birthdate = '';

    public ?string $socialUrl = '';

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

        Customer::updateOrCreate([
            'email' => $this->email,
        ], [
            'name' => $this->name,
            'document' => $this->document,
            'birthdate' => $birthdate,
            'social_link' => $this->socialUrl,
        ]);

        $this->emit('message::success', [
            'name' => $this->name,
        ]);
    }

    private function getBirthDate(): null|Carbon|false
    {
        if (is_null($this->birthdate)) {
            return blank($this->birthdate);
        }

        return Carbon::createFromFormat('d/m/Y', $this->birthdate);
    }

    private function getBrazilianBirthDate(): null|Carbon|false
    {
        if (filled($this->customer->birthdate)) {
            return Carbon::createFromFormat('Y-m-d', $this->customer->birthdate);
        }

        return $this->birthdate;
    }

    public function remove(): RedirectResponse|Redirector
    {
        $customerName = $this->customer->name;

        $this->customer->delete();

        $this->reset();

        session()->put('removedCustomer', $customerName);

        return to_route('customer-list');
    }

    public function mount(): void
    {
        if (!is_null($this->customer)) {
            $brazilianBirthDate = $this->getBrazilianBirthDate()?->format('d/m/Y');

            $this->name = $this->customer->name;
            $this->email = $this->customer->email;
            $this->document = $this->customer->document;
            $this->birthdate = $brazilianBirthDate;
            $this->socialUrl = $this->customer->social_link;
        }
    }

    public function render()
    {
        return view('livewire.customer-edit');
    }
}
