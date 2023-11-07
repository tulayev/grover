<section class="photo">
    <div class="uk-container uk-container-large">
        <h2 class="photo__title">Photos</h2>

        @if ($photos)
            <div class="photo__blocks uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m" uk-grid>
                @foreach ($photos as $photo)
                    <div>
                        <img src="{{ asset('storage/' . $photo->image) }}" alt="Image_{{ $photo->id }}" />
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
