<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nome',
        'professor',
        'escola',
        'qtd_alunos'
    ];
}
