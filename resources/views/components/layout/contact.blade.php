<section class="contact">
    <div class="uk-container uk-container-large">
        <h2 class="contact__title">
            Do you have <span>questions? Write</span> to us...
        </h2>
        <h3 class="contact__subtitle">Fill out the form below to send us your<br />questions or comments.</h3>
        <form action="#" autocomplete="off">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <div>
                    <div class="form__group">
                        <input type="text" class="form__field" placeholder="Name" name="name" id="name" required />
                        <label for="name" class="form__label">Name*</label>
                    </div>
                </div>
                <div>
                    <div class="form__group">
                        <input type="text" class="form__field" placeholder="Phone" name="phone" id="phone" required />
                        <label for="phone" class="form__label">Phone*</label>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <input type="text" class="form__field" placeholder="Subject" name="subject" id="subject" />
                <label for="subject" class="form__label">Subject</label>
            </div>
            <div class="form__group">
                <textarea class="form__field" rows="4" placeholder="Message" name="message" id="message"></textarea>
                <label for="message" class="form__label">Message</label>
            </div>
            <div class="form__group uk-flex uk-flex-middle">
                <input type="checkbox" id="privacyContact" class="form__checkbox" />
                <label for="privacyContact" class="checkbox__label">I agree with the Privacy Policy</label>
            </div>
            <div class="uk-flex uk-flex-center">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
