<?php

use App\Http\Controllers\nvkKhoaController;
use App\Http\Controllers\nvkMonHocController;
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

// Khoa 
Route::get('/nvkKhoa',[nvkKhoaController::class,'nvkGetAllKhoa'])->name('nvkKhoa.nvkGetAllKhoa');

// Khoa - detail
Route::get('/nvkKhoa/detail/{nvkMaKH}',[nvkKhoaController::class,'detail'])->name('nvkKhoa.detail');

// Khoa - edit 
Route::get('/nvkKhoa/edit/{nvkMaKH}',[nvkKhoaController::class,'edit'])->name('nvkKhoa.edit');
Route::post('/nvkKhoa/edit/',[nvkKhoaController::class,'editSumbit'])->name('nvkKhoa.editSumbit');

// Khoa - delete 
Route::get('/nvkKhoa/delete/{nvkMaKH}',[nvkKhoaController::class,'delete'])->name('nvkKhoa.delete');

// Khoa - edit
Route::get('/nvkKhoa/insert/{nvkMaKH?}',[nvkKhoaController::class,'insert'])->name('nvkKhoa.insert');
Route::post('/nvkKhoa/insert', [nvkKhoaController::class, 'insertSumbit'])->name('nvkKhoa.insertSumbit');

// Mon Hoc 
Route::get('/nvkMonHoc',[nvkMonHocController::class,'nvkList'])->name('nvkKhoa.nvkList');