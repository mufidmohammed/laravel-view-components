@if (session()->has('success'))
<div class="alert alert-success">
	{{ session('message') }}
</div>
@endif

@if (session()->has('error'))
<div class="alert alert-danger">
	{{ session('error') }}
</div>
@endif