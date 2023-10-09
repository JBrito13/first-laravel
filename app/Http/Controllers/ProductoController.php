<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductoCollection;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index(Request $request) {

        $productos = new ProductoCollection(Producto::all()->where('estatus', 1));

        $id_categoria = $request->input('categoria');

        if ($id_categoria) {
            $productos = $productos->where('id_categoria', $id_categoria);
        }

        return response()->json($productos);
    }

    public function show($id) {
        $producto = Producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($producto);
    }
}
