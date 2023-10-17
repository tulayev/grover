<footer class="footer">
    <div class="uk-container uk-container-large">
        <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-flex-between" uk-grid>
            <div class="footer__email">
                <h2>STAY TUNED!</h2>
                <h3>Stay up to date with the latest news of the<br />Grover.</h3>
                <form action="#" autocomplete="off">
                    <div class="form__group">
                        <input type="email" class="form__field" placeholder="Email" name="email" id="email" />
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
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">Our team</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">Projects</a>
                        </li>
                        <li>
                            <a href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__menu-social uk-margin-auto">
                    <h2>SOCIAL NETWORKS</h2>
                    <ul>
                        <li>
                            <a href="#">Telegram</a>
                        </li>
                        <li>
                            <a href="#">Youtube</a>
                        </li>
                        <li>
                            <a href="#">Instagram</a>
                        </li>
                        <li>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <a href="#">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__contact">
                <h2>CONTACTS</h2>
                <ul>
                    <li>
                        <a href="#">Toshkent, Sergeli 4-daha, 48-uy </a>
                    </li>
                    <li>
                        <a href="#">+998 90 900-49-38</a>
                    </li>
                    <li>
                        <a href="#">grover.tashkent@info.uz</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">Andijon, A.Temur ko'chasi, 3-uy </a>
                    </li>
                    <li>
                        <a href="#">+998 71 210-45-15</a>
                    </li>
                    <li>
                        <a href="#">grover.andijan@info.uz</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer__bottom uk-flex-between" uk-grid>
            <div>©{{ date('Y', strtotime('now')) }} Grover.</div>
            <div>Website by ASXAB</div>
        </div>
    </div>
</footer>
