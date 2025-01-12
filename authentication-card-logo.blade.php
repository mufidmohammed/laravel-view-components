<div class="flex items-center justify-center space-x-3">
    <a href="/">
        <img src="{{ asset('logo.png') }}" alt="{{ config('app.name') }} Logo" class="w-14 h-14">
    </a>
    <div class="h-3 border-l border-gray-300"></div>
    <div class="font-semibold text-xl text-[#ff5722] tracking-wide">{{ $slot }}</div>
</div>
