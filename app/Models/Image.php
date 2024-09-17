<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        // Add other attributes that you want to allow mass assignment for
    ];

    public function news()
    {
        return $this->belongsToMany(News::class, 'image_news')->withPivot('is_cover');
    }

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class, 'specialty_image');
    }
}
