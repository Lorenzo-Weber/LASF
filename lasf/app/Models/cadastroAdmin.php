<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroAdmin extends Model
{
    use HasFactory;
    protected $table = "cadastro_admin";

    protected $fillable = [
        'nome',
        'user',
        'senha'
    ];
}
