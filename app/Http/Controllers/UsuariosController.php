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
                "hobbies" => ["correr", "nadar"]
            ],
            [
                "nombre" => "zutanito",
                "email" => "zutanito@mail.com",
                "hobbies" => ["fotografía", "programar"]
            ],
            [
                "nombre" => "maría",
                "email" => "maria@mail.com",
                "hobbies" => ["videojuegos", "nadar", "crossfit"]
            ],
        ];

        // echo "el usuario a buscar tiene la id: $id";

        //var_dump();
        $datosVista = $arrayUsuarios[$id - 1];
        return view('user', $datosVista);
    }
}
