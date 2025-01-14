@props([
    'disabled' => false,
    'name' => '',
    'value' => null,
    'label' => null,
    'rows' => 4,
    'wire' => true,
])

<div class="space-y-1 w-full">
    <!-- Label -->
    <label for="{{ $name }}" class="block text-sm tracking-wide font-medium text-gray-700">
        {{ $label ?? ucfirst($name) }}
    </label>

    <!-- Textarea -->
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="{{ $rows }}"
        @if ($wire) wire:model="{{ $name }}" @endif
        {{ $disabled ? 'disabled' : '' }}
        {!! $attributes->merge([
            'class' => 'w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm px-2 py-1',
        ]) !!}
    >{{ old($name, $value) }}</textarea>

    <!-- Error Message -->
    @error($name)
        <div class="text-xs font-medium text-red-600">{{ $message }}</div>
    @enderror
</div>
