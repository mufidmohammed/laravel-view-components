@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        Toastify({
            text: @json($text),
            duration: {{ $duration }},
            gravity: @json($gravity),
            position: @json($position),
            stopOnFocus: true,
            style: {
                background: @json($background),
            },
            onClick: function() {}
        }).showToast();
    });
</script>
@endpush
