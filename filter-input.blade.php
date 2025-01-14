<div x-data="{ isOpen: false }" class="relative">
    <!-- Filter Icon -->
    <button @click="isOpen = !isOpen"
        class="p-2 bg-gray-100 hover:bg-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
        <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
            </path>
        </svg>
    </button>

    <!-- Dropdown with Select Inputs -->
    <div x-show="isOpen" @click.away="isOpen = false"
        class="absolute right-0 mt-2 w-64 bg-white border border-gray-200 rounded-lg shadow-lg z-10">
        <div class="p-4 space-y-4">

            {{-- filters --}}
            {{ $slot }}

        </div>
    </div>
</div>
