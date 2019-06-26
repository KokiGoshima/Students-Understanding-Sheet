@extends("layouts.app")

@section("content")

	<a href="{{ route('sheets.teacherCreate') }}" class = "btn btn-outline-primary">新規作成</a>
	@foreach($howMuchUnderstands as $howMuchUnderstand)
	<div class="m-4 p-4 border border-primary">
		<p>{{ $howMuchUnderstand["created_at"] }}</p>

		{{-- @if(Auth::check() && Auth::user()->id == $diary["user_id"]) --}}
	
		{{-- ログインしてないと削除編集できない --}}

			<a class="btn btn-outline-success" href="{{ route('sheets.studentEdit', ['id' => $howMuchUnderstand['id']]) }}"><i class = "fas fa-edit"></i></a>

{{-- 		@endif --}}

	</div>
	@endforeach

@endsection