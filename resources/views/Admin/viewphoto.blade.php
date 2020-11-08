@extends("adminmainpage")
@section("content")
<center>  
<div class="container">
	<div>
		<img src="{{asset($photo->image)}}" style="height: 700px; width: 675px;">
	</div>
	<br><hr>
	<center><a href="{{URL::to('g_photo')}}"><button class="btn btn-secondary">আগের পেজে যান</button></a></center>
	<br><hr>
</div>
</center>
@endsection