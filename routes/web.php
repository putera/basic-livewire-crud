<?php

use App\Livewire\Home;
use App\Livewire\PersonForm;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/person/{id?}', PersonForm::class)->name('person-form');
