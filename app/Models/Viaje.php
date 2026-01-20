<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Viaje extends Model
{
    protected $table = 'viajes';

    protected $fillable = [
        'empresa_id',
        'user_id',
        'referencia',
        'fecha_salida',
        'fecha_llegada',
        'origen',
        'destino',
        'notas',
    ];

    protected $casts = [
        'notas' => 'array',
        'fecha_salida' => 'date',
        'fecha_llegada' => 'date',
    ];

    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
