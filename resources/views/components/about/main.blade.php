<main class="about">
    <div class="uk-container uk-container-large">
        <h1 class="about__title">
            <div>
                {{ __('about__title') }}
            </div>
            <div>
                Grover LLC
            </div>
        </h1>
        <div class="about__sub">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <div>
                    <h2>{{ __('home_company__title') }}</h2>
                </div>
                <div>
                    <p>
                        {!! __('about__text') !!}
                    </p>
                </div>
            </div>
        </div>

        <x-sections.member :teamMembers="$ceo" />
    </div>
</main>
