<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form method="post" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need some details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">
                            Title
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Shift Leader"></x-form-input>
                        </div>
                        <x-form-error name="title"></x-form-error>
                    </x-form-field>


                    <x-form-field>
                        <x-form-label for="salary">
                            Salary
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="50.000 per year"></x-form-input>
                        </div>
                        <x-form-error name="salary"></x-form-error>
                    </x-form-field>
                </div>

                {{--                @if( $errors->any() )--}}
                {{--                    <div class="mt-4 text-red-500 italic">--}}
                {{--                        <ul>--}}
                {{--                            @foreach( $errors->all() as $error )--}}
                {{--                                <li>{{$error}}</li>--}}
                {{--                            @endforeach--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}
                {{--                @endif--}}
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button type="submit">Save</x-form-button>
        </div>
    </form>

</x-layout>
