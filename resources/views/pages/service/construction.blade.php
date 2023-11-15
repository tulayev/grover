<x-layout.app>

    <x-service.construction.main />

    <x-sections.project :allProjects="$allProjects" :ongoingProjects="$ongoingProjects" />

    <x-service.construction.reliability />

    <x-sections.dominant />

    <x-sections.service />

</x-layout.app>
