<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use App\Http\Livewire\ShowWelcome;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', ShowWelcome::class);
Route::get('/register', Register::class);
Route::post('/register', [Register::class, 'register']);
Route::get('/login', Login::class);


    