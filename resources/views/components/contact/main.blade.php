<main class="info">
    <div class="uk-container uk-container-large">
        <h1 class="info__title">
            {{ __('contacts__title') }}
        </h1>
        <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            <div>
                <div class="info__address uk-child-width-1-1" uk-grid>
                    <div>
                        @if ($settings->where('key', 'city')->first()->value)
                            <h2>{{ $settings->where('key', 'city')->first()->value }}</h2>
                        @endif
                        @if ($settings->where('key', 'address')->first()->value)
                            <p>{{ $settings->where('key', 'address')->first()->value }}</p>
                        @endif
                        @if ($settings->where('key', 'phone')->first()->url)
                            <p>{{ $settings->where('key', 'phone')->first()->url }}</p>
                        @endif
                        @if ($settings->where('key', 'email')->first()->url)
                            <p>{{ $settings->where('key', 'email')->first()->url }}</p>
                        @endif
                    </div>
                    <div>
                        @if ($settings->where('key', 'city')->last()->value)
                            <h2>{{ $settings->where('key', 'city')->last()->value }}</h2>
                        @endif
                        @if ($settings->where('key', 'address')->last()->value)
                            <p>{{ $settings->where('key', 'address')->last()->value }}</p>
                        @endif
                        @if ($settings->where('key', 'phone')->last()->url)
                            <p>{{ $settings->where('key', 'phone')->last()->url }}</p>
                        @endif
                        @if ($settings->where('key', 'email')->last()->url)
                            <p>{{ $settings->where('key', 'email')->last()->url }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div>
                <div class="info__map">
                    @if ($settings->where('key', 'map')->first()->url)
                        <iframe
                            src="{{ $settings->where('key', 'map')->first()->url }}"
                            width="600"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
