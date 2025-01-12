<button
    {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 border border-gray-300 text-md font-medium rounded-lg shadow-sm text-gray-800 bg-white hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500']) }}>
    {{ $slot }}
</button>
