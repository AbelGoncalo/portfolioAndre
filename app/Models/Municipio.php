<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Municipio extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'municipios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'descricao',
        'provincia_id',
    ];
    protected $guarded = ['id'];
}
