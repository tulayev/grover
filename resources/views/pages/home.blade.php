<x-layout.app>

    <x-home.main />

    <x-home.company />

    <x-sections.project :allProjects="$allProjects" :ongoingProjects="$ongoingProjects" />

    <x-sections.testimonial :testimonials="$testimonials" />

    <x-sections.service />

    <x-home.team :teamMembers="$teamMembers" />

</x-layout.app>
