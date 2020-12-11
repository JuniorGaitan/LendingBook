<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
   
    public function index()
    {
            $rows = Prestamo::query()
                ->orderBy('id', 'desc')
                ->get();
    
            return view('catalogos.prestamos.index', compact('rows'));
    }
    public function add()
    {        //
        return view('catalogos.prestamos.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //$campos=$this->validate($request,$this->rules);
        $rows=Prestamo::query()->create($request->all());
       
        return view('catalogos.detallesprestamos.detalles', compact('rows'));
        //return redirect()->route('detalleprestamo.add',compact('model'));
    }   

     
    public function show(Prestamo $model)
    {
        return view('catalogos.prestamos.edit',compact('model'));
    }


    public function edit(Prestamo $model)
    {
        return view('catalogos.prestamos.edit', compact('model'));
    }

    
    public function update(Prestamo $model,Request $request)
    {
        //$campos=$this->validate($request,$this->rules);
        $model->fill($request->all());
        $model->save();
        return redirect()->route('prestamo');
    }
   


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $model)
    {
        $model->delete();
        return redirect()->route('prestamo');
    }
}
