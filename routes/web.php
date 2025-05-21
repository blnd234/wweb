<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Welcome;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\App;
use App\Livewire\Github;

Route::get('/' , Welcome::class);
Route::get('/about' , About::class);
Route::get('/contact' , Contact::class);
Route::get('/app' , App::class);
Route::get('/github' , Github::class);