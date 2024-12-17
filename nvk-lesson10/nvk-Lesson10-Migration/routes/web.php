<?php

use App\Http\Controllers\nvkNhaCCController;
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

// NhaCC 
Route::get('/nvkNhaCC',[nvkNhaCCController::class,'list'])->name('nvkNhaCC.List');