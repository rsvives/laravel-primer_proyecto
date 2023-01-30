<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function findUserById($id)
    {
        $arrayUsuarios = [
            [
                "nombre" => "menganito",
                "email" => "meng@mail.com",
                "tipo" => "normal",
                "hobbies" => ["correr", "nadar"]
            ],
            [
                "nombre" => "zutanito",
                "email" => "zutanito@mail.com",
                "tipo" => "normal",
                "hobbies" => ["fotografía", "programar"]
            ],
            [
                "nombre" => "maría",
                "email" => "maria@mail.com",
                "tipo" => "vip",
                "hobbies" => ["videojuegos", "nadar", "crossfit"]
            ],
        ];

        // echo "el usuario a buscar tiene la id: $id";

        //var_dump();
        $datosVista = $arrayUsuarios[$id - 1];
        return view('user', $datosVista);
    }
}
