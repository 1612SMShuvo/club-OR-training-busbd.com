@extends("membermainpage")
@section("content")
<center>
	<h2>Selected Photo</h2>
	<img src="{{URL::to($pp->image)}}" style="height: 700px; width: 670px;">
	<br>
	<hr>
	<center><a href="{{URL::to('photos')}}"><button class="btn btn-success">Back</button></a></center>
	<br>
	<hr>
	<br>
	<hr>
</center>
@endsection