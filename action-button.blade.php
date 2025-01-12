@if($method === 'GET')
    <a href="{{ $route }}" class="font-medium text-blue-600 hover:underline {{ $style }}">
        {{ $label }}
    </a>
@elseif($method === 'DELETE')
    <form action="{{ $route }}" method="POST" class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="font-medium text-red-600 hover:underline {{ $style }}">
            {{ $label }}
        </button>
    </form>
@endif