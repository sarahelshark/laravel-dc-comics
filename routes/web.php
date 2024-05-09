<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

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

Route::get('/', function () {
    return view('welcome');
});

//controller di tipo risorsa ____ le operazioni crud sono per gli ADMIN della pagina, non per i semplici visitatori
Route::resource('post', PostController::class);
//per la nostra identita post vogliamo creare 7 rotte differenti