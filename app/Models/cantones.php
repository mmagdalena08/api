<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cantones extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'canton',
        'imagen',
        'eliminado',
        'id_provincia'

    ];

}
