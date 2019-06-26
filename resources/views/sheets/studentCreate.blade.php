@extends('layouts.app')

@section("content")

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


@endsection