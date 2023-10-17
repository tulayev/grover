<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Image;
use MoonShine\Actions\FiltersAction;

class PhotoResource extends Resource
{
	public static string $model = Photo::class;

	public static string $title = 'Photos';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Image::make('Image', 'image')
                ->dir('/') // The directory where the files will be stored in storage (by default /)
                ->disk('public') // Filesystems disk
                ->allowedExtensions(['jpg', 'gif', 'png']),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'image' => ['required'],
        ];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
