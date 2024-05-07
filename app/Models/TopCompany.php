<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopCompany extends Model
{
    use HasFactory;
    protected $fillable = ['about_id', 'top_com'];

    public function about()
    {
        return $this->belongsTo(About::class, 'about_id');
    }

    public function companyProfile()
    {
        return $this->belongsTo(CompanyProfile::class, 'top_com');
    }
}
