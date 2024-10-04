<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/aboutus', [PublicController::class, 'aboutus'])->name('aboutus');
// Route::get('/aboutus', function(){
//     $pippo=[
//         ['name'=>'pippo'],
//         ['name'=>'pluto'],
//         ['name'=>'minnie'],

//     ];
//     return view('aboutus', ['pippo'=>$pippo]);

// });
