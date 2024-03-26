<section class="service">
    <div class="uk-container uk-container-large">
        <h2 class="service__title">{{ __('service__title') }}</h2>
        <h3 class="service__subtitle">{{ __('service__subtitle') }}</h3>
    </div>

    <div class="service__items uk-grid-collapse uk-child-width-1-2 uk-child-width-1-1@l" uk-grid>
        <a href="{{ route('service.construction') }}">
            <div class="service__item service__item-1 uk-flex uk-flex-between">
                <div class="uk-flex">
                    {{ __('construction') }}
                </div>
                <div class="uk-flex uk-flex-right uk-flex-middle">
                    <img src="{{ asset('assets/img') }}/arrow-right-3.svg" alt="Arrow right" />
                </div>
            </div>
        </a>
        <a href="{{ route('service.distribution') }}">
            <div class="service__item service__item-2 uk-flex uk-flex-between">
                <div class="uk-flex">
                    {{ __('distribution') }}
                </div>
                <div class="uk-flex uk-flex-right uk-flex-middle">
                    <img src="{{ asset('assets/img') }}/arrow-right-3.svg" alt="Arrow right" />
                </div>
            </div>
        </a>
        <a href="{{ route('service.export') }}">
            <div class="service__item service__item-3 uk-flex uk-flex-between">
                <div class="uk-flex">
                    {{ __('export_and_import') }}
                </div>
                <div class="uk-flex uk-flex-right uk-flex-middle">
                    <img src="{{ asset('assets/img') }}/arrow-right-3.svg" alt="Arrow right" />
                </div>
            </div>
        </a>
{{--        <a href="{{ route('service.battery') }}">--}}
{{--            <div class="service__item service__item-4 uk-flex uk-flex-between">--}}
{{--                <div class="uk-flex">--}}
{{--                    Sun Batteries--}}
{{--                </div>--}}
{{--                <div class="uk-flex uk-flex-right uk-flex-middle">--}}
{{--                    <img src="{{ asset('assets/img') }}/arrow-right-3.svg" alt="Arrow right" />--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
    </div>
</section>
