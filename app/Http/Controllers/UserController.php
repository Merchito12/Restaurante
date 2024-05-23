<?php

namespace App\Http\Controllers;

use App\Models\Clientesc;
use App\Models\pedidos;
use App\Models\productos;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user_id = $request->user_id;
        $admin = Clientesc::find($user_id);


        $users = Clientesc::all();

        return view('clientes', compact('users', 'admin')); //crea un array asociativo donde mandad las claves como nombres de variables con sus valores
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estado = $request->estado;
        if ($estado == "") {
            $productos = pedidos::all();

            return view('pedidos', compact('productos'));
        } else {
            $productos = pedidos::where('estado', $estado)->get();
            return view('pedidos', compact('productos'));
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $producto = pedidos::find($id);
        switch ($producto->estado) {
            case 'Entregado':
                $producto->estado = 'Pendiente';
                $producto->save();
                break;
            case 'Pendiente':
                $producto->estado = 'Entregado';
                $producto->save();
                break;
        }

        return response()->json(['message' => 'Estado actualizado correctamente']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
