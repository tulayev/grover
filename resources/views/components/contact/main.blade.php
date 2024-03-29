@php
    // Other data
    $city1 = $settings->where('key', 'city')->first();
    $address1 = $settings->where('key', 'address')->first();
    $phone1 = $settings->where('key', 'phone')->first();
    $email1 = $settings->where('key', 'email')->first();
    $city2 = $settings->where('key', 'city')->last();
    $address2 = $settings->where('key', 'address')->last();
    $phone2 = $settings->where('key', 'phone')->last();
    $email2 = $settings->where('key', 'email')->last();
    $map = $settings->where('key', 'map')->first();
@endphp

<main class="info">
    <div class="uk-container uk-container-large">
        <h1 class="info__title">
            {{ __('contacts__title') }}
        </h1>
        <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            <div>
                <div class="info__address uk-child-width-1-1" uk-grid>
                    <div>
                        @if ($city1)
                            <h2>{{ $city1->value }}</h2>
                        @endif
                        @if ($address1)
                            <p>{{ $address1->value }}</p>
                        @endif
                        @if ($phone1)
                            <p>{{ $phone1->url }}</p>
                        @endif
                        @if ($email1)
                            <p>{{ $email1->url }}</p>
                        @endif
                    </div>
                    <div>
                        @if ($city2)
                            <h2>{{ $city2->value }}</h2>
                        @endif
                        @if ($address2)
                            <p>{{ $address2->value }}</p>
                        @endif
                        @if ($phone2)
                            <p>{{ $phone2->url }}</p>
                        @endif
                        @if ($email2)
                            <p>{{ $email2->url }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div>
                <div class="info__map">
                    @if ($map)
                        <iframe
                            src="{{ $map->url }}"
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
