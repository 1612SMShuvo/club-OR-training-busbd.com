@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Update IT Service</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('/update_it_service/'.$service->id)}}" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{($service->id)}}">
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">IT Service Name</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="itservice" value="{{($service->itservice)}}" placeholder="Enter IT Service Name">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">Service Cost(Minimum)</label>
		    	<input type="text" class="form-control" id="inputAddress" name="cost" value="{{($service->cost)}}" placeholder="Enter Service Cost(Minimum)">
			</div>
		</div>
			<div class="form-group">
		    	<label for="inputAddress">Service Description</label>
					<textarea class="form-control" id="exampleFormControlTextarea4" name="serv_description" rows="3">{{($service->serv_description)}}</textarea>
				</div>
			</div>
	  <center><button type="submit" class="btn btn-success">Update Now</button></center>
	</form>
	<br><br><br><br>
</div>
@endsection