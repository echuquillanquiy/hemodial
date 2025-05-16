<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;



    public function paciente(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicoInicia(): BelongsTo
    {
        return $this->belongsTo(User::class, 'medico_inicia_id');
    }

    public function medicoFinaliza(): BelongsTo
    {
        return $this->belongsTo(User::class, 'medico_finaliza_id');
    }
}
