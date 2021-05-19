<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

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

    public function store(StoreCurso $request){
    // public function store(Request $request){
        /* las validaciones pasaron a StoreCurso
        $request->validate([ //validar entes de guardar en la bd / de preferencia, tener las validaciones en otro archivo de tipo Store
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);*/

        // return $request->all(); //mostrar todo el arreglo tomado del formulario
        
        /* de esta forma tendríamos que asignar uno a unos los campos
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        // return $curso; //mostrar el objeto tomado del formulario
        $curso->save();
        // return redirect()->route('cursos.show', $curso->id);
        return redirect()->route('cursos.show', $curso); //$curso hace lo mismo que $curso->id
        */
        
        //asignación masiva con eloquent (cumple lo mismo que arriba)
        /*$curso = Curso::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category
        ]);*/

        //asignación masiva automática con eloquent (cumple lo mismo que arriba)
        // return $request->all(); //imprime el arreglo obtenido del formulario

        $curso = Curso::create($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    /*public function show($curso){
        // return view('cursos.show', ['curso' => $curso]);
        return view('cursos.show', compact('curso')); //forma abreviada de la línea anterior
    }*/
    public function show($id){
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){ //cargar vista de edición
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){ //procesar edición en la bd
        $request->validate([ //validar entes de guardar en la bd
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        /*$curso->name = $request->name; //se reemplaza abajo por asignación masiva
        $curso->description = $request->description;
        $curso->category = $request->category;
        
        $curso->save();*/
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}