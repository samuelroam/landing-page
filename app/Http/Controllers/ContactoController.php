<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function create(){
        return view ('/contacto/formulario');
    }

    public function store(Request $request){

        $contacto = new Contacto;
        $contacto->nombre = $request->input('nombre');
        $contacto->mensaje = $request->input('mensaje');
        $contacto->save();
       // dd($request->all());
        return 'pepe';

    }
}
