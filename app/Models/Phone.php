<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feature;

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

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
}
