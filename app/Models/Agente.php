<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Agente extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'agentes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'descricao',
        'provincia',
        'municipio',
        'bairro',
        'nif',
        'numeroAgente',
    ];
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
