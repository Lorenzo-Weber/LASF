<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apostasDepositos extends Model
{
    /** @use HasFactory<\Database\Factories\ApostasDepositosFactory> */
    use HasFactory;

    protected $table = 'apostas_depositos';

    protected $fillable = [
        'banco', 
        'deposito', 
        'responsavel', 
        'casa', 
        'valor'
    ];
}
