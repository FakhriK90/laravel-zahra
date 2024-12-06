<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;

// Redirect the root URL to the clients index page
Route::get('/', function () {
    return redirect()->route('clients.index'); 
});

// Resource route for Clients
Route::resource('clients', ClientController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
