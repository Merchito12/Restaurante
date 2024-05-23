<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Clientesc;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
        
        
        $authHeader = $_SERVER['HTTP_AUTHORIZATION'];
       
    $token = explode(" ", $authHeader)[1];

    $clave= base64_decode($token);

    $decodedToken = base64_decode($token); // Decodificar el token
    list($user, $password) = explode(":", $decodedToken);
        //separa usuario y contraseña
        if ($user == "" or $password == "") {
            return "400";
        } else {
            $user1 = Clientesc::where("email", "=", $user)->first();
            if ($user1) {
                if(password_verify($password,$user1['password'])){
                    return $user1;
                }
                 
                
                else {
                    return "403";
                }
            } else {
                return "403";            }
        }
    }
}