<section class="project">
    <div class="uk-container uk-container-large">
        <h2 class="project__title">
            {{ str_contains(url()->current(), 'projects') ? 'Other projects' : 'Projects' }}
        </h2>
        
        <h3 class="project__subtitle">
            We have {{ $allProjects->count() }} finished and {{ $ongoingProjects->count() }} ongoing projects
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
                                        {{ 
                                            $project->finished_at ? 
                                                'Finished in ' . date('Y, F', strtotime($project->finished_at)) : 
                                                'Ongoing' 
                                        }}
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ route('project.details', ['slug' => $project->slug]) }}">Visit project</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
                <div class="project__link uk-flex uk-flex-middle">
                    <a href="{{ route('project.list') }}">See all projects</a>
                    <img src="{{ asset('assets/img') }}/arrow-right-2.svg" alt="Arrow Right" />
                </div>
            </div>
            <div>
                <img src="{{ asset('assets/img') }}/project-main.png" alt="Main" />
            </div>
        </div>
    </div>
</section>
