<?php

use App\Http\Controllers\nvkAccountController;
use App\Http\Controllers\nvkSessionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/session/get',[nvkSessionController::class,'nvkGetSessionData']) -> name('session.get');
Route::get('/session/save',[nvkSessionController::class,'nvkSaveSessionData']) -> name('session.save');
Route::get('/session/delete',[nvkSessionController::class,'nvkDeleteSessionData']) -> name('session.delete');

// Account 
Route::get('/nvkLogin',[nvkAccountController::class,'nvkLogin']) ->name('account.nvkLogin');
Route::get('/nvkLogout',[nvkAccountController::class,'nvkLogout']) ->name('account.nvkLogout');
Route::post('/nvkLogin',[nvkAccountController::class,'nvkLoginSumbit']) ->name('account.nvkLoginSumbit');