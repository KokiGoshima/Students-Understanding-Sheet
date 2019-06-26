@extends("layouts.app")

@section("content")
	<form action="{{ route('sheets.teacherCreate') }}" method="post">
		@csrf
		<p></p>
		<p>日付を入力</p>
		<input type="text" name = "date">
		<br>
		<p></p>
		<button type="submit">新規作成</button>
{{-- 		@endif --}}

	</form>
@endsection