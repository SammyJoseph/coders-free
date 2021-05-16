<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        // $cursos = Curso::all(); //carga todos los cursos de la bd
        $cursos = Curso::orderBy('id', 'desc')->paginate(); //carga solo 15 registros
        // return $cursos; //retorna el arreglo con toda los cursos

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
        $request->validate([ //validar entes de guardar en la bd / de preferencia, tener las validaciones en otro archivo
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);

        // return $request->all(); //mostrar todo el arreglo tomado del formulario
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        // return $curso; //mostrar el objeto tomado del formulario
        $curso->save();
        // return redirect()->route('cursos.show', $curso->id);
        return redirect()->route('cursos.show', $curso); //$curso hace lo mismo que $curso->id
    }

    /*public function show($curso){
        // return view('cursos.show', ['curso' => $curso]);
        return view('cursos.show', compact('curso')); //forma abreviada de la línea anterior
    }*/
    public function show($id){
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $request->validate([ //validar entes de guardar en la bd
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}