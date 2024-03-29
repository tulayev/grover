<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'slug', 'description', 'finished_at'];

    protected $translatable = ['description'];

    protected static function boot(): void {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->title);
        });

        static::deleting(function ($model) {
            $folderPath = storage_path() . '\\app\\public\\';
            foreach ($model->images as $item) {
                $filePath = $folderPath . $item->image;
                if (File::exists($filePath)) {
                    File::delete($filePath);
                }
            }
        });
    }

    public function images(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
}
