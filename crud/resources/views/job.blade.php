<x-layout>
    <x-slot:cabecalho>
        Job
    </x-slot:cabecalho>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
