<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    use HasFactory;

    protected $table = 'estoque_cozinha';

    protected $fillable = [
        'data',
        'produto',
        'quantidade',
        'descricao',
    ];
}
