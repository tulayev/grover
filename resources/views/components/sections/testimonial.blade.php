<section class="testimonial">
    <div class="uk-container uk-container-large">
        <h2 class="testimonial__title">Testimonials</h2>
        <h3 class="testimonial__subtitle">Hear from our clients</h3>
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
