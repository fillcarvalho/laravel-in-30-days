<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1>{{$job['title']}}</h1>
    <p>{{$job['description']}}</p>
    <p>{{$job['wage']}}</p>
</x-layout>
