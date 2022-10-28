<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cavalo extends Model
{
    use HasFactory;
    protected $fillable = [
        'raca','funcao','idade','pelo','valor'
    ];

}