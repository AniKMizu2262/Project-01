<?php

use App\Http\Controllers\NVKProductController;
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

#view 
Route::get('/view1',function(){
    return view('view1',['name'=>"K23CNT2 - Nguyễn Văn Khải"]);
});

Route::get('/view2',function(){
    return view('view2',[
        'name'=>"K23CNT2 - Nguyễn Văn Khải",
        'array'=> [1,2,3,4,5]
    ]);
});

Route::get('/view3',function(){
    return view('view3',[
        'name'=>["K23CNT2", "Nguyễn", "Văn", "Khải"],
        'array'=> [1,2,3,4,5],
        'user' => [],
    ]);
});

Route::get('/', [NVKProductController::class,'nvkIndex']);