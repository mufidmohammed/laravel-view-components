<button
    {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2 text-white bg-red-500 border border-transparent rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2']) }}>
    {{ $slot }}
</button>
