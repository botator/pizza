<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [PizzaController::class, 'akcios']);
Route::get('/adatlap/{id}',[PizzaController::class, 'adatlap']);
Route::get('/all',[PizzaController::class,'all']);

