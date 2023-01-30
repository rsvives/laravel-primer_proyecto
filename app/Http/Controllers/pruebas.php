<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebas extends Controller
{
    //
    public function hacerPrueba()
    {
        $data = [
            "usuario" => "marta",
            "email" => "marta@mail.com",
            "hobbies" => ["1hobbie", "otro hobbie"]
        ];
        // var_dump($data);
        // die();

        return view('prueba', $data);
    }
}
