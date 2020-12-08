<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Sexo;
use App\Models\Categorias;
use App\Models\Persona;


use Illuminate\Http\Request;

class ApiAppsController extends Controller
{
    public function libros (Request $request){
       $rows=Libro::All();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
   
     public function categorias(Request $request)
     {
         $rows = Categorias::query()
             ->when($request->buscar, function ($query) use ($request) {
                 $buscar = "%" . $request->buscar . "%";
                 $query->where('categoria', 'ilike', $buscar);
             })
             ->get();
         $data = [
             'data' => $rows
         ];
         return response()->json($data, 200);
     }
    public function sexos (Request $request){
        $rows=Libro::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
    public function personas (Request $request){
        $rows=Persona::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
}
