<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[UserController::class,'dadosDashboard'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/conta',[UserController::class,'dadosConta'])->name('conta');

Route::middleware(['auth:sanctum', 'verified'])->get('/postagens',[UserController::class,'dadosPostagens'])
->name('postagens');

Route::middleware(['auth:sanctum', 'verified'])->get('/novaPostagem',[UserController::class,'dadosNovaPostagem'])
->name('novaPostagem');