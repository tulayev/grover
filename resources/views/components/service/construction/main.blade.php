<main class="construction__main">
    <div class="uk-container uk-container-large">
        <h1 class="construction__main__title">
            <div>
                {{ __('service_single__title') }} 1 -
            </div>
            <div>
                {{ __('construction') }}
            </div>
        </h1>
        <div class="construction__main__sub">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <div>
                    <h2>{{ __('construction') }}</h2>
                </div>
                <div>
                    <p>
                        {!! __('construction__text') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-width-1-1">
        <img class="uk-width-1-1" src="{{ asset('assets/img') }}/construction-background.png" alt="Construction" />
    </div>
</main>
