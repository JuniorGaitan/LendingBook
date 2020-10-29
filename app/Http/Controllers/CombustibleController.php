<?php

namespace App\Http\Controllers;

use App\Models\Combustible;
use Illuminate\Http\Request;

class CombustibleController extends Controller
{
    public function store(Request $request)
    {       

        $model = new Combustible;

        $model->combustible = $request->combustible;
        
        $model->save();
    }
}
