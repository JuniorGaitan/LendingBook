<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function store(Request $request)
    {       

        $model = new Color;

        $model->color = $request->color;
        
        $model->save();
    }
}
