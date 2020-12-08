<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Sexo;
use App\Models\Categorias;
use App\Models\Persona;
use App\Models\Barrio;


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
        $rows=Sexo::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
    public function barrios (Request $request){
       
        $rows = Barrio::query()
        ->when($request->buscar, function ($query) use ($request) {
            $buscar = "%" . $request->buscar . "%";
            $query->where('barrio', 'ilike', $buscar);
        })
        ->get();
    $data = [
        'data' => $rows
    ];
    return response()->json($data, 200);
    }
    public function personas (Request $request){
        $rows=Persona::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
}
