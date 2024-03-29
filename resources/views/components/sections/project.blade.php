<section class="project">
    <div class="uk-container uk-container-large">
        <h2 class="project__title">{{ __('project__title') }}</h2>

        <h3 class="project__subtitle">
            {{ __('project__subtitle_1') }}: {{ $allProjects->count() }}
            {{ __('project__subtitle_2') }}: {{ $ongoingProjects->count() }}
        </h3>

        <div class="prject__menu_wrapper uk-flex-between uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            <div>
                @if ($allProjects)
                    <ul class="project__menu uk-padding-remove-horizontal">
                        @foreach ($allProjects as $project)
                            <li class="project__menu-item uk-flex uk-flex-between uk-flex-bottom">
                                <div>
                                    <h4>{{ $project->title }}</h4>
                                    <p>
                                        @if ($project->finished_at)
                                            {{
                                                app()->getLocale() == 'uz'
                                                    ? __('project__finished') . ' ' . ucfirst(\App\Helpers\TextHelper::transliterate(Date::parse($project->finished_at)->format('F, Y')))
                                                    : __('project__finished') . ' ' . Date::parse($project->finished_at)->format('F, Y')
                                            }}
                                        @else
                                            {{ __('project__ongoing') }}
                                        @endif
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ route('project.details', ['slug' => $project->slug]) }}">
                                        {{ __('project__link') }}
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
                <div class="project__link uk-flex uk-flex-middle">
                    <a href="{{ route('project.list') }}">{{ __('project_all__link') }}</a>
                    <img src="{{ asset('assets/img') }}/arrow-right-2.svg" alt="Arrow Right" />
                </div>
            </div>
            <div>
                <img src="{{ asset('assets/img') }}/project-main.png" alt="Main" />
            </div>
        </div>
    </div>
</section>
