@props(['name', 'value' => null, 'label' => null, 'options' => [], 'nullable' => false])

<div class="space-y-1">
    <label for="{{ $name }}" class="block text-sm tracking-wide font-medium text-gray-700">
        {{ $label ?? ucfirst($name) }}
    </label>
    <div class="relative">
        <select name="{{ $name }}" id="{{ $name }}" {{ $attributes->merge([
            'class' => 'w-full border-gray-300 focus:border-[#3a9ad9] focus:ring-[#3a9ad9] rounded-md shadow-sm px-2 py-1',
            ]) }}>
            @if ($nullable)
            <option value="">{{ $nullable }}</option>
            @endif
            @foreach ($options as $key => $name)
            <option value="{{ $key }}" @if (old($name, $value)==$key) selected @endif>
                {{ $name }}
            </option>
            @endforeach
        </select>
    </div>
</div>
