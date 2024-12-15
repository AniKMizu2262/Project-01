<?php

use App\Http\Controllers\nvkSinhVienController;
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

// SinhVien - List 
Route::get('/nvkSinhVien',[nvkSinhVienController::class,'nvkList'])->name('nvkSinhVien.List');
// SinhVien - Create
Route::get('/nvkSinhVien/nvkCreate', [nvkSinhVienController::class, 'nvkCreate'])->name('nvkSinhVien.Create');
Route::post('/nvkSinhVien/nvkCreate', [nvkSinhVienController::class, 'nvkCreateSumbit'])->name('nvkSinhVien.CreateSumbit');

