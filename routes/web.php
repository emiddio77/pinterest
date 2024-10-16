<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/aboutus', [PublicController::class, 'aboutus'])->name('about-us');
Route::get('/details/{name}', [PublicController::class, 'details'])->name('dettagli');

//mail
Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contatact.us');
