<?php

namespace App\Http\Controllers;

use App\Models\DetallePrestamos;
use Illuminate\Http\Request;

class DetallePrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

    // //Definiendo la tabla del modelo
    // protected $table = 'prestamos';

    // //Definiendo los campos de la tabla
    // protected $fillable = [
    // 'responsable_libro_id',
    // 'fecha_salida',
    // 'fecha_entrega',
    // 'estado_id',
    // 'observaciones'];
    //     //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetallePrestamos  $detallePrestamos
     * @return \Illuminate\Http\Response
     */
    public function show(DetallePrestamos $detallePrestamos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetallePrestamos  $detallePrestamos
     * @return \Illuminate\Http\Response
     */
    public function edit(DetallePrestamos $detallePrestamos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetallePrestamos  $detallePrestamos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetallePrestamos $detallePrestamos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetallePrestamos  $detallePrestamos
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetallePrestamos $detallePrestamos)
    {
        //
    }
}
