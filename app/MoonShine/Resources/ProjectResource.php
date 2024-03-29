<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use VI\MoonShineSpatieTranslatable\Fields\Translatable;
use MoonShine\CKEditor\Fields\CKEditor;
use MoonShine\Fields\Date;
use MoonShine\Fields\Image;
use MoonShine\Actions\FiltersAction;

class ProjectResource extends Resource
{
	public static string $model = Project::class;

	public static string $title = 'Projects';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Title', 'title'),
            CKEditor::make('Description', 'description'),
            Date::make('Finished date', 'finished_at')
                ->format('d.m.Y'),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'title' => ['required'],
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
