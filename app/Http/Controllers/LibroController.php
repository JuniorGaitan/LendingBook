<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;

class LibroController extends Controller
{

    public function index(Request $request)
    {
        $rows = Libro::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.libros.index', compact('rows'));
    }

    public function add()
    {
        return view('catalogos.libros.add');
    }

    public function show(Libro $libros)
    {
        return view('catalogos.libros.edit', compact('model'));
    }

    public function store(Request $request)
    {
        $model = new Libro;

        $model->combustible = $request->combustible;

        $model->save();

        return redirect()->route('libro');
    }

    public function update(Request $request, Libro $libros)
    {
        $model->combustible = $request->combustible;

        $model->save();

        return redirect()->route('libro');
    }

    public function destroy(Libro $model)
    {
        $model->delete();
        return redirect()->route('libro');
    }
}
