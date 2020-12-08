<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

    public $rules = [
        'categoria' => ['required','string']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Categorias::query()
            ->orderBy('id', 'desc')
            ->get();
        return view('catalogos.categorias.index', compact('rows'));
   
        //
    }

    public function add(){
        return view('catalogos.categorias.add');
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
        $campos=$this->validate($request,$this->rules);
        $model=Categorias::query()->create($campos);
        return redirect()->route('categoria');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    
    public function show(Categorias $model)
    {
        return view('catalogos.categorias.edit',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorias $model){

        return view('catalogos.categorias.edit',compact('model'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */

    
    public function update(Categorias $model,Request $request){
        $campos=$this->validate($request,$this->rules);
        $model->fill($campos);
        $model->save();
        return redirect()->route('categoria');
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorias  $categorias
     * @return \Illuminate\Http\Response
     */

    
    public function destroy(Categorias $model)
    {
        $model->delete();
        return redirect()->route('categoria');
        //
    }
}
