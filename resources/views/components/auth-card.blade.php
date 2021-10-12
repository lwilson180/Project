<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">

        <div>
            {{ $logo }}
        </div>

        <div>
            {{ $slot }}
        </div>

        <div class="fixed max-w-md w-full -mt-10">
            {{ $validation ?? '' }}
        </div>


    </div>
</div>
