<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use App\Models\Sexo;
use App\Models\Categorias;
use App\Models\Persona;
<<<<<<< HEAD
use App\Models\Estado;
=======
use App\Models\Barrio;
>>>>>>> 0e4a1fc39811bb445dc7f9968825df12c6c44e67


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

    public function estados (Request $request){
        $rows=Estado::all();
        $data=[
            'data'=>$rows
        ];
        return response()->json($data,200);
    }
}
