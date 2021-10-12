@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="flex items-start relative w-full bg-red-200 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default">
            <svg class="w-6 h-6 text-white fill-current inline" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" /></svg>
            <div class="ml-3 text-xs pt-1">
                @foreach ($errors->all() as $error)
                    <p class="text-gray-500">{{ $error }}</p>
                @endforeach
            </div>
        </div>
@endif
