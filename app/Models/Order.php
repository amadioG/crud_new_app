<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cod_ped',
        'cliente',
        'produto',
        'quant',
        'valor_ped',
        'valor_desc'
    ];
}