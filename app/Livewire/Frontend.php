<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

class Frontend extends Component
{
    public int $defaultCounter = 0;

    public function mount(int $id): void
    {
        $this->defaultCounter = $id;
    }

//    /**
//     * @param App\Models\Customer $customer
//     * @Annotation Exemplo de router model bind no livewire
//     * @return void
//     */
//    public function mount(Customer $customer): void
//    {
//        // implements
//    }

    public function render()
    {
        return view('livewire.frontend');
    }
}
