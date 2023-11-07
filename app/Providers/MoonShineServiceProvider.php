<?php

namespace App\Providers;

use App\MoonShine\Resources\MemberResource;
use App\MoonShine\Resources\PhotoResource;
use App\MoonShine\Resources\ProjectResource;
use App\MoonShine\Resources\SettingsResource;
use App\MoonShine\Resources\TestimonialResource;
use App\MoonShine\Resources\VacationResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            // MenuGroup::make('moonshine::ui.resource.system', [
            //     MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
            //         ->translatable()
            //         ->icon('users'),
            //     MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
            //         ->translatable()
            //         ->icon('bookmark'),
            // ])->translatable(),

            MenuItem::make('Testimonials', new TestimonialResource())
                ->icon('heroicons.chat-bubble-left-ellipsis'),
            MenuItem::make('Photos', new PhotoResource())
                ->icon('heroicons.photo'),
            MenuItem::make('Settings', new SettingsResource())
                ->icon('heroicons.cog'),
            MenuItem::make('Team Members', new MemberResource())
                ->icon('heroicons.user-group'),
            MenuItem::make('Vacations', new VacationResource())
                ->icon('heroicons.briefcase'),
            MenuItem::make('Projects', new ProjectResource())
                ->icon('heroicons.home-modern'),
        ]);
    }
}
