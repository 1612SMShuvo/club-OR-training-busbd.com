@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Add Address</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('add_address')}}" method="POST">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">Company Name</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="company" placeholder="Enter Company Name">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">House Name/Number</label>
		    	<input type="text" class="form-control" id="inputAddress" name="house" placeholder="Enter House Name/Number">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">Road Name/Number</label>
		    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="Enter Road Name/Number">
			</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">Area Name</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="area" placeholder="Enter Area Name">
			</div>
		</div>
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputCity">City</label>
	    		<input type="text" class="form-control" name="city" id="inputCity" placeholder="Enter City Please">
	    	</div>
	    	<div class="form-group col-md-2">
	      		<label for="inputZip">Zip</label>
	      		<input type="text" class="form-control" name="zip" id="inputZip" placeholder="Enter ZIP code Please">
	    	</div>
	    	<div class="form-group col-md-4">
	    		<label for="inputState">Division</label>
	    		<select id="inputState" class="form-control" name="division">
	        		<option selected>Choose...</option>
	        		<option value="Dhaka">Dhaka</option>
	        		<option value="Rajshahi">Rajshahi</option>
	        		<option value="Khulna">Khulna</option>
	        		<option value="Barishal">Barishal</option>
	        		<option value="Sylhet">Sylhet</option>
	        		<option value="Chittagong">Chittagong</option>
	        		<option value="Rangpur">Rangpur</option>
	        		<option value="Maymanshing">Maymanshing</option>
	    		</select>
	    	</div>
	  	</div>
	  <center><button type="submit" class="btn btn-primary">Add Now</button></center>
	</form>
</div>
@endsection