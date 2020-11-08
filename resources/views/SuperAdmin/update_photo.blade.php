@extends("superadminmainpage")
@section("content")
<div class="container col-md-10 col-lg-10 col-sm-12">
			<br><br>
			<center><div class="text"><h4>Update Home Slide Photos</h4></div></center>
			<br><br>
			<form action="{{URL::to('updatephoto/'.$slide->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-12">
				    	<label for="inputAddress">Slide Image</label>
				    	<input type="file" class="form-control" id="inputAddress" name="image" value="{{($slide->image)}}" placeholder="Enter Slide Image Here">
					</div>
				</div>
			  <center><button type="submit" class="btn btn-success">Update Now</button></center>
			</form>
	<br><br>
		<center><h4 style="color: red;">Here Is the Photo.....!!!!</h4>
			<div class="content col-lg-10">
				<img style="height: 700px; width: 700px;" src="{{URL::to($slide->image)}}">
			</div>
		</center>
			<br><br>	
</div>
@endsection