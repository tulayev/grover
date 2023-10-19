<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Settings;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Actions\FiltersAction;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;

class SettingsResource extends Resource
{
	public static string $model = Settings::class;

	public static string $title = 'Settings';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Key', 'key')
                ->locked(),
            Translatable::make('Value', 'value')
                ->priorityLanguages(array_keys(config('locales')))
                ->removable(),
            Text::make('Url', 'url'),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'key' => ['required'],
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
