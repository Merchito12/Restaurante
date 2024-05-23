<?php

namespace App\Http\Controllers;

use App\Models\pedidos;
use App\Models\productos;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class productosController extends Controller
{
    public function index() {
        $productos = productos::all();
        
        return view("index", compact("productos"));
    }
    public function form() {
        $productos = productos::all();
        
        return view("form", compact("productos"));
    }
    public function store(Request $request) {
        $pedido=new pedidos();
        $pedido->id_cliente = "";

        $pedido->nombre = $request->nombre;
        $pedido->numero = $request->Numero;
        $pedido->email = $request->email;
        $pedido->direccion = $request->email;

        $pedido->productos = $request->productos;
        $pedido->estado = "Pendiente";
$pedido->save();
       return redirect('/index');
    } 
}
