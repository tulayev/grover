<section class="career">
    <div class="uk-container uk-container-large">
        <h2 class="career__title">{{ __('career__title') }}</h2>

        <h3 class="career__subtitle">{!! __('career__subtitle') !!}</h3>

        <div class="career__vacations">
            <h4>{{ __('vacations__title') }}</h4>
            @if ($vacations)
                <ul uk-accordion>
                    @foreach ($vacations as $vacation)
                        <li>
                            <a class="uk-accordion-title uk-child-width-1-2" href uk-grid>
                                <div class="uk-flex uk-flex-middle accordion-position">{{ $vacation->title }}</div>
                                <div class="uk-child-width-1-2" uk-grid>
                                    <div class="uk-flex uk-flex-middle accordion-location">{{ $vacation->location }}</div>
                                    <div class="uk-flex uk-flex-middle uk-flex-right">
                                        <div class="accordion-open uk-flex uk-flex-center uk-flex-middle">+</div>
                                        <div class="accordion-close uk-flex uk-flex-center uk-flex-middle uk-hidden">x</div>
                                    </div>
                                </div>
                            </a>
                            <div class="uk-accordion-content uk-child-width-1-2" uk-grid>
                                <div class="uk-flex uk-flex-middle"></div>
                                <div>
                                    {!! $vacation->description !!}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        @php(
            $hr = $teamMembers
                ->filter(static fn($member) => str_contains(strtolower($member->getTranslation('position', 'en')), 'hr'))
                ->first()
        )
        <div class="career__contact uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            @if ($hr)
                <div>
                    <h2 class="career__contact-title">{{ __('vacations__subtitle') }}</h2>
                </div>
                <div>
                    <div class="career__contact-body" uk-grid>
                        <div class="uk-width-1-3">
                            <img
                                src="{{ $hr->image ? asset('storage/' . $hr->image) : asset('assets/img/gulchehra.png') }}"
                                alt="{{ $hr->name }}"
                            />
                        </div>
                        <div class="uk-width-2-3">
                            <h3>{{ $hr->name }}</h3>
                            <p>{{ $hr->position }}</p>
                            <div class="email">{{ $hr->email }}</div>
                            <div class="phone">{{ $hr->phone }}</div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
