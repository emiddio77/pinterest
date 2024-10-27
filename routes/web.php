<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/aboutus', [PublicController::class, 'aboutus'])->name('about-us');
Route::get('/details/{name}', [PublicController::class, 'details'])->name('dettagli');

//mail
Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contatact.us');
Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');
Route::get('/mail/thankyou', [PublicController::class, 'thankYou'])->name('thank.you');

//inserisci card
route::get('/card/insert', [ProductController::class, 'inserisci'])->name('inser_isci');
route::post('/card/create', [ProductController::class, 'store'])->name('product.store');
route::get('/card/photos', [ProductController::class, 'foto'])->name('pho.tos');
