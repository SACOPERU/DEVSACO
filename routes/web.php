<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Websaco\WebsacoController;


Route::get('/', function () {
    return view('websaco.dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('websaco.dashboard');
    })->name('dashboard');
});

//Route::get('/websaco', [WebsacoController::class, 'websaco.dashboard']);
Route::get('/websaco/{id}', [WebsacoController::class, 'show']);



