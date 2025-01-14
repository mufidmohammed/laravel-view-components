@props(['name', 'label' => null])

<div class="relative">
    <label for="{{ $name }}" class="block text-sm tracking-wide font-medium text-gray-700">
        {{ $label ?? ucfirst($name) }}
    </label>
    <select
        id={{ $name }}
        name={{ $name }}
        wire:model.live="{{ $name }}"
        class="appearance-none w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 bg-white cursor-pointer">
        {{ $slot }}
    </select>
    <!-- Dropdown Icon -->
    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </div>
</div>
