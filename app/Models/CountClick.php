<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountClick extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
        'qtdclick',
    ];
}
