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

    <p class="text-center font-medium text-gray-900 py-5">Or</p>

    <a href="login/google" class="group relative w-full flex justify-center py-2 px-4 border-2 border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-900 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
          </span>
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="h-5 w-5 mr-3"><g><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path><path fill="none" d="M0 0h48v48H0z"></path></g></svg>
        Continue with Google
    </a>

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


