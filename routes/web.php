<?php

use App\Http\Livewire\CustomerAdd;
use App\Http\Livewire\CustomerList;
use App\Http\Livewire\Frontend;
use Illuminate\Support\Facades\Route;

Route::get('/{id}', Frontend::class);

Route::get('/clientes', Frontend::class)->name('customer-list');
Route::get('/clientes/adicionar', Frontend::class)->name('customer-add');
Route::get('/clientes/editar/{customer}', Frontend::class)->name('customer-edit');

// Exemplo de router model bind no livewire
// Route::get('/clientes/{customer}', Frontend::class);
