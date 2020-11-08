@extends("membermainpage")
@section("content")
<center>
	<h2>Videos Here</h2>
	<hr><br>
	<div class="container col-lg-12 col-md-12 col-sm-12">
		@if($value>=1)
		<div class="row">
			@foreach($vdo as $data)
			<div class="col-lg-4 col-md-4 col-sm-6" style=" width:320px height=240px;">
				<object data="{{URL::to($data->video)}}" width='320px' height='240px'>
				</object>
				<iframe width="420" height="345" src="{{URL::to($data->video)}}">
				</iframe>
				<embed src="{{($data->video)}}"
    				width="640" height="480" 
        			type="application/x-shockwave-flash">
				<p>{{($data->title)}}</p>
				<div>
					<center>
						<a href="{{($data->video)}}"><button class="btn btn-success">View</button></a>
						<a href="{{URL::to('deletevideo/'.$data->id)}}"><button class="btn btn-warning">Delete</button></a>
					</center>
				</div>
			</div>
			@endforeach
		</div>
		@else
		<center><h3 style="color: red;">There is no such value....!!!!</h3></center>
		@endif
		<br>
		<hr>
	</div>
</center>
@endsection