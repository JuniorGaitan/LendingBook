<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public $rules = [
        "nombres" => ['required', 'string'],
        "apellidos" => ['required', 'string'],
        "identidad" => ['required', 'string'],
        "sexo_id" => ['required', 'numeric'],
        "etnia_id" => ['required', 'numeric'],
        "barrio_id" => ['required', 'numeric'],
        "direccion" => ['required', 'string'],
        "telefono" => ['required', 'string'],
        "celular" => ['required', 'string'],
        "fecha_nacimiento" => ['required', 'date'],
        "cooperativa_id" => ['required', 'numeric'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('app.personas.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Persona $model)
    {
        $campos=$this->validate($request,$this->rules);

        $model->create($campos);


        return response()->json($campos);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
