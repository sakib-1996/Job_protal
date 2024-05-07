<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'image',
        'user_id',

        
        'date_of_birth',
        'blood_group',
        'nid',
        'passport_no',
        'status',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
