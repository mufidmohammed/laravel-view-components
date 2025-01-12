@props(['to'])

<a href="{{ $to }}"
    {{ $attributes->merge(['class' => 'inline-flex items-center text-center px-4 py-2 border border-transparent text-sm font-medium rounded-lg shadow-sm text-white bg-green-600 hover:bg-[#0e1323] hover:border-green-700 focus:ring-2 focus:ring-offset-2 focus:ring-green-600']) }}>{{ $slot }}</a>
