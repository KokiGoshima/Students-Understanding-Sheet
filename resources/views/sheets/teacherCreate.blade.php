@extends("layouts.app")

@section("content")

	<a href="{{ route('sheets.unitCreate') }}" class = "btn btn-outline-primary">単元を追加する</a>
	<form action = "{{ route('sheets.store')}}" method="post">
		@csrf
	@foreach($units as $unit)
		<div class="m-4 p-4 border border-primary">
		<p>{{ $unit["content"] }}</p>
		

{{-- 		@endif --}}

		</div>
	@endforeach

	<button type="submit">作成する</button>
	</form>

@endsection