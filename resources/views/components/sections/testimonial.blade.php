<section class="testimonial">
    <div class="uk-container uk-container-large">
        <h2 class="testimonial__title">{{ __('testimonial__title') }}</h2>
        <h3 class="testimonial__subtitle">{{ __('testimonial__subtitle') }}</h3>
    </div>

    <div class="testimonial__slideshow">
        @if ($testimonials)
            @foreach ($testimonials as $testimonial)
                <div class="testimonial__slide">
                    <h4>{{ $testimonial->author }}</h4>
                    <p>{{ $testimonial->text }}</p>
                </div>
            @endforeach
        @endif
    </div>
</section>
