<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Produit;
use App\Http\Livewire\Register;
use App\Http\Livewire\ShowWelcome;
use App\Http\Livewire\UserProfile;
use App\Http\Livewire\ProductDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AcheteurDashboard;
use App\Http\Livewire\ProducteurDashboard;
use App\Http\Livewire\AgroEntrepriseDashboard;
use App\Http\Livewire\ResearchResult;
use App\Http\Livewire\SearchProducers;




Route::get('/', ShowWelcome::class);
Route::get('/contact', Contact::class);
Route::get('/produit', Produit::class);
Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');
Route::get('/producteur-dashboard', ProducteurDashboard::class);
Route::get('/acheteur-dashboard', AcheteurDashboard::class);
Route::get('/agro-entreprise-dashboard', AgroEntrepriseDashboard::class);
Route::get('/product/{productId}', ProductDetail::class)->name('product.detail');
Route::get('/profile', UserProfile::class)->name('profile');
Route::get('/recherche-producteurs', SearchProducers::class);
Route::get('/research-result/{query}', ResearchResult::class)->name('reseach.result');


