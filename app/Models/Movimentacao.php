<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;

    protected $table = 'movimentacao'; // Defina explicitamente a tabela

    protected $fillable = [
        'quantidade',
        'data_movimentacao',
        'id_usuario',
        'id_produto',
        'id_tipo_movimentacao',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }

    public function tipoMovimentacao()
    {
        return $this->belongsTo(TipoMovimentacao::class, 'id_tipo_movimentacao');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
