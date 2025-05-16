<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dni',
        'n_historia',
        'autogenerado',
        'n_sesion',
        'acceso_venoso',
        'acceso_arterial',
        'estado',
        'peso_seco',
        'shift_id'
    ];
}
