<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    use HasFactory;

    protected $fillable = ['code', 'name', 'form_of_educate', 'srok_of_educate', 'na_baze'];
    public function images()
    {
        return $this->belongsToMany(Image::class, 'image_specialty');
    }
}
