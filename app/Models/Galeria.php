<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Galeria extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'galerias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'descricao',
        'agencia_id',
    ];
    protected $guarded = ['id'];
}
