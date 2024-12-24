<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroCasa extends Model
{
    /** @use HasFactory<\Database\Factories\CadastroCasaFactory> */
    use HasFactory;

    protected $table = 'cadastro_casa';

    protected $fillable = ['nome'];
}
