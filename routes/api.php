<?php

use App\Http\Controllers\Api\v1\ClientescController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\clientescontroller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\productosController;
use App\Http\Controllers\UserController;
use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/todos', function (Request $request) {
    return productos::all();
});
Route::get('/id',[clientescontroller::class,'id'] );
Route::get('/clientes/{user_id}', [UserController::class,'index']  ); 
Route::get('/pedidos/{estado}', [UserController::class,'store']  );//todos
Route::get('/pedidos', [UserController::class,'store']  );//todos
Route::post('/pedidos/{id}', [UserController::class,'update']  );//todos
Route::post('/form', [productosController::class,'store']  );//todos

Route::get('/login',[AuthController::class,'login'] );
Route::post('/login',[AuthController::class,'login'] );

    Route::post('/login',[AuthController::class,'login'] );

   
