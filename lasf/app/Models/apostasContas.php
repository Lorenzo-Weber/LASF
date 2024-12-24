<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apostasContas extends Model
{
    /** @use HasFactory<\Database\Factories\ApostasContasFactory> */
    use HasFactory;

    protected $table = 'apostas_contas';

    protected $fillable = [
        'conta', 
        'casa', 
        'saldo', 
        'status'
    ];
}
