<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1>Hello from the About page</h1>
    <ul>
        @foreach( $jobs as $job )
            <li>
                <a href="/job/{{$job['id']}}" class="underline hover:text-blue-800">
                    {{$job['title']}}. Sallary: {{$job['salary']}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
