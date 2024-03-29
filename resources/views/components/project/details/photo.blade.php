@if (count($project->images) > 0)
    <section class="photo">
        <div class="uk-container uk-container-large">
            <h2 class="photo__title">{{ __('photo__title') }}</h2>

            <div class="photo__blocks uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m" uk-grid>
                @foreach ($project->images as $photo)
                    <div>
                        <img src="{{ asset('storage/' . $photo->image) }}" alt="{{ $project->title }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
