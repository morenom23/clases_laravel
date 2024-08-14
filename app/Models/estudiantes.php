<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    use HasFactory;

    protected $table = "estudiante";
    protected $fillable = ['id', 'nombre', 'curso', 'telefono', 'correo', 'created_at', 'updated_at'];
}
