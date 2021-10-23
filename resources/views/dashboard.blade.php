<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="relative bg-sky-700 pb-32 overflow-hidden">
        <div aria-hidden="true" class="inset-y-0 absolute inset-x-0 left-1/2 transform -translate-x-1/2 w-full overflow-hidden lg:inset-y-0">

            <div class="relative flex justify-center">
                <img class="object-cover object-center h-60 w-full" src="../assets/test.svg">
            </div>
        </div>
        <div class="relative py-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold text-white">
                    Welcome back, Luke 👋
                </h1>
            </div>
        </div>
    </div>
    <main class="relative -mt-32">
        <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
            <div class="bg-white rounded-lg shadow overflow-hidden h-60 min-h-full">
                <div class="mt-8">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Pinned Leanring</h2>
                    <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Card -->
                        <div class="bg-green-500 overflow-hidden shadow rounded-lg">
                            <div class="p-5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                        </svg>
                                    </div>
                                    <div class="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt class="text-sm font-medium text-white truncate">
                                                Maths
                                            </dt>
                                            <dd>
                                                <div class="text-lg font-medium text-white">
                                                    5/10 Questions
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-200 px-5 py-3">
                                <div class="text-sm">
                                    <a href="#" class="font-medium text-cyan-700 hover:text-cyan-900">
                                        Continue
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- More items... -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

</x-app-layout>
