<x-layout.app>

    <x-project.details.main :project="$project" />

    <x-project.details.photo :project="$project" />

    <x-sections.dominant />

    <x-sections.testimonial :testimonials="$testimonials" />

    <x-sections.project :allProjects="$allProjects" :ongoingProjects="$ongoingProjects" />

</x-layout.app>
