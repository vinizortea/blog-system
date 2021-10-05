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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $username = UserController::getUsername();
    return view('dashboard',['username'=>$username]);
})->name('dashboard');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/conta', function () {
    $username = UserController::getUsername();
    return view('conta',['username'=>$username]);
})->name('conta');*/

Route::get('/conta',function(){
    $username = UserController::getUsername();
    $name = UserController::getName();
    $email = UserController::getEmail();
    return view('conta',['username'=>$username, 'name'=>$name, 'email'=>$email]);
});