<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Sexo;
use Illuminate\Http\Request;

class ApiAppsController extends Controller
{
    public function colores(Request $request){
        $rows=Color::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }

    public function sexos(){
        $rows=Sexo::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
}
