<section class="photo">
    <div class="uk-container uk-container-large">
        <h2 class="photo__title">Photos</h2>
    </div>

    @if ($photos)
        <div class="photo__blocks uk-child-width-1-4" uk-grid>
            @foreach ($photos as $photo)
                <div>
                    <img src="{{ asset('storage/' . $photo->image) }}" alt="Image_{{ $photo->id }}" />
                </div>
            @endforeach
        </div>
    @endif
</section>
