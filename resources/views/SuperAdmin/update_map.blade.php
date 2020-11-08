@extends("superadminmainpage")
@section("content")
<div class="container">
			<br><br><br><br>
			<center><div class="text"><h4>Update Map Here</h4></div></center>
			<br><br><br><br>
			<form action="{{URL::to('updatemap/'.$info->id)}}" method="POST" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="id" value="{{($info->id)}}">
				<div class="form-row">
			    	<div class="form-group col-md-6">
			    		<label for="inputEmail4">Company Name</label>
			    		<input type="text" class="form-control" id="inputEmail4" name="company" value="{{($info->company)}}" placeholder="Enter Company Name Here">
			    	</div>
					<div class="form-group col-md-6">
				    	<label for="inputAddress">Share Map Link</label>
				    	<input type="text" class="form-control" id="inputAddress" name="map_url" value="{{($info->map_url)}}" placeholder="Share Map Link">
					</div>
				</div>
					<div class="form-group">
				    	<label for="inputAddress">Map Image</label>
				    	<input type="file" class="form-control" id="inputAddress" name="image" value="{{($info->image)}}" placeholder="Enter Map Image Here">
					</div>
			  <center><button type="submit" class="btn btn-success">Update Now</button></center>
			</form>
</div>
@endsection