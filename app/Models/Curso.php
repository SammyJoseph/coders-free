<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // con este código la clase Curso guardaría en la tabla users en vez de la tabla curso (por defecto)
    // protected $table = "users";

    // protected $fillable = ['name', 'category', 'description']; //los campos aceptados por la asignación masiva en CursoController
    //protected $guarded = ['status']; //los campos protegidos (no aceptados) por la asignación masiva (reemplaza el código de arriba)
    protected $guarded = []; //aún no tengo campos protegidos
}
