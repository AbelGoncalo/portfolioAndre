<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Provincia extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'provincias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'descricao',
    ];
    protected $guarded = ['id'];
}
