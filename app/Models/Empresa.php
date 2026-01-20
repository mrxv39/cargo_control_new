<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $fillable = [
        'name',
        'cif',
        'telefono',
        'email',
        'direccion',
        'ciudad',
        'provincia',
        'cp',
        'pais',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'empresa_id');
    }

    public function viajes(): HasMany
    {
        return $this->hasMany(Viaje::class, 'empresa_id');
    }
}
