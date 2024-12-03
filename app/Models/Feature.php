<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phone;


class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function phones()
    {
        return $this->belongsToMany(Phone::class);
    }
}
