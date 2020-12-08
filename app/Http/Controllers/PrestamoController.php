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
    }

    public function show(Prestamo $libros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestamo $libros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestamo $libros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestamo $libros)
    {
        //
    }
}
