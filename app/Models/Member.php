<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Spatie\Translatable\HasTranslations;

class Member extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'position', 'email', 'phone', 'image'];

    protected $translatable = ['name', 'position'];

    protected static function boot(): void {
        parent::boot();

        static::deleting(function ($model) {
            $folderPath = storage_path() . '\\app\\public\\';
            $filePath = $folderPath . $model->image;
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        });
    }
}
