<main class="team-and-career">
    <div class="uk-container uk-container-large">
        <h1 class="team-and-career__title">
            {{ __('team_and_career__title') }}
        </h1>
        <div class="team-and-career__sub">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <div>
                    <h2>{{ __('home_team__subtitle') }}</h2>
                </div>
                <div>
                    <p>
                        {!! __('team_and_career__text') !!}
                    </p>
                </div>
            </div>
        </div>

        <x-sections.member :teamMembers="$teamMembers" />
    </div>
</main>
