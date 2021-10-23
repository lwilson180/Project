<x-head/>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="flex items-start justify-between mb-4 px-4 sm:px-0">
                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">
                        Current Users
                    </h2>
                </div>
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 mb-40 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-y-visible border-b border-gray-200 sm:rounded-lg">
                            <table class="w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        2FA Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full" src="../assets/illustrations/undraw_male_avatar_323b.svg" alt="">
                                                    </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $user->name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $user->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                                <div class="text-sm text-gray-500">Optimization</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if(empty($user->two_factor_secret))
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-800">
                                                        Inactive
                                                    </span>
                                                @else
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </span>
                                                    @endif
                                                    </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $user->role }}
                                            </td>
                                            <td class="px-6 py-4text-right">

                                                <!-- Action Dropdown -->
                                                <div x-data="{ userDropdown: false }" @click.away="userDropdown = false" @keydown.escape="userDropdown = false" class="relative inline-block text-left">
                                                    <button @click="userDropdown = ! userDropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                                        </svg>
                                                    </button>
                                                    <div x-show="userDropdown" x-cloak x-transition class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                                        <div class="py-1" role="none">
                                                                @if($user->role == 'admin')

                                                                    <!-- START Admin Make Student Alert -->
                                                                    <div x-data="{ confirm : false }">
                                                                        <button @click="confirm  = ! confirm" @click.away="confirm= false" @keydown.escape="confirm = false" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-50 w-full text-left" role="menuitem" tabindex="-1" id="menu-item-2">Make Student</button>
                                                                        <x-admin-alert>
                                                                            <x-slot name="form">
                                                                                <form method="POST" action="/admin/users/{{ $user->id }}">
                                                                                    @csrf
                                                                                    @method('PATCH')
                                                                                    <input class="hidden" value="student" name="role">
                                                                                    <button class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                        Confirm
                                                                                    </button>
                                                                                </form>
                                                                            </x-slot>
                                                                        </x-admin-alert>
                                                                    </div>
                                                                    <!-- END Admin Make Student Alert -->


                                                                @elseif ($user->role == 'teacher')

                                                                    <!-- START Teacher Make Admin Alert -->
                                                                    <div x-data="{ confirm : false }">
                                                                        <button @click="confirm  = ! confirm" @click.away="confirm= false" @keydown.escape="confirm = false" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-50 w-full text-left" role="menuitem" tabindex="-1" id="menu-item-2">Make Admin</button>
                                                                        <x-admin-alert>
                                                                            <x-slot name="form">
                                                                                <form method="POST" action="/admin/users/{{ $user->id }}">
                                                                                    @csrf
                                                                                    @method('PATCH')
                                                                                    <input class="hidden" value="admin" name="role">
                                                                                    <button class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                        Confirm
                                                                                    </button>
                                                                                </form>
                                                                            </x-slot>
                                                                        </x-admin-alert>
                                                                    </div>
                                                                    <!-- END Teacher Make Admin Alert -->


                                                                @elseif ($user->role == 'student')

                                                                    <!-- START Teacher Make Admin Alert -->
                                                                        <div x-data="{ confirm : false }">
                                                                            <button @click="confirm  = ! confirm" @click.away="confirm= false" @keydown.escape="confirm = false" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-50 w-full text-left" role="menuitem" tabindex="-1" id="menu-item-2">Make Teacher</button>
                                                                            <x-admin-alert>
                                                                                <x-slot name="form">
                                                                                    <form method="POST" action="/admin/users/{{ $user->id }}">
                                                                                        @csrf
                                                                                        @method('PATCH')
                                                                                        <input class="hidden" value="teacher" name="role">
                                                                                        <button class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                            Confirm
                                                                                        </button>
                                                                                    </form>
                                                                                </x-slot>
                                                                            </x-admin-alert>
                                                                        </div>
                                                                        <!-- END Teacher Make Admin Alert -->

                                                                @endif


                                                            <!--Delete Account Confirm Alert -->
                                                            <div x-data="{ confirm : false }">
                                                                <button @click="confirm  = ! confirm" @click.away="confirm = false" @keydown.escape="confirm = false" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-50 w-full text-left" role="menuitem" tabindex="-1" id="menu-item-2">Delete Account</button>
                                                                <div x-show="confirm" x-cloak>
                                                                    <x-admin-alert>
                                                                        <x-slot name="form">
                                                                            <form method="POST" action="/admin/users/{{ $user->id }}">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                                    Deactivate
                                                                                </button>
                                                                            </form>
                                                                        </x-slot>
                                                                    </x-admin-alert>
                                                                </div>
                                                            </div>
                                                            <!--End of Delete Account Confirm Alert -->

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
