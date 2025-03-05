<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\MyCV;

// just showing laravel page 
// Route::view('/welcome', 'welcome');

// show main page here, using livewire ...
Route::get('/', MyCV::class);