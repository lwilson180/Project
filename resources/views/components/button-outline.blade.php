<button {{ $attributes->merge(['type' => 'submit', 'class' => 'group relative w-full flex justify-center py-2 px-4 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) }}>

    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
        {{ $icon ?? '' }}
    </span>

    {{ $slot }}

</button>
