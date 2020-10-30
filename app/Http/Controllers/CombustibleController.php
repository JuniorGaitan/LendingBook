<?php

namespace App\Http\Controllers;

use App\Models\Combustible;
use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;

class CombustibleController extends Controller
{

    public function add(){
        return view('catalogos.combustible.add');
    }

    public function show(Combustible $model){
        return 'hola';
    }

    


    public function store(Request $request)
    {       

        $model = new Combustible;

        $model->combustible = $request->combustible;
        
        $model->save();
    }
}
