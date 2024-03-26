<section class="team">
    <div class="uk-container uk-container-large">
        <h2 class="team__title">{{ __('home_team__title') }}</h2>
        <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            <h3 class="team__subtitle">{{ __('home_team__subtitle') }}</h3>
            <p class="team__text">
                {{ __('home_team__text_1') }}
                <br /><br />
                {{ __('home_team__text_2') }}
            </p>
        </div>

        <x-sections.member :teamMembers="$teamMembers" />
    </div>
</section>
