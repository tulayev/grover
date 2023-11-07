<main class="team-and-career">
    <div class="uk-container uk-container-large">
        <h1 class="team-and-career__title">
            <div>
                Team and
            </div>
            <div>
                Career
            </div>
        </h1>
        <div class="team-and-career__sub">
            <div class="uk-child-width-1-1 uk-child-width-1-2@s" uk-grid>
                <div>
                    <h2>Our team</h2>
                </div>
                <div>
                    <p>
                        Grover is a team of talented constructors, lawyers and logistics who have been building businesses.
                        <br />
                        Buildings on the most competitive areas of city for more than twenty years.
                    </p>
                </div>
            </div>   
        </div>

        <x-sections.member :teamMembers="$teamMembers" />
    </div>
</main>
