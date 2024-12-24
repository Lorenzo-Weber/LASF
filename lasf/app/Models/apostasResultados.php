<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apostasResultados extends Model
{
    protected $table = 'apostas_resultados';

    protected $fillable = [
        'conta',
        'casa',
        'responsavel',
        'vendedor',
        'status',
        'caixaAtual',
        'pendente',
        'depositos',
        'resultado',
        'inicioMes',
        'girando'
    ];
}
