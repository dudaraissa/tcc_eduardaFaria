<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedor';

    protected $fillable = [
        'nome',
        'cnpj',
        'email',
        'celular',
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'id_fornecedor');
    }
}
