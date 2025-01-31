<x-layout>
    <x-hero>
        <x-slot:heading>
            Encontre <strong class="underline text-orange">todas</strong> as informações sobre <strong
                class="underline text-orange">todos</strong> os <strong class="underline text-orange">DDDs</strong> do
            Brasil.
        </x-slot:heading>
    </x-hero>

    <div class="hidden md:block">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700 my-4">
            <ul
                class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist"
                data-tabs-active-classes="text-orange hover:text-orange dark:text-orange dark:hover:text-orange border-orange dark:border-orange"
            >
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">CEP
                    </button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-orange hover:border-dark-orange dark:hover:text-dark-orange"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">DDD
                    </button>
                </li>
                <li class="me-2" role="presentation">
                    <button
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-orange hover:border-dark-orange dark:hover:text-dark-orange"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings"
                        aria-selected="false">DDI
                    </button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                 aria-labelledby="profile-tab">
                <x-search-form placeholder="Procure por um CEP"></x-search-form>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                 aria-labelledby="dashboard-tab">
                <x-search-form placeholder="Procure por um DDD"></x-search-form>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                 aria-labelledby="settings-tab">
                <x-search-form placeholder="Procure por um DDI" action=""></x-search-form>
            </div>
        </div>
    </div>

    <h2 class="text-2xl font-semibold tracking-tight text-gray-900 sm:text-3xl border-b border-b-gray-300 my-4 pb-2">
        Estados</h2>
    <ul class="grid grid-cols-4 gap-4 mt-4">
        @foreach( $states as $state )
            <li>
                <a href="" class="text-gray-500 hover:underline hover:text-orange">
                    <div
                        class="block px-3 py-4 rounded-lg border border-gray-200 bg-white hover:bg-gray-100 shadow-md hover:shadow-gray-400">
                        {{$state['name']}}
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
