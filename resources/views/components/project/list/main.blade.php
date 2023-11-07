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
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</main>
