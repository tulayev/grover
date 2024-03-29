<footer class="footer">
    <div class="uk-container uk-container-large">
        <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-between" uk-grid>
            <div class="footer__email">
                <h2 class="uk-text-uppercase">{{ __('footer__title_1') }}</h2>
                <h3>{!! __('footer__subtitle') !!}</h3>
                <form action="#" autocomplete="off">
                    <div class="form__group">
                        <input type="email" class="form__field" placeholder="Email" name="email" id="email" autocomplete="off" />
                        <label for="email" class="form__label">Email</label>
                        <img src="{{ asset('assets/img') }}/arrow-right-4.svg" alt="Arrow Right" />
                    </div>
                    <div class="form__group uk-flex uk-flex-middle">
                        <input type="checkbox" id="privacyFooter" class="form__checkbox" />
                        <label for="privacyFooter" class="checkbox__label">{{ __('privacy_policy__text') }}</label>
                    </div>
                </form>
            </div>

            <div class="footer__menu uk-child-width-1-2 uk-child-width-1-1@s" uk-grid>
                <div class="uk-margin-auto">
                    <h2 class="uk-text-uppercase">{{ __('footer__title_2') }}</h2>
                    <ul>
                        <li>
                            <a href="{{ route('about') }}">{{ __('home_company__item_4_title') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('team') }}">{{ __('home_team__subtitle') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('project.list') }}">{{ __('project__title') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">{{ __('contacts__title') }}</a>
                        </li>
                    </ul>
                </div>
                @php
                    // Social media
                    $telegram = $settings->where('key', 'telegram')->first();
                    $youtube = $settings->where('key', 'youtube')->first();
                    $instagram = $settings->where('key', 'instagram')->first();
                    $facebook = $settings->where('key', 'facebook')->first();
                    $twitter = $settings->where('key', 'twitter')->first();
                    // Other data
                    $address1 = $settings->where('key', 'address')->first();
                    $phone1 = $settings->where('key', 'phone')->first();
                    $email1 = $settings->where('key', 'email')->first();
                    $address2 = $settings->where('key', 'address')->last();
                    $phone2 = $settings->where('key', 'phone')->last();
                    $email2 = $settings->where('key', 'email')->last();
                @endphp

                <div class="footer__menu-social uk-margin-auto">
                    <h2 class="uk-text-uppercase">{{ __('footer__title_3') }}</h2>
                    <ul>
                        @if ($telegram)
                            <li>
                                <a href="{{ $telegram->url }}" target="_blank">{{ ucfirst($telegram->key) }}</a>
                            </li>
                        @endif
                        @if ($youtube)
                            <li>
                                <a href="{{ $youtube->url }}" target="_blank">{{ ucfirst($youtube->key) }}</a>
                            </li>
                        @endif
                        @if ($instagram)
                            <li>
                                <a href="{{ $instagram->url }}" target="_blank">{{ ucfirst($instagram->key) }}</a>
                            </li>
                        @endif
                        @if ($facebook)
                            <li>
                                <a href="{{ $facebook->url }}" target="_blank">{{ ucfirst($facebook->key) }}</a>
                            </li>
                        @endif
                        @if ($twitter)
                            <li>
                                <a href="{{ $twitter->url }}" target="_blank">{{ ucfirst($twitter->key) }}</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="footer__contact">
                <h2 class="uk-text-uppercase">{{ __('contacts__title') }}</h2>
                <ul>
                    @if ($address1)
                        <li>
                            <a href="#">{{ $address1->value }}</a>
                        </li>
                    @endif
                    @if ($phone1)
                        <li>
                            <a href="tel:{{$phone1->url }}">{{ $phone1->url }}</a>
                        </li>
                    @endif
                    @if ($email1)
                        <li>
                            <a href="#">{{ $email1->url }}</a>
                        </li>
                    @endif
                </ul>
                <ul>
                    @if ($address2)
                        <li>
                            <a href="#">{{ $address2->value }}</a>
                        </li>
                    @endif
                    @if ($phone2)
                        <li>
                            <a href="tel:{{$phone2->url }}">{{ $phone2->url }}</a>
                        </li>
                    @endif
                    @if ($email2)
                        <li>
                            <a href="#">{{ $email2->url }}</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        <div class="footer__bottom uk-flex-between" uk-grid>
            <div>©{{ date('Y', strtotime('now')) }} Grover.</div>
            <div>Website by ASXAB</div>
        </div>
    </div>
</footer>
