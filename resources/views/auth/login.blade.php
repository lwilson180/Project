<x-head/>

<x-auth-card>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-12 h-12 mx-auto" alt="Logo"/>
        </a>
    </x-slot>
    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Sign in to your account
    </h2>
    <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
        @csrf

        <x-label for="email-address" :value="__('Email')" class="sr-only">Email address</x-label>
        <x-input id="email" type="email" name="email" :value="old('email')" required placeholder="Email address"/>

        <x-label for="password" :value="__('Password')">Password</x-label>
        <x-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password"/>


        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember-me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                    {{ __('Remember me') }}
                </label>
            </div>

            <div class="text-sm">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>

        <x-button type="submit">
            <x-slot name="icon">
                <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
            </x-slot>
            {{ __('Log in') }}
        </x-button>

        <x-button>
            {{ __('Sign in with Google') }}
        </x-button>
    </form>

    <x-slot name="validation">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </x-slot>

</x-auth-card>

