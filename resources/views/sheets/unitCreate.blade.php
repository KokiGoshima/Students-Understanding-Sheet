@extends("layouts.app")

@section("content")

<p>単元を記入</p>

<form action="{{ route('sheets.unitStore') }}" method="post">
@csrf
<p>単元名(if文など)</p>
<input type="text" name="content">
<br>
<p></p>
<p>講師ID</p>
<input type="text" name="teacher_id">
<br>
<p></p>
<p>日にち</p>
<input type="text" name="day_id">
<br>
<button type="submit" style="margin-top: 30px;">作成</button>
</form>

@endsection