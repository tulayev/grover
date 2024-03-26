<header class="header">
    <div class="services__dropdown uk-hidden">
        <div class="uk-container uk-container-large">
            <div class="services__dropdown_content" uk-grid>
                <div class="uk-width-1-3">
                    <h2>Services</h2>
                    <p>Grover provides legal services in the most complex areas of business.</p>
                </div>
                <div class="uk-width-2-3">
                    <div class="uk-child-width-1-3" uk-grid>
                        <div>
                            <h3>FOR COMPANIES</h3>
                            <ul>
                                {{-- <li>
                                    <a href="#">Investing</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('service.distribution') }}">{{ __('distribution') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('service.export') }}">{{ __('export_and_import') }}</a>
                                </li>
{{--                                <li>--}}
{{--                                    <a href="{{ route('service.battery') }}">Sun batteries</a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                        <div>
                            <h3>FOR INDIVIDUALS</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('service.construction') }}">{{ __('construction') }}</a>
                                </li>
                                {{-- <li>
                                    <a href="#">Private investing</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-container uk-container-large">
        <nav class="uk-navbar-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="header__logo-link">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/img') }}/Logo.svg" alt="Logo" />
                            </a>
                        </li>
                        <li class="uk-visible@m">
                            <a href="#" id="servicesDropdownButton">
                                Services
                                <img src="{{ asset('assets/img') }}/arrow-down.svg" alt="Arrow Down" />
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <div class="burger__menu uk-hidden@m">
                        <button uk-toggle="target: #burgerMenu">
                            <img src="{{ asset('assets/img') }}/burger.svg" alt="Burger Icon" />
                        </button>
                        <div id="burgerMenu" uk-offcanvas="flip: true; overlay: true">
                            <div class="uk-offcanvas-bar">
                                <button class="uk-offcanvas-close" type="button" uk-close></button>
                                <ul class="uk-child-width-1-1 uk-grid-small" uk-grid>
                                    <li>
                                        <a href="{{ route('about') }}">{{ __('home_company__item_4_title') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('project.list') }}">{{ __('project__title') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('team') }}">Team and Career</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contacts</a>
                                    </li>
                                </ul>

                                <h2>Services</h2>

                                <ul class="uk-child-width-1-1 uk-grid-small" uk-grid>
                                    <li>
                                        <a href="{{ route('service.construction') }}">{{ __('construction') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service.distribution') }}">{{ __('distribution') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('service.export') }}">{{ __('export_and_import') }}</a>
                                    </li>
{{--                                    <li>--}}
{{--                                        <a href="{{ route('service.battery') }}">Sun batteries</a>--}}
{{--                                    </li>--}}
                                    {{-- <li>
                                        <a href="#">Private investing</a>
                                    </li>
                                    <li>
                                        <a href="#">Investing</a>
                                    </li> --}}
                                </ul>

                                @if (config('locales'))
                                    <ul class="uk-child-width-1-4" uk-grid>
                                        @foreach (config('locales') as $k => $v)
                                            <li>
                                                <a
                                                    href="{{ route('changeLocale', ['locale' => $k]) }}"
                                                    class="{{ $k === app()->getLocale() ? 'active' : '' }}"
                                                >
                                                    {{ ucfirst($k) }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>

                    <ul class="uk-navbar-nav uk-visible@m">
                        <li class="header__nav-link">
                            <a
                                href="{{ route('about') }}"
                                class="{{ str_contains(url()->current(), 'about') ? 'active' : '' }}"
                            >
                                {{ __('home_company__item_4_title') }}
                            </a>
                        </li>
                        <li class="header__nav-link">
                            <a
                                href="{{ route('project.list') }}"
                                class="{{ str_contains(url()->current(), 'projects') ? 'active' : '' }}"
                            >
                                Projects
                            </a>
                        </li>
                        <li class="header__nav-link">
                            <a
                                href="{{ route('team') }}"
                                class="{{ str_contains(url()->current(), 'team-and-career') ? 'active' : '' }}"
                            >
                                Team and Career
                            </a>
                        </li>
                        <li class="header__nav-link">
                            <a
                                href="{{ route('contact') }}"
                                class="{{ str_contains(url()->current(), 'contacts') ? 'active' : '' }}"
                            >
                                Contacts
                            </a>
                        </li>
                        <li class="header__lang-link">
                            <a href="#" id="localesDropdownButton">
                                {{ config('locales')[app()->getLocale()] }}
                                <img src="{{ asset('assets/img') }}/arrow-down.svg" alt="Arrow Down" />
                            </a>
                            @if (config('locales'))
                                <div class="locales__dropdown uk-hidden">
                                    <ul>
                                        @foreach (config('locales') as $k => $v)
                                            @if ($k !== app()->getLocale())
                                                <li>
                                                    <a href="{{ route('changeLocale', ['locale' => $k]) }}">
                                                        {{ $v }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
