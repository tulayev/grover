<section class="pdf">
    <div class="uk-container uk-container-large">
        <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-grid-collapse" uk-grid>
            <div>
                <h2 class="pdf__title">{!! __('pdf__title') !!}</h2>
            </div>
            <div>
                <div class="pdf__blocks uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                    <div class="pdf__block">
                        <div class="uk-flex uk-flex-middle">
                            <img src="{{ asset('assets/img') }}/arrow-down1.svg" alt="Arrow Down" />
                            PDF, 6,8mb
                        </div>
                        <p>
                            {{ __('pdf__block_text_1') }}
                        </p>
                    </div>
                    <div class="pdf__block">
                        <div class="uk-flex uk-flex-middle">
                            <img src="{{ asset('assets/img') }}/arrow-down1.svg" alt="Arrow Down" />
                            PDF, 10,3mb
                        </div>
                        <p>
                            {{ __('pdf__block_text_2') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
