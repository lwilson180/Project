<x-head/>

<x-auth-card>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-12 h-12 mx-auto" alt="Logo"/>
        </a>
    </x-slot>

    <h2 class="text-center text-3xl font-extrabold text-gray-900">
        {{ __('Looks like your new!') }}
    </h2>

    <img class="h-48 w-48 mx-auto my-6" src="../assets/illustrations/mail-sent.svg">

    <p class="mt-2 text-center text-sm text-gray-600">
        {{ __('Before getting started, please verify your email address by clicking on the link we just emailed to you! If you didn\'t receive the email, we will gladly send you another.') }}
    </p>

    <div class="grid grid-cols-6 gap-6 mt-8">
        <div class="col-span-6 sm:col-span-3">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <x-button>
                    {{ __('Resend Verification Email') }}
                </x-button>
            </form>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-button-outline type="submit">
                    {{ __('Log Out') }}
                </x-button-outline>
            </form>
        </div>
    </div>

    <div class="absolute bottom-30 max-w-md w-full mt-6">
        @if (session('status') == 'verification-link-sent')
            <div class="flex items-start relative w-full bg-green-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white fill-current inline" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                <div class="ml-3 text-xs pt-1">
                    {{ __('A new verification link has been sent!') }}
                </div>
            </div>
        @endif
    </div>
</x-auth-card>
