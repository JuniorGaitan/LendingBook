<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $rows = Prestamo::query()
                ->orderBy('id', 'desc')
                ->get();
    
            return view('catalogos.prestamos.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $model=Prestamo::query()->create($request->all());
        return redirect()->route('prestamo');
    }   

    public function show(Prestamo $libros)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $libros)
    {
        return view('app.personas.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $model)
    {
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
