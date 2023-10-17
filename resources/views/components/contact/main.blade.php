<main class="info">
    <div class="uk-container uk-container-large">
        <h1 class="info__title">
            Contacts
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6002.513750409236!2d69.23761184257856!3d41.216172295349395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae60fcf2af0dcd%3A0x72d45eb7de954541!2z0JzQsNGB0YHQuNCyINCh0LXRgNCz0LXQu9C4LCDQmtCy0LDRgNGC0LDQuyA0!5e0!3m2!1sru!2s!4v1697472759031!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>    
        </div>   
    </div>
</main>
