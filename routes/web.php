<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Panier;
use App\Http\Livewire\Produit;
use App\Http\Livewire\Register;
use App\Http\Livewire\ShowWelcome;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ProducteurDashboard;



Route::get('/', ShowWelcome::class);
Route::get('/contact', Contact::class);
Route::get('/produit', Produit::class);
Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');
Route::get('/panier', Panier::class);
Route::get('/producteur-dashboard', ProducteurDashboard::class);


