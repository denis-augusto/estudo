<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'nome',
        'telefone',
        'data_nascimento',
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];
}
