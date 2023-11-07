<footer class="footer">
    <div class="uk-container uk-container-large">
        <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-between" uk-grid>
            <div class="footer__email">
                <h2>STAY TUNED!</h2>
                <h3>Stay up to date with the latest news of the<br />Grover.</h3>
                <form action="#" autocomplete="off">
                    <div class="form__group">
                        <input type="email" class="form__field" placeholder="Email" name="email" id="email" autocomplete="off" />
                        <label for="email" class="form__label">Email</label>
                        <img src="{{ asset('assets/img') }}/arrow-right-4.svg" alt="Arrow Right" />
                    </div>
                    <div class="form__group uk-flex uk-flex-middle">
                        <input type="checkbox" id="privacyFooter" class="form__checkbox" />
                        <label for="privacyFooter" class="checkbox__label">I agree with the Privacy Policy</label>
                    </div>
                </form>
            </div>
            
            <div class="footer__menu uk-child-width-1-2 uk-child-width-1-1@s" uk-grid>
                <div class="uk-margin-auto">
                    <h2>MENU</h2>
                    <ul>
                        <li>
                            <a href="{{ route('about') }}">About us</a>
                        </li>
                        <li>
                            <a href="{{ route('team') }}">Our team</a>
                        </li>
                        <li>
                            <a href="{{ route('project.list') }}">Projects</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__menu-social uk-margin-auto">
                    <h2>SOCIAL NETWORKS</h2>
                    <ul>
                        <li>
                            <a 
                                href="#"
                                target="_blank"
                            >
                                Telegram
                            </a>
                        </li>
                        <li>
                            <a 
                                href="#"
                                target="_blank"
                            >
                                Youtube
                            </a>
                        </li>
                        <li>
                            <a 
                                href="#"
                                target="_blank"
                            >
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a 
                                href="#"
                                target="_blank"
                            >
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a 
                                href="#"
                                target="_blank"
                            >
                                Twitter
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="footer__contact">
                <h2>CONTACTS</h2>
                <ul>
                    @if ($settings->where('key', 'address')->first()->value)
                        <li>
                            <a href="#">{{ $settings->where('key', 'address')->first()->value }}</a>
                        </li>
                    @endif
                    @if ($settings->where('key', 'phone')->first()->url)
                        <li>
                            <a href="tel:{{ $settings->where('key', 'phone')->first()->url }}">
                                {{ $settings->where('key', 'phone')->first()->url }}
                            </a>
                        </li>
                    @endif
                    @if ($settings->where('key', 'email')->first()->url)
                        <li>
                            <a href="#">{{ $settings->where('key', 'email')->first()->url }}</a>
                        </li>
                    @endif
                </ul>
                <ul>
                    @if ($settings->where('key', 'address')->last()->value)
                        <li>
                            <a href="#">{{ $settings->where('key', 'address')->last()->value }}</a>
                        </li>
                    @endif
                    @if ($settings->where('key', 'phone')->last()->url)
                        <li>
                            <a href="tel:{{ $settings->where('key', 'phone')->last()->url }}">
                                {{ $settings->where('key', 'phone')->last()->url }}
                            </a>
                        </li>
                    @endif
                    @if ($settings->where('key', 'email')->last()->url)
                        <li>
                            <a href="#">{{ $settings->where('key', 'email')->last()->url }}</a>
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
