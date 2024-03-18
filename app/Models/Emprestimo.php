<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    use HasFactory;
    protected $fillable = [
        'livro_id',
        'user_id',
        'tipo_emprestimo_id',
        'bibliotecario_id',
        'data_emprestimo',
    ];
}
