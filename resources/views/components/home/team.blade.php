<section class="team">
    <div class="uk-container uk-container-large">
        <h2 class="team__title">Team members</h2>
        <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
            <h3 class="team__subtitle">Our team</h3>
            <p class="team__text">
                Our team consists of highly qualified professionals specializing in various areas of legal practice.
                <br /><br />
                We are driven by unyielding enthusiasm, inspiration and a special attitude to everything we do.
            </p>
        </div>

        <x-sections.member :teamMembers="$teamMembers" />
    </div>
</section>
