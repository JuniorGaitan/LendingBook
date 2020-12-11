<?php

namespace App\Http\Controllers;

use App\Models\Detalleprestamo;
use Illuminate\Http\Request;

class DetallePrestamosController extends Controller
{
    
    public function index(){
        $rows = Detalleprestamo::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.detallesprestamos.index', compact('rows'));  
    }
    public function add()
    {
        return view('catalogos.detallesprestamos.add');
    }

    
    public function store(Request $request)
    {
        $model=Detalleprestamo::query()->create($request->all());
        return redirect()->route('prestamos');
    }

    public function show(Detalleprestamo $detallePrestamos)
    {
        return view('catalogos.detallesprestamos.detalles',compact('model'));
    }
    public function edit(Detalleprestamo $detallePrestamos)
    {
        return view('catalogos.detallesprestamos.edit',compact('model'));
    }
    public function update(Request $request, Detalleprestamo $model)
    {
        $model->fill($request->all());
        $model->save();
    }

   
    public function destroy(Detalleprestamo $model)
    {
        $model->delete();
        return redirect()->route('detalleprestamo');
    }
}
