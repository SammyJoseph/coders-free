<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // con este código la clase Curso guardaría en la tabla users
    // en vez de la tabla curso (por defecto)
    // protected $table = "users";
}
