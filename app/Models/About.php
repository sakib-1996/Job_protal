<?php

// About.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['description'];
    public function topCompanies()
    {
        return $this->hasMany(TopCompany::class, 'top_com');
    }
    
}
