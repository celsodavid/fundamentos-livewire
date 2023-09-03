<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Livewire\Component;
use WireUi\Traits\Actions;

class CustomerAdd extends Component
{
    use Actions;

    public function render()
    {
        return view('livewire.customer-add');
    }
}
