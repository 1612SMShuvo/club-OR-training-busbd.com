@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Update Hot Line Number</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('update_hot_line/'.$hotline->id)}}" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{($hotline->id)}}">
		<div class="form-row">
	    	<div class="form-group col-md-4">
	    		<label for="inputEmail4">Designation</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="designation" value="{{($hotline->designation)}}" placeholder="Enter Designation Please">
	    	</div>
			<div class="form-group col-md-4">
		    	<label for="inputAddress">Telephone Number</label>
		    	<input type="text" class="form-control" id="inputAddress" name="t_phone" value="{{($hotline->t_phone)}}" placeholder="Enter Telephone Number">
			</div>
			<div class="form-group col-md-4">
	    	<label for="inputAddress">Mobile Number</label>
	    	<input type="text" class="form-control" id="inputAddress" name="m_phone" value="{{($hotline->m_phone)}}" placeholder="Enter Mobile Number">
			</div>
		</div>
	  <center><button type="submit" class="btn btn-success">Update Now</button></center>
	</form>
</div>
@endsection