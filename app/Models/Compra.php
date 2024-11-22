<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;

    protected $table = 'compra';

    protected $fillable = [
        'id_fornecedor',
    ];

    public $timestamps = false;
}
