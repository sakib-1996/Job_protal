<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'job_id',
        'linkedIn_link',
        'facebook_link',
        'facebook_link',
        'portfolio_website',
        'status',

        'edu_information',
        'job_exp',
        'credentials',

        'expected_salary',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
