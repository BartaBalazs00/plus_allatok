<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlusAllatok extends Model
{
    use HasFactory;
    protected $fillable = [
        'nev'
    ];

    protected $visible = [
        'id',
        'nev'
    ];
}
