<section class="contact">
    <div class="uk-container uk-container-large">
        <h2 class="contact__title">
            {!! __('feedback__title') !!}
        </h2>
        <h3 class="contact__subtitle">{!! __('feedback__subtitle') !!}</h3>
        <form action="#" autocomplete="off">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <div>
                    <div class="form__group">
                        <input type="text" class="form__field" placeholder="Name" name="name" id="name" required />
                        <label for="name" class="form__label">{{ __('contact_name') }}*</label>
                    </div>
                </div>
                <div>
                    <div class="form__group">
                        <input type="text" class="form__field" placeholder="Phone" name="phone" id="phone" required />
                        <label for="phone" class="form__label">{{ __('contact_phone') }}*</label>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <input type="text" class="form__field" placeholder="Subject" name="subject" id="subject" />
                <label for="subject" class="form__label">{{ __('contact_subject') }}</label>
            </div>
            <div class="form__group">
                <textarea class="form__field" rows="4" placeholder="Message" name="message" id="message"></textarea>
                <label for="message" class="form__label">{{ __('contact_message') }}</label>
            </div>
            <div class="form__group uk-flex uk-flex-middle">
                <input type="checkbox" id="privacyContact" class="form__checkbox" />
                <label for="privacyContact" class="checkbox__label">{{ __('privacy_policy__text') }}</label>
            </div>
            <div class="uk-flex uk-flex-center">
                <button type="submit">{{ __('contact_submit') }}</button>
            </div>
        </form>
    </div>
</section>
