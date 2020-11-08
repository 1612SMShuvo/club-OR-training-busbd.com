@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Change Address</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('updateaddress/'.$companyaddress->id)}}">
		@csrf
		<input type="hidden" name="id" value="{{($companyaddress->id)}}">
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">Company Name</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="company" value="{{($companyaddress->company)}}" placeholder="Enter Company Name">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">House Name/Number</label>
		    	<input type="text" class="form-control" id="inputAddress" name="house" value="{{($companyaddress->house)}}" placeholder="Enter House Name/Number">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">Road Name/Number</label>
		    	<input type="text" class="form-control" id="inputAddress" name="road" value="{{($companyaddress->road)}}" placeholder="Enter Road Name/Number">
			</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">Area Name</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="area" value="{{($companyaddress->area)}}" placeholder="Enter Area Name">
			</div>
		</div>
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputCity">City</label>
	    		<input type="text" class="form-control" name="city" id="inputCity" value="{{($companyaddress->city)}}" placeholder="Enter City Please">
	    	</div>
	    	<div class="form-group col-md-2">
	      		<label for="inputZip">Zip</label>
	      		<input type="text" class="form-control" name="zip" id="inputZip" value="{{($companyaddress->zip)}}" placeholder="Enter ZIP code Please">
	    	</div>
	    	<div class="form-group col-md-4">
	    		<label for="inputState">Division</label>
	    		<select id="inputState" class="form-control" name="division">
	        		<option selected>{{($companyaddress->division)}}</option>
	        		<option>Dhaka</option>
	        		<option>Rajshahi</option>
	        		<option>Khulna</option>
	        		<option>Barishal</option>
	        		<option>Sylhet</option>
	        		<option>Chittagong</option>
	        		<option>Rangpur</option>
	        		<option>Maymanshing</option>
	    		</select>
	    	</div>
	  	</div>
	  <center><button type="submit" class="btn btn-primary">Update Now</button></center>
	</form>
</div>
@endsection