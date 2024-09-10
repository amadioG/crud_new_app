<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome',
        'idade',
        'cpf',
        'rg',
        'sexo',
        'email',
        'senha'
    ];
}
