<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent text-md font-medium rounded-lg shadow-sm text-white bg-gray-900 hover:bg-gray-700 hover:text-[#ff5722] hover:border-[#ff5722] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#ff5722]']) }}>
    {{ $slot }}
</button>
