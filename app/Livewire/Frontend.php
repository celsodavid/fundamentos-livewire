<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;

class Frontend extends Component
{
    public int $defaultCounter = 0;

    public function render()
    {
        return view('livewire.frontend');
    }
}
