<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apostasApostas extends Model
{
    /** @use HasFactory<\Database\Factories\ApostasApostasFactory> */
    use HasFactory;

    protected $table = "apostas_apostas";

    protected $fillable = [
        'casa', 
        'conta', 
        'aposta', 
        'resultado', 
        'retorno'
    ];
}
