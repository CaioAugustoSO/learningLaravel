<?php

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

use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ContatoController;
Route::get('/', [EventoController::class, 'index']);

Route::get('/evento/criar', [EventoController::class, 'create']);

Route::get('/contact', [ContatoController::class,'index'] );

Route::post('/evento', [EventoController::class,'store']);
