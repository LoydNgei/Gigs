<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'linkedin',
        'github',
        'portfolio',
        'CV'
    ];

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }
}
