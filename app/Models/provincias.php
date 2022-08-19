<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincias extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'provincia',
        'eliminado'
    ];
}
