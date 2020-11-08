@extends("membermainpage")
@section("content")
<div class="container">
	<center>
		<h3>Title::{{$docmnt->title}}</h3>
		<p><iframe src="{{URL::to($docmnt->file)}}" style="height: 800px; width: 750px;" >{{($docmnt->file)}}</iframe></p>
	</center>
</div>
<br>
<hr>
@endsection