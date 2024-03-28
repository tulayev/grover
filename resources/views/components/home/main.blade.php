<main class="main">
    <h1 class="main__title">
        <div class="uk-flex uk-flex-center uk-flex-middle">
            {{ __('main_page__title') }}
            <img class="main__title-img-1 uk-visible@l" src="{{ asset('assets/img') }}/title_img_1.png" alt="Title Image 1" />
        </div>
        <div class="uk-flex uk-flex-center uk-flex-middle">
            {{ __('main_page__subtitle') }}
            <img class="main__title-img-2 uk-visible@l" src="{{ asset('assets/img') }}/title_img_2.png" alt="Title Image 2" />
        </div>
        <div class="uk-flex uk-flex-center uk-flex-middle">
            Grover
        </div>
    </h1>

    <div class="main__button" uk-lightbox>
        <a class="uk-flex uk-flex-center uk-flex-middle uk-button uk-button-default" href="https://www.youtube.com/watch?v=k2WgWaByuL8" data-caption="Video">
            <img src="{{ asset('assets/img') }}/play-video.svg" alt="Play" />
            {{ __('watch__video') }}
        </a>
    </div>

    <div class="main__sub">
        <div class="uk-container uk-container-large">
            <div class="main__sub-items uk-flex uk-flex-between">
                <div class="item-1 uk-flex uk-flex-middle">
                    {{ __('construction') }}
                    <img src="{{ asset('assets/img') }}/construction.svg" alt="Construction" />
                </div>
                <div class="delimeter"></div>
                <div class="item-2 uk-flex uk-flex-middle">
                    {{ __('distribution') }}
                    <img src="{{ asset('assets/img') }}/distribution.svg" alt="Distribution" />
                </div>
                <div class="delimeter"></div>
                <div class="item-3 uk-flex uk-flex-middle">
                    {{ __('export_and_import') }}
                    <img src="{{ asset('assets/img') }}/export.svg" alt="Export" />
                </div>
{{--                <div class="delimeter"></div>--}}
{{--                <div class="item-4 uk-flex uk-flex-middle">--}}
{{--                    Sun batteries--}}
{{--                    <img src="{{ asset('assets/img') }}/battery.svg" alt="Battery" />--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</main>
