<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'preco',
        'total_estoque',
        'cod_barras',
        'id_fornecedor',
    ];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'id_fornecedor');
    }
}
