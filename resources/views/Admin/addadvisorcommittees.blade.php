@extends("adminmainpage")
@section("content")
<div class="container">
	<hr>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	@if($value>=1)
	<center><img src="{{URL::to($committees->pp_image)}}" style="height: 300px; width: 300px;"></center>
	<br>
	<hr>
	<form action="{{URL::to('addadvisor_committees')}}" method="POST">
		@csrf
		<div class="form-group">
			<label for="inputEmail4">আইডি</label>
	    	<input type="text" class="form-control" id="inputEmail4" name="applicant_id" value="{{($committees->applicant_id)}}" readonly="">
		</div>
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">কমিটির নাম</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="committee_name" value="উপদেষ্টা কমিটি" placeholder="কমিটির নাম লিখুন " readonly="">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">উপদেষ্টার নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="advisor_name" value="{{($committees->name)}}" placeholder="উপদেষ্টার নাম লিখুন  ">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    <label for="inputAddress">উপদেষ্টার পদবী</label>
			    <select class="form-control" id="exampleFormControlSelect1" name="rank">
			    	<option selected="">বেছে নিন......</option>
			    	<option value="প্রধান">প্রধান </option> 
			    	<option value="সদস্য">সদস্য</option>
			    </select>
			</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">উপদেষ্টার মোবাইল</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="phone" value="{{($committees->mobile)}}" placeholder="উপদেষ্টার মোবাইল লিখুন ">
			</div>
		</div>
		<div class="form-row"> 
	    		<label for="inputCity">উপদেষ্টার ঠিকানা</label>
	    		<input type="text" class="form-control" name="address" id="inputCity" value="{{($committees->c_house.', '.$committees->c_village.', '.$committees->c_postoffice.', '.$committees->c_upzilla.', '.$committees->c_zilla)}}" placeholder="উপদেষ্টার ঠিকানা লিখুন ">
	  	</div> 
		<input type="text" class="form-control" id="inputAddress2" name="image_text" value="{{($committees->pp_image)}}" readonly="" hidden="">
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
	<br><br>
	<hr>
	@else
		<form action="{{URL::to('addadvisor_committees')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="inputEmail4">আইডি</label>
		    	<input type="text" class="form-control" id="inputEmail4" name="applicant_id" readonly="">
			</div>
			<div class="form-row">
		    	<div class="form-group col-md-6">
		    		<label for="inputEmail4">কমিটির নাম</label>
		    		<input type="text" class="form-control" id="inputEmail4" name="committee_name" value="উপদেষ্টা কমিটি" placeholder="কমিটির নাম লিখুন " readonly="">
		    	</div>
				<div class="form-group col-md-6">
			    	<label for="inputAddress">উপদেষ্টার নাম </label>
			    	<input type="text" class="form-control" id="inputAddress" name="advisor_name" placeholder="উপদেষ্টার নাম লিখুন  ">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
			    <label for="inputAddress">উপদেষ্টার পদবী</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="rank">
				    	<option selected="">বেছে নিন......</option>
				    	<option value="প্রধান">প্রধান </option> 
				    	<option value="সদস্য">সদস্য</option>
				    </select>
				</div>
				<div class="form-group col-md-6">
			    	<label for="inputAddress2">উপদেষ্টার মোবাইল</label>
			    	<input type="text" class="form-control" id="inputAddress2" name="phone" placeholder="উপদেষ্টার মোবাইল লিখুন ">
				</div>
			</div>
			<div class="form-row"> 
		    		<label for="inputCity">উপদেষ্টার ঠিকানা</label>
		    		<input type="text" class="form-control" name="address" id="inputCity" placeholder="উপদেষ্টার ঠিকানা লিখুন ">
		  	</div> 
		  	<br><br>
		  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
		</form>
	@endif
	<br><br>
	<hr>
</div>
@endsection