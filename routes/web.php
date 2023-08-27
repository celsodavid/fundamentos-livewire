<?php

use App\Livewire\Frontend;
use Illuminate\Support\Facades\Route;

Route::get('/{id}', Frontend::class);

// Exemplo de router model bind no livewire
// Route::get('/clientes/{customer}', Frontend::class);
