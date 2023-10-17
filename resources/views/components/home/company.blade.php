<section class="company">
    <div class="uk-container uk-container-large">
        <div class="company__title uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            <div>
                <h2>Company</h2>
            </div>
            <div>
                <p>
                    Grover is a team of talented constructors, 
                    lawyers and logistics who have been building businesses and 
                    buildings on the most competitive areas of city for more than twenty years.
                </p>
            </div>
        </div>

        <div class="uk-visible@l">
            <div class="company__items_wrapper uk-child-width-1-2 uk-flex-row-reverse" uk-grid>
                <div class="company__item company__item-1">
                    <h3 class="company__item-title">20</h3>
                    <div class="company__item-text">years</div>
                    <div class="company__item-subtitle">project experience and international <br />consulting</div>
                </div>
            </div>
            
            <div class="company__items_wrapper uk-child-width-1-3" uk-grid>
                <div class="company__item company__item-2">
                    <h3 class="company__item-title">4</h3>
                    <div class="company__item-text">directions</div>
                    <div class="company__item-subtitle">multiple setvices</div>
                </div>
                <div class="company__item company__item-3">
                    <h3 class="company__item-title">15</h3>
                    <div class="company__item-text">projects</div>
                    <div class="company__item-subtitle">strong & beautiful buildings</div>
                </div>
                <div class="company__item company__item-4">
                    <h4>ABOUT US</h4>
                    <p>History and competencies of the company</p>
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
                    <div class="company__item-text">years</div>
                    <div class="company__item-subtitle">project experience and international <br />consulting</div>
                </div>
                <div class="company__item company__item-2">
                    <h3 class="company__item-title">4</h3>
                    <div class="company__item-text">directions</div>
                    <div class="company__item-subtitle">multiple setvices</div>
                </div>
                <div class="company__item company__item-3">
                    <h3 class="company__item-title">15</h3>
                    <div class="company__item-text">projects</div>
                    <div class="company__item-subtitle">strong & beautiful buildings</div>
                </div>
                <div class="company__item company__item-4">
                    <h4>ABOUT US</h4>
                    <p>History and competencies of the company</p>
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
