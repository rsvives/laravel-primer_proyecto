<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function todosLosProductos()
    {
        // echo "estoy mostrando todos los productos";

        $productos = Producto::all();
        return $productos;
    }
    public function insertarProducto(Request $req)
    {
        // $precio = 3.99;
        // $stock = 20;

        // $producto = new Producto;
        // $producto->nombre = $nombre;
        // $producto->descripcion = $descripcion;
        // $producto->precio = $precio;
        // $producto->stock = $stock;
        // $data = ["accion" => "insertando en la base de datos..."];

        dd($req->input('nombreProducto'));
        // $producto->save();
    }
    public function formularioNuevoProducto()
    {

        return view('nuevoProducto');
    }
}
