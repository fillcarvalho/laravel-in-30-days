<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1 class="font-bold text-lg">{{$job['title']}}</h1>
    <p>{{$job['description']}}</p>
    <p>{{$job['salary']}}</p>
</x-layout>
