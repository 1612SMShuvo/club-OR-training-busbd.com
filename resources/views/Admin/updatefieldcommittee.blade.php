@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>সংশোধন</h2></div></center>
	<center><img src="{{URL::to($committees->image)}}" style="height: 300px; width: 300px;"></center>
	<br>
	<hr>
	<form action="{{URL::to('update_fieldcommittee/'.$committees->id)}}" method="POST">
		@csrf
		<div class="form-group">
			<label for="inputEmail4">আইডি</label>
	    	<input type="text" class="form-control" id="inputEmail4" name="applicant_id" value="{{($committees->applicant_id)}}" readonly="">
		</div>
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">কমিটির নাম</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="committee_name" value="{{($committees->committee_name)}}" placeholder="কমিটির নাম লিখুন " readonly="">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">সদস্যর নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="advisor_name" value="{{($committees->advisor_name)}}" placeholder="সদস্যর নাম লিখুন  ">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    <label for="inputAddress">সদস্যর পদবী</label>
			    <select class="form-control" id="exampleFormControlSelect1" name="rank">
			    	<option selected="">{{($committees->rank)}}</option>
			    	<option value="প্রধান">প্রধান </option> 
			    	<option value="সদস্য">সদস্য</option>
			    </select>
			</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">সদস্যর মোবাইল</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="phone" value="{{($committees->phone)}}" placeholder="সদস্যর মোবাইল লিখুন ">
			</div>
		</div>
		<div class="form-row"> 
	    		<label for="inputCity">সদস্যর ঠিকানা</label>
	    		<input type="text" class="form-control" name="address" id="inputCity" value="{{($committees->address)}}" placeholder="সদস্যর ঠিকানা লিখুন ">
	  	</div> 
		<input type="text" class="form-control" id="inputAddress2" name="image" value="{{($committees->image)}}" readonly="" hidden="">
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংশোধন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection