<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'cap_usuario';
    public $timestamps = false;

    protected $casts = [
        'activo' => 'boolean',
        'fecha_nacimiento' =>  'timestamp'
    ];
}
