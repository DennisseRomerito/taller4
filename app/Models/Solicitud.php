<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicitud';

    // Desactivamos timestamps estándar
    public $timestamps = false;

    protected $fillable = [
        'tema', 'descripcion', 'area', 'estado', 'observacion', 'usuarioExt'
    ];

    protected static function boot()
    {
        parent::boot();

        // Al crear asignamos fecha_registro automáticamente
        static::creating(function ($model) {
            $model->fecha_registro = now();
        });

        // Al actualizar asignamos fecha_cierre automáticamente
        static::updating(function ($model) {
            $model->fecha_cierre = now();
        });
    }
}
