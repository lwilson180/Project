<x-head/>
<x-auth-card>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-12 h-12 mx-auto" alt="Logo"/>
        </a>
    </x-slot>
    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        {{ __('Create an account') }}
    </h2>
    <p class="mt-2 text-center text-sm text-gray-600">
        {{ __('Hello and Welcome! Please provide us with a few details and we can get started.') }}
    </p>

    <form class="mt-8 space-y-6" method="POST" action="{{ route('register') }}">
        @csrf
        <x-label for="name" :value="__('Name')" class="sr-only">Full Name</x-label>
        <x-input id="name" type="text" name="name" :value="old('name')" required placeholder="Full Name" autofocus/>

        <x-label for="email" :value="__('Email')">Email</x-label>
        <x-input id="email" type="email" name="email" :value="old('email')" required placeholder="Email"/>

        <x-label for="password" :value="__('Password')">Password</x-label>
        <x-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>

        <x-label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</x-label>
        <x-input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm Password"/>

        <x-button type="submit">
            <x-slot name="icon">
                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
            </x-slot>
            {{ __('Register') }}
        </x-button>

    </form>

    <x-slot name="validation">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>

</x-auth-card>

{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password"--}}
{{--                         required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}


