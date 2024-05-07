<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'comp_name',
        'logo',
        'title',
        'user_id',
        'category_id',
        'type_id',
        'status',
        'job_details',
        'requirment',
        'dateline',
        'location',
        'short_des',
        'salary',
        'experience_id',
    ];

    protected $casts = [
        'status' => 'boolean',
        'dateline' => 'date',
    ];

    // Relationships

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
    public function jobApplies()
    {
        return $this->hasMany(JobApply::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
