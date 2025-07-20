<a {{$attributes->merge(['class'=>"inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-200"])}} >
        <svg class="mr-1.5 -ml-0.5 size-5 text-gray-400" viewBox=" 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        </svg>
        {{ $slot }}
    </a>
    </span>