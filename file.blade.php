@props(['name', 'label' => null])

<div class="space-y-1">
    <label for="{{ $name }}" class="block text-sm tracking-wide font-medium text-gray-700">{{ $label ?? ucfirst($name)
        }}</label>
    <input name="{{ $name }}" id="{{ $name }}" type="file" {{ $attributes->merge(['class' => "mt-1 w-full border
    border-gray-300 bg-white shadow-sm focus:border-indigo-500
    focus:outline-none focus:ring-indigo-500 file:cursor-pointer cursor-pointer file:border-0 file:py-2 file:px-4
    file:mr-4 file:bg-gray-200 file:hover:bg-gray-300 file:text-gray-500 rounded-md"]) }} />
    <p class="mt-1 text-sm text-gray-500" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 5MB).
    </p>
    @error($name)
    <div class="text-xs font-medium text-red-600">{{ $message }}</div>
    @enderror
</div>