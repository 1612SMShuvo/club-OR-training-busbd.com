@extends("adminmainpage")
@section("content")
<div class="container">
	<center>
		<h3>Title::{{$files->title}}</h3>
		<p><iframe src="{{URL::to($files->file)}}" style="height: 800px; width: 750px;" type="hidden">{{($files->file)}}</iframe></p>
	</center>
</div>
<br>
<hr>
@endsection