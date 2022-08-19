<?php

namespace App\Http\Controllers;

use App\Models\provincias;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
    
    public function index()
    {
        $provincia= provincias::where('eliminado',1)->get();
        return response()->json( $provincia);
    }


    public function store(Request $request)
    {
        //
    }

   
    public function update(Request $request, provincias $provincias)
    {
        //
    }

    public function destroy(provincias $provincias)
    {
        //
    }
}
