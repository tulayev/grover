<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Testimonial;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;
use MoonShine\Actions\FiltersAction;

class TestimonialResource extends Resource
{
	public static string $model = Testimonial::class;

	public static string $title = 'Testimonials';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Translatable::make('Author', 'author')
                ->priorityLanguages(array_keys(config('locales')))
                ->removable(),
            Translatable::make('Text', 'text')
                ->priorityLanguages(array_keys(config('locales')))
                ->removable(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'author' => ['required'],
            'text' => ['required'],
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
