<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'dni',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function hemodialisisIniciadasMedico(): HasMany
    {
        return $this->hasMany(Medicine::class, 'medico_inicia_id');
    }

    public function hemodialisisFinalizadasMedico(): HasMany
    {
        return $this->hasMany(Medicine::class, 'medico_finaliza_id');
    }

    public function hemodialisisIniciadasEnfermero(): HasMany
    {
        return $this->hasMany(Nurse::class, 'enfermero_inicia_id');
    }

    public function hemodialisisFinalizadasEnfermero(): HasMany
    {
        return $this->hasMany(Nurse::class, 'enfermero_finaliza_id');
    }

    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
