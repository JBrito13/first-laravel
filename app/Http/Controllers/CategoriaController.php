<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        // return dd('Desde mi API');

        // return response()->json(['categorias' => Categoria::all()]);

        return new CategoriaCollection(Categoria::all());
    }

    public function show($id)
{
    $categoría = Categoria::find($id);

    if (!$categoría) {
        return response()->json(['message' => 'Categoría no encontrada'], 404);
    }

    return response()->json($categoría);
}
}
