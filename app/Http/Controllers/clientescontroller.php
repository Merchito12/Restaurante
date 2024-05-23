<?php

namespace App\Http\Controllers;
use App\Models\productos;

use Illuminate\Http\Request;

class clientescontroller extends Controller
{
    //

    public function id($request){
        $producto_solicitado = $request->input('id');
        $producto = Productos::where('id', $producto_solicitado)->first();
        return $producto;
      
       
    }
}
