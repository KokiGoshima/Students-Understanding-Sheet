@extends("layouts.app")

@section("content")

	<a href="{{ route('sheets.teacherCreate') }}" class = "btn btn-outline-primary">単元を追加する</a>
	<form action = "{{ route('sheets.store')}}" method="post">
		@csrf
		<p></p>
		<p>日付を入力</p>
		<input type="text" name = "date">
	@foreach($units as $unit)
		<div class="m-4 p-4 border border-primary">
		<p>{{ $unit["content"] }}</p>
		
		<p>Q1:この単元の理解度</p>
		<input type="radio" name="q1" value=1> 1
		<input type="radio" name="q1" value=2> 2
		<input type="radio" name="q1" value=3> 3
		<input type="radio" name="q1" value=4> 4
		<input type="radio" name="q1" value=5> 5

		<p></p>

		<p>Q2: 質問があればどうぞ</p>
		<textarea type="text"></textarea>	
		

{{-- 		@endif --}}

		</div>
	@endforeach

	<button type="submit">作成する</button>
	</form>

@endsection