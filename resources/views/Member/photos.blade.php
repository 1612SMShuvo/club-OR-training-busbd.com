@extends("membermainpage")
@section("content")
<center>
	<div class="shop-detail-box-main">
        <div class="container">
        	<div class="form-group">
			<h2>Photos Here</h2>
			<hr>@if($value>=1)
			<div class="row">
				@foreach($photo as $data)
				<div class="col-lg-4 col-md-4 col-sm-6">
					<center><h4>Title: <b>{{($data->name)}}</b></h4></center>
					<img src="{{($data->image)}}" style="height: 380px; width: 350px;" class="img-fluid" alt="Image" value="">
	                <center>
	                	<div class="col">
	                    	<a href="{{URL::to('viewphotos/'.$data->id)}}" data-toggle="tooltip" data-placement="right" title="View"><button class="btn btn-success"><i class="fas fa-eye" style="color:black;">  View Photos</i></button></a>
	                    </div>
	                </center>
				</div>
				@endforeach
			</div>
			@else
			<center><h4 style="color: red;">There is no photos....!!!!</h4></center>
			@endif
		<br>
		<hr>
	</div>
</div>
</center>
@endsection