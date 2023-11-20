<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function  autenticar(Request $request)
    {
      $request->header('Access-Control-Allow-Origin', '*');

        //echo json_encode($_SERVER, JSON_PRETTY_PRINT);
        //die();

        $usser = $_SERVER["PHP_AUTH_USER"];
        $password = $_SERVER["PHP_AUTH_PW"];


        if($usser == "tomas" || $password == 07100)
        {
            return response()->json("Esta autorizado");
        }
        else
        {
            return response()->json("NO esta autorizado error-403");
        }
        
    }

    public function  createuser(Request $request)
    {
      $request->header('Access-Control-Allow-Origin', '*');

        //echo json_encode($_SERVER, JSON_PRETTY_PRINT);
        //die();

        $usser = $_SERVER["PHP_AUTH_USER"];
        $password = $_SERVER["PHP_AUTH_PW"];


        
        
    }
}
