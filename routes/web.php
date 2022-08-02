<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/contracts', [ContractController::class, 'index'])->name('contracts.index');
Route::get('/quotes', [QuotesController::class, 'index'])->name('quotes.index');
