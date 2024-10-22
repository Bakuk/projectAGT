<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'abbreviated', 'date_create', 'address', 'filialy', 'representation',
        'work_schedule', 'phone', 'fax', 'email'];
}
