<?php

namespace App\Http\Controllers;

use App\Models\cantones;
use Illuminate\Http\Request;

class CantonesController extends Controller
{
    
    public function index()
    {
        $canton = cantones::where('eliminado',1)->get();
        return response()->json($canton );
    }

    

    
    public function store(Request $request)
    {
        $validData = $request->validate([
            'canton' => 'required|string|max:50',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_provincia' => 'required'
        ]);

        $validData['imagen'] = $request->file('imagen')->getClientOriginalName();
        $request->file('imagen')->storeAs("public/imagen/animales/", $validData['imagen']);

        cantones::create([
            'canton' => $validData['canton'],
            'imagen' => $validData['imagen'],
            'id_provincia' => $validData['id_provincia'],
            'eliminado' => 1
        ]);
        return response()->json(['message' => 'canton registrado']);
    }

    public function update(Request $request,  $id)
    {
        $$canton = catones::find($id);
        if(is_null($canton)){
            return response()->json(['message'=>'No enconntrado']);
        }
        $validData = $request->validate([
            'canton' => 'required|string|max:50',
            'id_provincia' => 'required'
        ]);
        $canton->canton= $validData['canton'];
        $canton->id_provincia = $validData['id_provincia'];
        $canton->save();
        return response()->json(['message'=>'Actualizado']);
    }

   
    public function destroy($id)
    {
        $canton = cantones::find($id);
        if(is_null($canton)){
            return response()->json(['message'=>'No enconntrado']);
        }
        $canton->eliminado = 0;
        $canton->save();
        return response()->json(['message'=>'Eliminado']);
    }
    
}
