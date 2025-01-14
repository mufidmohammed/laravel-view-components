@props([
    'name',
    'value' => null,
    'label' => null,
    'options' => [],
    'wire' => false,
    'disabled' => false,
])

<div class="space-y-1 w-full">
    <label for="{{ $name }}" class="block text-sm tracking-wide font-medium text-gray-700">
        {{ $label ?? ucfirst($name) }}
    </label>
    <div class="relative">
        <select
            name="{{ $name }}"
            @if ($wire) wire:model="{{ $name }}" @endif
            id="{{ $name }}"
            {{ $disabled ? 'disabled' : '' }}
            {{ $attributes->merge([
                'class' => 'w-full border-gray-300 focus:border-[#3a9ad9] focus:ring-[#3a9ad9] rounded-md shadow-sm px-2 py-1',
            ]) }}>
            @foreach ($options as $key => $name)
            <option value="{{ $key }}" @selected(old($name, $value) == $key)>
                {{ $name }}
            </option>
            @endforeach
        </select>
    </div>
    @error($name) <div class="text-xs font-medium text-red-600">{{ $message }}</div> @enderror
</div>
