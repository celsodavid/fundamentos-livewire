<?php

use App\Http\Livewire\Frontend;
use Illuminate\Support\Facades\Route;

Route::get('/', Frontend::class);

// Exemplo de router model bind no livewire
// Route::get('/clientes/{customer}', Frontend::class);
