<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabla1;

class CrudTabla1Controller extends Controller{
    
    public function view(){
        $Tabla1 = Tabla1::get();
        return view('crud1', compact('Tabla1'));
    }

    public function search(Request $request){
        if($request->id != null){
            $Tabla1 = Tabla1::where('ID', $request->id)->get();
        }else{
            $Tabla1 = Tabla1::get();
        }
        return view('crud1', compact('Tabla1'));
    }

    public function create(Request $request){
            $user = new Tabla1(); 
            if($request->id != null){
                $user->ID = $request->id;
            }
            if($request->nombre != null){
                $user->NOMBRE = $request->nombre;
            }
            if($request->fecha != null){
                $user->FECHA = $request->fecha;
            }
            if($request->estado != null){
                $user->ESTADO = $request->estado;
            }
            if($request->profesion != null){
                $user->PROFESION = $request->profesion;
            }
            if($request->matricula != null){
                $user->MATRICULA = $request->matricula;
            }

            $user->save();
        
            return redirect()->route('datos/byid.search');
    }

    public function update(Request $request){

        if($request->id != null){
            $user = Tabla1::find($request->id);

            if($request->id != null){
                $user->ID = $request->id;
            }
            if($request->nombre != null){
                $user->NOMBRE = $request->nombre;
            }
            if($request->fecha != null){
                $user->FECHA = $request->fecha;
            }
            if($request->estado != null){
                $user->ESTADO = $request->estado;
            }
            if($request->profesion != null){
                $user->PROFESION = $request->profesion;
            }
            if($request->matricula != null){
                $user->MATRICULA = $request->matricula;
            }
            $user->save();
        }
        return redirect()->route('datos.view');
    }

    public function delete(Request $request){
        if($request->id != null){
            $userDelete = Tabla1::find($request->id);
            $userDelete->delete();
        }
        
        return redirect()->route('datos.view');
    }
}
