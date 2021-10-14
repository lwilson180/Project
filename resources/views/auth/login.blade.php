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
    <form method="POST" action="{{ route('login') }}" class="mt-6 space-y-6">
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
    </form>

    <p class="text-center font-medium text-gray-900 py-6">Or</p>

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

