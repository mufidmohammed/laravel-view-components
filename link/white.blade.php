@props(['to'])

<a href="{{ $to }}" {{ $attributes->merge(['class' => 'border border-[#3a9ad9] text-[#3a9ad9] hover:bg-[#3a9ad9] hover:text-white py-2 px-4 rounded transition duration-300']) }}>{{ $slot }}</a>