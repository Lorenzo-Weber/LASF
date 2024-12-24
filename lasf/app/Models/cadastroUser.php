<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroUser extends Model
{
    /** @use HasFactory<\Database\Factories\CadastroUserFactory> */
    use HasFactory;

    protected $table = 'cadastro_user';

    protected $fillable = [
        'nome', 
        'nick'
    ];
}
