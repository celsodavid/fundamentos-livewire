<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public int $count = 10; // valor inicial, prioridade inicial caso não receba valores do componente pai

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }

    // Com esse metodo implementado, o valor do atributo vai corresponder ao do mesmo, independente de pai/filho
    public function mount(): void
    {
        $this->count = 7; // Prioridade maxima depois do render
    }

    public function render()
    {
        /**
         * E no caso o attr for inicializado no metodo render, o valor ‘default’ se torna como ‘default’ ignorando os
         * valores de pai/filho ou mount
         * Prioridade maxima
         */
        $this->count = 9;

        return view('livewire.contador');
    }
}
