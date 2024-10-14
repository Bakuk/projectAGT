<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    // Разрешённые поля для массового заполнения
    protected $fillable = ['title', 'file_path', 'category_id'];

    /**
     * Связь многие к одному с моделью Category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
