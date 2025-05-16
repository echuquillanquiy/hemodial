<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;






    public function enfermeroInicia(): BelongsTo
    {
        return $this->belongsTo(User::class, 'enfermero_inicia_id');
    }

    public function enfermeroFinaliza(): BelongsTo
    {
        return $this->belongsTo(User::class, 'enfermero_finaliza_id');
    }
}
