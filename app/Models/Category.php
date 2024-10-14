<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Разрешённые поля для массового заполнения
    protected $fillable = ['name'];

    /**
     * Связь один ко многим с моделью Document
     */
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
