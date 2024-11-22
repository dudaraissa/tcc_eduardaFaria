<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMovimentacao extends Model
{
    use HasFactory;

    protected $table = 'tipo_movimentacao'; // Define explicitamente a tabela

    protected $fillable = [
        'descricao',
    ];
}
