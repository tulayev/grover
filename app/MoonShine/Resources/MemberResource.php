<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class MemberResource extends Resource
{
	public static string $model = Member::class;

	public static string $title = 'Members';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Translatable::make('Name', 'name')
                ->priorityLanguages(array_keys(config('locales')))
                ->removable(),
            Translatable::make('Position', 'position')
                ->priorityLanguages(array_keys(config('locales')))
                ->removable(),
            Text::make('Email', 'email'),
            Text::make('Phone', 'phone'),
            Image::make('Image', 'image')
                ->dir('/') // The directory where the files will be stored in storage (by default /)
                ->disk('public') // Filesystems disk
                ->allowedExtensions(['jpg', 'gif', 'png']),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'name' => ['required'],
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
