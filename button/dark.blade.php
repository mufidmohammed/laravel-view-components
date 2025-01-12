<button
    {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 border border-transparent text-md font-medium rounded-lg shadow-sm text-white bg-[#1a202c] hover:bg-gray-700 hover:text-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500']) }}>
    {{ $slot }}
</button>
