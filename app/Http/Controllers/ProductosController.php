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
        print("<pre>" . print_r($productos, true) . "</pre>");
    }
    public function insertarProducto()
    {
        $nombre = "mi producto";
        $descripcion = "lorem ipsum dolor";
        $precio = 3.99;
        $stock = 20;

        $producto = new Producto;
        $producto->nombre = $nombre;
        $producto->descripcion = $descripcion;
        $producto->precio = $precio;
        $producto->stock = $stock;

        $producto->save();
    }
}
