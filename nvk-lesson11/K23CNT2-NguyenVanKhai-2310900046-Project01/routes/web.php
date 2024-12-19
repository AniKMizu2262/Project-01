<?php

use App\Http\Controllers\nvkQuanTriController;
use App\Http\Controllers\nvkSanPhamController;
use App\Models\nvkQuanTri;
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


Route::get('admin/nvkLogin.Login',[nvkQuanTriController::class,'nvkLogin'])-> name('admin.nvkLogin');
Route::post('admin/nvkLogin.Login',[nvkQuanTriController::class,'nvkLoginSumbit'])-> name('admin.nvkLogin');

Route::get('/nvk-san-pham', [nvkSanPhamController::class, 'list'])->name('nvkSanPham.list');

Route::get('/san-pham/them', [nvkSanPhamController::class, 'create'])->name('sanpham.create');
Route::post('/san-pham/them', [nvkSanPhamController::class, 'store'])->name('sanpham.store');

// Route xem chi tiết sản phẩm
Route::get('/sanpham/{id}', [nvkSanPhamController::class, 'show'])->name('sanpham.show');

