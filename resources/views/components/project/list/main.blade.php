<main class="projects">
    <div class="uk-container uk-container-large">
        @if ($allProjects)
            <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
                @foreach ($allProjects as $project)
                    <div class="projects__card">
                        <div>
                            <img src="{{ asset('assets/img/project_building.png') }}" alt="{{ $project->title }}" />
                        </div>
                        <div>
                            <div class="uk-flex uk-flex-between uk-flex-bottom">
                                <div>
                                    <h2>{{ $project->title }}</h2>
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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</main>
