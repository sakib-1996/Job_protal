<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pluging extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'des',
        'status',
        'key_word',
    ];

}
