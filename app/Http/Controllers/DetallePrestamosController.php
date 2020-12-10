<?php

namespace App\Http\Controllers;

use App\Models\Detalleprestamos;
use Illuminate\Http\Request;

class DetallePrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $rows = Detalleprestamos::query()
            ->orderBy('id', 'desc')
            ->get();

        return view('catalogos.detallesprestamos.index', compact('rows'));  
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogos.detallesprestamos.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model=Detalleprestamos::query()->create($request->all());
        return redirect()->route('detalleprestamo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetallePrestamos  $detallePrestamos
     * @return \Illuminate\Http\Response
     */
    public function show(DetallePrestamos $detallePrestamos)
    {
        return view('catalogos.detallesprestamos.edit',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetallePrestamos  $detallePrestamos
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallePrestamos $detallePrestamos)
    {
        return view('detalleprestamo.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetallePrestamos  $detallePrestamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallePrestamos $model)
    {
        $model->fill($request->all());
        $model->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetallePrestamos  $detallePrestamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallePrestamos $model)
    {
        $model->delete();
        return redirect()->route('detalleprestamo');
    }
}
