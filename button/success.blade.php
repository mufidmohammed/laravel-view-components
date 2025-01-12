<button
    {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2 text-white bg-green-500 border border-transparent rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2']) }}>
    {{ $slot }}
</button>
