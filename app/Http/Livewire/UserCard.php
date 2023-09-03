<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCard extends Component
{
    public ?User $user = null;

    public string|int $userId;

    public function mount(string|int $userId): void
    {
        $this->user = User::find($userId);
    }

    public function render()
    {
        return view('livewire.user-card');
    }
}
