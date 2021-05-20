<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contacto.index');
    }
    public function store(Request $request){ //Request recupera la información del formulario
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $correo = new ContactMailable($request->all());
        Mail::to('sam.tab.paz@gmail.com')->send($correo);
        
        return redirect()->route('contacto.index')->with('info', 'Mensaje enviado'); //with() envía en mensaje de sesión y se imprime en contacto.index
    }
}
