@props([
    'name'=>'',
    'type' => 'text',
    'value' => null,
    'label' => null,
    'wire' => false,
    'disabled' => false,
])

<div class="space-y-1 w-full">
    <label for="{{ $name }}" class="block text-sm tracking-wide font-medium text-gray-700">
        {{ $label ?? ucfirst($name) }}
    </label>
    <input
        name="{{ $name }}"
        id="{{ $name }}"
        type="{{ $type ?? 'text' }}"
        @if ($wire) wire:model="{{ $name }}" @endif
        value="{{ old($name, $value) }}"
        {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
            'class' => 'w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm px-2 py-1',
        ]) !!} />
    @error($name) <div class="text-xs font-medium text-red-600">{{ $message }}</div> @enderror
</div>

