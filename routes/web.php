<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'] );




// Route::get('/', function () {
    
    
//     return 'Ainda estou na rota raiz!';
//     //return view('welcome');
// });
