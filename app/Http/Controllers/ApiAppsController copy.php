<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Sexo;

use Illuminate\Http\Request;

class ApiAppsController extends Controller
{
    public function colores (Request $request){
       $rows=Libro::All();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
    public function sexos (Request $request){
        $rows=Libro::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
}
