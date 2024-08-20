<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estudiantes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "estudiante";
    protected $fillable = ['id', 'nombre', 'curso', 'telefono', 'correo', 'created_at', 'updated_at'];
}
