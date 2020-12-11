<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;

class LibroController extends Controller
{
    public $rules = [
        "libro" => ['required', 'string'],
        "editorial" => ['required', 'string'],
        "author" => ['required', 'string'],
        "cantidad" => ['required', 'numeric'],
    ];

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

    
    public function show(Libro $model)
    {
        return view('catalogos.libros.edit',compact('model'));
    }

    public function store(Request $request, Libro $model)
    {
        //$campos=$this->validate($request,$this->rules);
        $model=Libro::query()->create($request->all());
        return redirect()->route('libro');
    }

    public function update(Libro $model,Request $request)
    {
        //$campos=$this->validate($request,$this->rules);
        $model->fill($request->all());
        $model->save();
        return redirect()->route('libro');
    }

    public function destroy(Libro $model)
    {
        $model->delete();
        return redirect()->route('libro');
    }
}
