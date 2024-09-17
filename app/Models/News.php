<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    // Связь "многие ко многим" для всех изображений
    public function images()
    {
        return $this->belongsToMany(Image::class, 'image_news')->withPivot('is_cover');
    }

    // Метод для получения изображения обложки
    public function coverImage()
    {
        return $this->images()->wherePivot('is_cover', true)->first();
    }
}
