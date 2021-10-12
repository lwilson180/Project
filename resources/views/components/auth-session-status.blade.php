@props(['status'])

@if ($status)
    <div class="flex items-start relative w-full bg-green-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white fill-current inline" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
        <div class="ml-3 text-xs pt-1">
            <p class="text-gray-500">{{ $status }}</p>
        </div>
    </div>
@endif

