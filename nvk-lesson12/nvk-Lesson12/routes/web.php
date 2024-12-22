<?php

use App\Http\Controllers\nvkLoaiSanPhamController;
use App\Http\Controllers\nvkQuanTriController;
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

Route::get('/admin/nvkLogin',[nvkQuanTriController::class,'nvkLogin'])-> name('admin.nvkLogin');
Route::post('/admin/nvkLogin',[nvkQuanTriController::class,'nvkLoginSumbit'])-> name('admin.nvkSumbit');

# Admin Routes
Route::get('/nvkAdmin', function() {
    return view('nvkAdmin.index');
});

Route::get('/nvkAdmin/nvkLoaiSanPham/List', [nvkLoaiSanPhamController::class, 'nvkList'])->name('nvkAdmin.nvkLoaiSanPham.List');

Route::get('/nvkAdmin/nvkLoaiSanPham/create', [nvkLoaiSanPhamController::class, 'nvkCreate'])->name('nvkAdmin.nvkLoaiSanPham.Create');
Route::post('/nvkAdmin/nvkLoaiSanPham/store', [nvkLoaiSanPhamController::class, 'nvkStore'])->name('nvkAdmin.nvkLoaiSanPham.nvkStore');
