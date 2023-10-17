<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Vacation extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'location', 'description'];

    protected $translatable = ['title', 'location', 'description'];
}
