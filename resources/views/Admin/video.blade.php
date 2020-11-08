@extends("adminmainpage")
@section("content")
<center>
	<div class="container">
        	<div class="form-group">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-3">
						<a href="{{URL::to('addvideo')}}"><button type="button" class="btn btn-info">নতুন সংযোজন করুন</button></a>
					</div>
				</div>
			</div><br><br>
	<h2>Videos Here</h2>
	<hr><br>
	@if($value>=1)
			@foreach($vdo as $data)
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<center style="padding-bottom:20px;">
								<h3></h3><p><b>Title:</b>{{($data->title)}}</p>
							</center>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12" style="padding-right: 38px;">
							<a href="{{URL::to('deletevideo/'.$data->id)}}"><button class="btn btn-warning">Delete</button></a>
						</div>
					</div>
				<div class="iframe-container">
					{!!$data->video!!}
				</div>
			@endforeach
		@else
		<center><h3 style="color: red;">There is no such value....!!!!</h3></center>
		@endif
		<br>
		<hr>
	</div>
</center>
@endsection