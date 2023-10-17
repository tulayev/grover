<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vacation;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\CKEditor\Fields\CKEditor; 
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class VacationResource extends Resource
{
	public static string $model = Vacation::class;

	public static string $title = 'Vacations';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Translatable::make('Title', 'title')
                ->priorityLanguages(array_keys(config('locales')))
                ->removable(),
            Translatable::make('Location', 'location')
                ->priorityLanguages(array_keys(config('locales')))
                ->removable(),
            CKEditor::make('Description', 'description'), 
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'title' => ['required'],
            'location' => ['required'],
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
