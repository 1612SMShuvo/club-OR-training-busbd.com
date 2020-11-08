@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Update Addvertisement</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('/update_add/'.$addvertise->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="id" value="{{($addvertise->id)}}">
		<div class="form-row">
	    	<div class="form-group col-md-4">
	    		<label for="inputEmail4">Addvertise-1</label>
	    		<input type="file" class="form-control" id="inputEmail4" name="image1" value="{{($addvertise->image1)}}" placeholder="Enter Designation Please">
	    	</div>
			<div class="form-group col-md-4">
		    	<label for="inputAddress">Addvertise-2</label>
		    	<input type="file" class="form-control" id="inputAddress" name="image2" value="{{($addvertise->image2)}}" placeholder="Enter Telephone Number">
			</div>
			<div class="form-group col-md-4">
	    	<label for="inputAddress">Addvertise-3</label>
	    	<input type="file" class="form-control" id="inputAddress" name="image3" value="{{($addvertise->image3)}}" placeholder="Enter Mobile Number">
			</div>
		</div>
	  <center><button type="submit" class="btn btn-success">Update Now</button></center>
	</form>
	<br><br>
	<div class="row">
		<div class=" col-lg-4 col-md-4 col-sm-4">
			<img style="height: 300px; width: 275px;" src="{{URL::to($addvertise->image1)}}">
		</div>
		<div class=" col-lg-4 col-md-4 col-sm-4">
			<img style="height: 300px; width: 275px;" src="{{URL::to($addvertise->image2)}}">
		</div>
		<div class=" col-lg-4 col-md-4 col-sm-4">
			<img style="height: 300px; width: 275px;" src="{{URL::to($addvertise->image3)}}">
		</div>
	</div>
	<br><br>
</div>
@endsection