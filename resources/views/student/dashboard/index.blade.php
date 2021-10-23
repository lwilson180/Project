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
                    Student Dashboard
                </h1>
            </div>
        </div>
    </div>
    <main class="relative -mt-32">
        <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                    <aside class="py-6 lg:col-span-3">

                    </aside>


                </div>
            </div>
        </div>
    </main>

</x-app-layout>
