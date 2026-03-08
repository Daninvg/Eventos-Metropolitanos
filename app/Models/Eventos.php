<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = "compupapu";

    protected $fillable = [
        'descripcion',
        'imagen',
        'estado'
    ];

    public function relacionUsuarios()
    {
        return $this->belongsTo(User::class);
    }
}
