<main class="construction__main">
    <div class="uk-container uk-container-large">
        @if ($project)
            <h1 class="construction__main__title">
                <div>
                    Project -
                </div>
                <div>
                    {{ $project->title }}
                </div>
            </h1>
            <div class="construction__main__sub">
                <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                    <div>
                        <h2>About project</h2>
                    </div>
                    <div>
                        <p>
                            {!! $project->description !!}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</main>
