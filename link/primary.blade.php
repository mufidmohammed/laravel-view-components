@props(['to'])

<a href="{{ $to }}"
    {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 border border-transparent text-md font-medium rounded-lg shadow-sm text-white bg-[#ff5722] hover:bg-gray-100 hover:text-[#ff5722] hover:border-[#ff5722] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#ff5722']) }}>{{ $slot }}</a>
