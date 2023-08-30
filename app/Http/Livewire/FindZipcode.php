<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FindZipcode extends Component
{
    public string $zipcode = '';

    public string $street = '';

    public string $neighborhood = '';

    public string $city = '';

    public string $state = '';

//    Exemplo 1 para pegar nome e valor do 'input' que possui model.lazy na view
//    public function updated(string $name, string $value): void
//    {
//        dd($name, $value);
//    }

//    Exemplo 2 para pegar valor do 'input' que possui model.lazy na 'view'
//    Porém, aqui definimos o nome do 'input' no método (updated + nome_do_input) [method magic]
    public function updatedZipcode(string $value): void
    {
        $result = Http::get("https://viacep.com.br/ws/{$value}/json/")->json();

        $this->zipcode = $result['cep'];
        $this->street = $result['logradouro'];
        $this->neighborhood = $result['bairro'];
        $this->city = $result['localidade'];
        $this->state = $result['uf'];
    }

    public function render()
    {
        return view('livewire.find-zipcode');
    }
}
