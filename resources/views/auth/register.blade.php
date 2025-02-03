<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <form method="post" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <p class="mt-1 text-sm/6 text-gray-600">We just need some details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="name">
                            Name
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="name" id="name"></x-form-input>
                        </div>
                        <x-form-error name="name"></x-form-error>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">
                            E-mail
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email"></x-form-input>
                        </div>
                        <x-form-error name="email"></x-form-error>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">
                            Password
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" id="password" type="password"></x-form-input>
                        </div>
                        <x-form-error name="password"></x-form-error>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">
                            Confirm Password
                        </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation"
                                          type="password"></x-form-input>
                        </div>
                        <x-form-error name="password_confirmation"></x-form-error>
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
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button type="submit">Regsiter</x-form-button>
        </div>
    </form>

</x-layout>
