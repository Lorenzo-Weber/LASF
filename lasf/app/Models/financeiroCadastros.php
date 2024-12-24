<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiroCadastros extends Model
{
    /** @use HasFactory<\Database\Factories\FinanceiroCadastrosFactory> */
    use HasFactory;

    protected $table = 'financeiro_cadastros';

    protected $fillable = [
        'nome', 
        'cpf', 
        'endereco', 
        'cep', 
        'numero', 
        'email', 
        'senha', 
        'agente', 
        'status', 
        'loginBet', 
        'senhaBet', 
        'casa', 
        'Data de nascimento'
    ];
}
