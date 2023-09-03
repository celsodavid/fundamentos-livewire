<?php

use App\Http\Livewire\CustomerAdd;
use App\Http\Livewire\CustomerList;
use App\Http\Livewire\Frontend;
use Illuminate\Support\Facades\Route;

Route::get('/{id}', Frontend::class);

Route::get('/clientes', CustomerList::class)->name('customer-list');
Route::get('/clientes/add', CustomerAdd::class)->name('customer-add');

// Exemplo de router model bind no livewire
// Route::get('/clientes/{customer}', Frontend::class);
