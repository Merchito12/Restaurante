<?php

use App\Http\Controllers\productosController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use App\Models\productos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/', [productosController::class,'index']  ); 
Route::get('/index', [productosController::class,'index']  ); 

Route::get('/sesion',function(){
return view('sesion');
} );
Route::get('/form',[productosController::class,'form'] );










