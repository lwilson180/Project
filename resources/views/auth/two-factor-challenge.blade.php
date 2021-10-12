<x-head/>

<x-auth-card>

    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-12 h-12 mx-auto" alt="Logo"/>
        </a>
    </x-slot>
    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Two Factor Authentication
    </h2>

    <div x-data="{ recovery: false }">
        <p class="mt-2 text-center text-sm text-gray-600" x-show="! recovery">
            {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
        </p>

        <p class="mt-2 text-center text-sm text-gray-600" x-show="recovery">
            {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
        </p>

            <x-jet-validation-errors class="mb-4" />

            <form class="mt-8 space-y-6" method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div x-show="! recovery">
                    <x-label for="code" value="{{ __('Code') }}" class="sr-only">Code</x-label>
                    <x-input id="code" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" placeholder="Code"/>
                </div>

                <div x-show="recovery">
                    <x-label for="recovery_code" value="{{ __('Recovery Code') }}" class="sr-only">Recovery Code</x-label>
                    <x-input id="recovery_code" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" placeholder="Recovery Code"/>
                </div>

                    <x-button>
                        <x-slot name="icon">
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </x-slot>
                        {{ __('Log in') }}
                    </x-button>

                    <p class="mt-2 text-center text-sm text-gray-600">Or</p>

                    <div class="text-center">

                    <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500"
                            x-show="! recovery"
                            x-on:click="
                                            recovery = true;
                                            $nextTick(() => { $refs.recovery_code.focus() })
                                        ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500"
                            x-show="recovery"
                            x-on:click="
                                            recovery = false;
                                            $nextTick(() => { $refs.code.focus() })
                                        ">
                        {{ __('Use an authentication code') }}
                    </button>
                    </div>
            </form>
        </div>
    </x-auth-card>



{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <div x-data="{ recovery: false }">--}}
{{--            <div class="mb-4 text-sm text-gray-600" x-show="! recovery">--}}
{{--                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}--}}
{{--            </div>--}}

{{--            <div class="mb-4 text-sm text-gray-600" x-show="recovery">--}}
{{--                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}--}}
{{--            </div>--}}

{{--            <x-jet-validation-errors class="mb-4" />--}}

{{--            <form method="POST" action="{{ route('two-factor.login') }}">--}}
{{--                @csrf--}}

{{--                <div class="mt-4" x-show="! recovery">--}}
{{--                    <x-jet-label for="code" value="{{ __('Code') }}" />--}}
{{--                    <x-jet-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />--}}
{{--                </div>--}}

{{--                <div class="mt-4" x-show="recovery">--}}
{{--                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />--}}
{{--                    <x-jet-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />--}}
{{--                </div>--}}

{{--                <div class="flex items-center justify-end mt-4">--}}
{{--                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"--}}
{{--                            x-show="! recovery"--}}
{{--                            x-on:click="--}}
{{--                                        recovery = true;--}}
{{--                                        $nextTick(() => { $refs.recovery_code.focus() })--}}
{{--                                    ">--}}
{{--                        {{ __('Use a recovery code') }}--}}
{{--                    </button>--}}

{{--                    <button type="button" class="text-sm text-gray-600 hover:text-gray-900 underline cursor-pointer"--}}
{{--                            x-show="recovery"--}}
{{--                            x-on:click="--}}
{{--                                        recovery = false;--}}
{{--                                        $nextTick(() => { $refs.code.focus() })--}}
{{--                                    ">--}}
{{--                        {{ __('Use an authentication code') }}--}}
{{--                    </button>--}}

{{--                    <x-jet-button class="ml-4">--}}
{{--                        {{ __('Log in') }}--}}
{{--                    </x-jet-button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}

