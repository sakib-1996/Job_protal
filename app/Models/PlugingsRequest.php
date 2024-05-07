<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlugingsRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'plugings_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $attributes = [
        'status' => false,
    ];

    public function pluging()
    {
        return $this->belongsTo(Pluging::class, 'plugings_id');
    }
}
