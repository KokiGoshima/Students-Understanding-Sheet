@extends("layouts.app")

@section("content")

	<a href="{{ route('sheets.teacherCreate') }}" class = "btn btn-outline-primary">新規作成</a>
	@foreach($days as $day)
	<div class="m-4 p-4 border border-primary">
		<p>{{ $day["date"] }}</p>

		{{-- @if(Auth::check() && Auth::user()->id == $diary["user_id"]) --}}
	
		{{-- ログインしてないと削除編集できない --}}

			<a class="btn btn-outline-success" href="{{ route('sheets.studentEdit', ['id' => $day['id']]) }}">{{$day["date"]}}の理解度を記入する</a>

{{-- 		@endif --}}

	</div>
	@endforeach

@endsection