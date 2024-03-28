<section class="company">
    <div class="uk-container uk-container-large">
        <div class="company__title uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            <div>
                <h2>{{ __('home_company__title') }}</h2>
            </div>
            <div>
                <p class="uk-text-uppercase">
                    {{ __('home_company__text') }}
                </p>
            </div>
        </div>

        <div class="uk-visible@l">
            <div class="company__items_wrapper uk-child-width-1-2 uk-flex-row-reverse" uk-grid>
                <div class="company__item company__item-1">
                    <h3 class="company__item-title">12</h3>
                    <div class="company__item-text">{{ __('home_company__item_1_title') }}</div>
                    <div class="company__item-subtitle">{{ __('home_company__item_1_subtitle') }}</div>
                </div>
            </div>

            <div class="company__items_wrapper uk-child-width-1-3" uk-grid>
                <div class="company__item company__item-2">
                    <h3 class="company__item-title">3</h3>
                    <div class="company__item-text">{{ __('home_company__item_2_title') }}</div>
                    <div class="company__item-subtitle">{{ __('home_company__item_2_subtitle') }}</div>
                </div>
                <div class="company__item company__item-3">
                    <h3 class="company__item-title">15</h3>
                    <div class="company__item-text">{{ __('home_company__item_3_title') }}</div>
                    <div class="company__item-subtitle">{{ __('home_company__item_3_subtitle') }}</div>
                </div>
                <div class="company__item company__item-4">
                    <h4>{{ __('home_company__item_4_title') }}</h4>
                    <p>{{ __('home_company__item_4_subtitle') }}</p>
                    <a
                        href="{{ route('about') }}"
                        class="uk-flex uk-flex-right"
                    >
                        <img src="{{ asset('assets/img') }}/arrow-right.svg" alt="Arrow Right" />
                    </a>
                </div>
            </div>
        </div>

        <div class="uk-hidden@l">
            <div class="company__items_wrapper uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <div class="company__item company__item-1">
                    <h3 class="company__item-title">20</h3>
                    <div class="company__item-text">{{ __('home_company__item_1_title') }}</div>
                    <div class="company__item-subtitle">{{ __('home_company__item_1_subtitle') }}</div>
                </div>
                <div class="company__item company__item-2">
                    <h3 class="company__item-title">4</h3>
                    <div class="company__item-text">{{ __('home_company__item_2_title') }}</div>
                    <div class="company__item-subtitle">{{ __('home_company__item_2_subtitle') }}</div>
                </div>
                <div class="company__item company__item-3">
                    <h3 class="company__item-title">15</h3>
                    <div class="company__item-text">{{ __('home_company__item_3_title') }}</div>
                    <div class="company__item-subtitle">{{ __('home_company__item_3_subtitle') }}</div>
                </div>
                <div class="company__item company__item-4">
                    <h4>{{ __('home_company__item_4_title') }}</h4>
                    <p>{{ __('home_company__item_4_subtitle') }}</p>
                    <a
                        href="{{ route('about') }}"
                        class="uk-flex uk-flex-right"
                    >
                        <img src="{{ asset('assets/img') }}/arrow-right.svg" alt="Arrow Right" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
