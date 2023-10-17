<section class="career">
    <div class="uk-container uk-container-large">
        <h2 class="career__title">Career</h2>

        <h3 class="career__subtitle">
            <div>
                Grover values its team and
            </div>
            <div>
                <span>offers</span> its employees comfortable
            </div>
            <div>
                working conditions.
            </div>
        </h3>

        <div class="career__vacations">
            <h4>All postions</h4>
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

        <div class="career__contact uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            <div>
                <h2 class="career__contact-title">Contact person for direction</h2>
            </div>
            <div>
                <div class="career__contact-body" uk-grid>
                    <div class="uk-width-1-3">
                        <img src="{{ asset('assets/img/gulchehra.png') }}" alt="Gulchehra" />
                    </div>
                    <div class="uk-width-2-3">
                        <h3>Shaxnoza Bahromovs</h3>
                        <p>HR director</p>
                        <div class="email">admin@asdasdasd</div>
                        <div class="phone">+998 88 543-43-64</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
