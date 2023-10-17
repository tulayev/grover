<x-layout.app>

    <x-home.main />

    <x-home.company />

    <x-sections.project />

    <x-sections.testimonial :testimonials="$testimonials" />

    <x-sections.service />

    <x-sections.team :members="$members" :fromHomePage="true" />

</x-layout.app>
