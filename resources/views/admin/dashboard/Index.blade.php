<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div>
        <div class="relative bg-sky-700 pb-32 overflow-hidden">
            <div aria-hidden="true" class="inset-y-0 absolute inset-x-0 left-1/2 transform -translate-x-1/2 w-full overflow-hidden lg:inset-y-0">
                <div class="absolute inset-0 flex">
                    <div class="h-full w-1/2" style="background-color: #0a527b;"></div>
                    <div class="h-full w-1/2" style="background-color: #065d8c;"></div>
                </div>
                <div class="relative flex justify-center">
                    <svg class="flex-shrink-0" width="1750" height="308" viewBox="0 0 1750 308" xmlns="http://www.w3.org/2000/svg">
                        <path d="M284.161 308H1465.84L875.001 182.413 284.161 308z" fill="#0369a1" />
                        <path d="M1465.84 308L16.816 0H1750v308h-284.16z" fill="#065d8c" />
                        <path d="M1733.19 0L284.161 308H0V0h1733.19z" fill="#0a527b" />
                        <path d="M875.001 182.413L1733.19 0H16.816l858.185 182.413z" fill="#0a4f76" />
                    </svg>
                </div>
            </div>
            <header class="relative py-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-white">Hello {{ $user->name }}, Welcome Back 👋</h1>
                </div>
            </header>
        </div>

        <main class="relative -mt-32">
            <div class="max-w-screen-xl mx-auto pb-6 px-4 sm:px-6 lg:pb-16 lg:px-8">
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">

                        <div class="divide-y divide-gray-200 lg:col-span-9">
                            <div class="py-6 px-4 sm:p-6 lg:pb-8">
                                <div>
                                    <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
                                    <div class="mt-2 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                                        <!-- Card -->

                                        <div class="bg-white overflow-hidden shadow rounded-lg">
                                            <div class="p-5">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0">
                                                        <!-- Heroicon name: outline/scale -->
                                                        <svg id="457bf273-24a3-4fd8-a857-e9b918267d6a" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 698 698"><defs><linearGradient id="b247946c-c62f-4d08-994a-4c3d64e1e98f" x1="349" y1="698" x2="349" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="gray" stop-opacity="0.25"/><stop offset="0.54" stop-color="gray" stop-opacity="0.12"/><stop offset="1" stop-color="gray" stop-opacity="0.1"/></linearGradient></defs><title>profile pic</title><g opacity="0.5"><circle cx="349" cy="349" r="349" fill="url(#b247946c-c62f-4d08-994a-4c3d64e1e98f)"/></g><circle cx="349.68" cy="346.77" r="341.64" fill="#f5f5f5"/><path d="M601,790.76a340,340,0,0,0,187.79-56.2c-12.59-68.8-60.5-72.72-60.5-72.72H464.09s-45.21,3.71-59.33,67A340.07,340.07,0,0,0,601,790.76Z" transform="translate(-251 -101)" fill="#6c63ff"/><circle cx="346.37" cy="339.57" r="164.9" fill="#333"/><path d="M293.15,476.92H398.81a0,0,0,0,1,0,0v84.53A52.83,52.83,0,0,1,346,614.28h0a52.83,52.83,0,0,1-52.83-52.83V476.92a0,0,0,0,1,0,0Z" opacity="0.1"/><path d="M296.5,473h99a3.35,3.35,0,0,1,3.35,3.35v81.18A52.83,52.83,0,0,1,346,610.37h0a52.83,52.83,0,0,1-52.83-52.83V476.35A3.35,3.35,0,0,1,296.5,473Z" fill="#fdb797"/><path d="M544.34,617.82a152.07,152.07,0,0,0,105.66.29v-13H544.34Z" transform="translate(-251 -101)" opacity="0.1"/><circle cx="346.37" cy="372.44" r="151.45" fill="#fdb797"/><path d="M489.49,335.68S553.32,465.24,733.37,390l-41.92-65.73-74.31-26.67Z" transform="translate(-251 -101)" opacity="0.1"/><path d="M489.49,333.78s63.83,129.56,243.88,54.3l-41.92-65.73-74.31-26.67Z" transform="translate(-251 -101)" fill="#333"/><path d="M488.93,325a87.49,87.49,0,0,1,21.69-35.27c29.79-29.45,78.63-35.66,103.68-69.24,6,9.32,1.36,23.65-9,27.65,24-.16,51.81-2.26,65.38-22a44.89,44.89,0,0,1-7.57,47.4c21.27,1,44,15.4,45.34,36.65.92,14.16-8,27.56-19.59,35.68s-25.71,11.85-39.56,14.9C608.86,369.7,462.54,407.07,488.93,325Z" transform="translate(-251 -101)" fill="#333"/><ellipse cx="194.86" cy="372.3" rx="14.09" ry="26.42" fill="#fdb797"/><ellipse cx="497.8" cy="372.3" rx="14.09" ry="26.42" fill="#fdb797"/></svg>
                                                    </div>
                                                    <div class="ml-5 w-0 flex-1">
                                                        <dl>
                                                            <dt class="text-sm font-medium text-gray-500 truncate">
                                                                All Users
                                                            </dt>
                                                            <dd>
                                                                <div class="text-lg font-medium text-gray-900">
                                                                    {{ $usersCount }}
                                                                </div>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{ route('admin.users.index') }}">
                                                <div class="bg-gray-50 px-5 py-3 hover:bg-gray-100">
                                                    <div class="text-sm">
                                                        <div class="font-medium text-cyan-700 hover:text-cyan-900">
                                                            View all
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <!-- More items... -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</x-app-layout>
