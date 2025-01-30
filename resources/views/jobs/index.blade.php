<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1 class="my-3">Hello from the About page</h1>
    <a href="/jobs/create" class="bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded">
        Create
    </a>
    <div class="space-y-4 mt-4">
        @foreach( $jobs as $job )
            <a href="/job/{{$job['id']}}"
               class="block px-3 py-4 rounded-lg border border-gray-200 bg-white hover:bg-gray-100">
                <div class="font-bold text-blue-500 text-sm">{{$job['employer']->name}}</div>
                {{$job['title']}}. Sallary: {{$job['salary']}}
            </a>
        @endforeach
    </div>
    <div class="py-4">
        {{$jobs->links()}}
    </div>
</x-layout>
