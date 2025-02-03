<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1 class="font-bold text-lg">{{$job['title']}}</h1>
    <p>{{$job['description']}}</p>
    <p>{{$job['salary']}}</p>
    @can('edit', $job)
        <div class="my-6">
            <x-button href="/jobs/{{$job['id']}}/edit">Edit</x-button>
        </div>
    @endcan
</x-layout>
