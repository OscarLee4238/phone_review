<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'description',
        'release_year',
        'image',
        'brand', 
        'created_at',
        'updated_at'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
