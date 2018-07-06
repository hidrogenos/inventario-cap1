<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'cap_producto';
    public $timestamps = false;
    protected $casts = [
        'Activo' => 'boolean'
    ];
}
