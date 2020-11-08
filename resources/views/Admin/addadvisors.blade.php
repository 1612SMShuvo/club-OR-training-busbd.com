@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br> 
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	@if($value>=1)
	<center><img src="{{URL::to($info->pp_image)}}" style="height: 300px; width: 300px;"></center>
	<br>
	<hr>
		<form action="{{URL::to('add_advisor')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="inputEmail4">আইডি</label>
		    	<input type="text" class="form-control" id="inputEmail4" name="applicant_id" value="{{($info->applicant_id)}}" readonly="">
			</div>
			<div class="form-row">
		    	<div class="form-group col-md-6">
		    		<label for="inputEmail4">ক্লাবের নাম</label>
		    		<input type="text" class="form-control" id="inputEmail4" name="club" placeholder="ক্লাবের নাম লিখুন ">
		    	</div>
				<div class="form-group col-md-6">
			    	<label for="inputAddress">উপদেষ্টার নাম </label>
			    	<input type="text" class="form-control" id="inputAddress" name="a_name" value="{{($info->name)}}" placeholder="উপদেষ্টার নাম লিখুন ">
				</div>
			</div><br>
			<div class="form-row">
				<div class="form-group col-md-6">
			    	<label for="inputAddress2">উপদেষ্টার মোবাইল</label>
			    	<input type="text" class="form-control" id="inputAddress2" name="phone" value="{{($info->mobile)}}" placeholder="উপদেষ্টার মোবাইল লিখুন ">
				</div>
				<div class="form-group col-md-6">
			    	<label for="inputAddress2">উপদেষ্টার ই-মেইল </label>
			    	<input type="email" class="form-control" id="inputAddress2" name="email" value="{{($info->email)}}" placeholder="উপদেষ্টার ই-মেইল লিখুন ">
				</div>
			</div><br>
			<div class="form-row">
				<div class="form-group col-md-6">
		    		<label for="inputCity">উপদেষ্টার ঠিকানা</label>
		    		<input type="text" class="form-control" name="address" id="address" value="{{($info->c_house.', '.$info->c_village.', '.$info->c_postoffice.', '.$info->c_upzilla.', '.$info->c_zilla)}}" placeholder="উপদেষ্টার সংক্ষিপ্ত ঠিকানা লিখুন">
		    	</div>
				<div class="form-group col-md-6">
			    	<label for="exampleFormControlSelect1" style="color: black;">উপদেষ্টার পদবী</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="rank">
				    	<option selected="">বেছে নিন......</option>
				    	<option value="সদস্য">সদস্য </option> 
				    	<option value="প্রধাণ">প্রধাণ</option>
				    </select>
				</div>
			    <input type="text" class="form-control" id="inputAddress2" name="image_text" value="{{($info->pp_image)}}" readonly="" hidden="">
		  	</div> 
		  	<br><br>
		  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
		</form>
	@else
		<form action="{{URL::to('add_advisor')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-row">
		    	<div class="form-group col-md-4">
		    		<label for="inputEmail4">ক্লাবের নাম</label>
		    		<input type="text" class="form-control" id="inputEmail4" name="club" placeholder="ক্লাবের নাম লিখুন ">
		    	</div>
				<div class="form-group col-md-4">
			    	<label for="inputAddress">উপদেষ্টার নাম </label>
			    	<input type="text" class="form-control" id="inputAddress" name="a_name" placeholder="উপদেষ্টার নাম লিখুন ">
				</div>
				<div class="form-group col-md-4">
			    	<label for="inputAddress">উপদেষ্টার পদবী</label>
			    	<input type="text" class="form-control" id="inputAddress" name="rank" placeholder="উপদেষ্টার পদবী লিখুন">
				</div>
			</div><br>
			<div class="form-row">
				<div class="form-group col-md-6">
			    	<label for="inputAddress2">উপদেষ্টার মোবাইল</label>
			    	<input type="text" class="form-control" id="inputAddress2" name="phone" placeholder="উপদেষ্টার মোবাইল লিখুন ">
				</div>
				<div class="form-group col-md-6">
			    	<label for="inputAddress2">উপদেষ্টার ই-মেইল </label>
			    	<input type="email" class="form-control" id="inputAddress2" name="email" placeholder="উপদেষ্টার ই-মেইল লিখুন ">
				</div>
			</div><br>
			<div class="form-row">
				<div class="form-group col-md-6">
		    		<label for="inputCity">উপদেষ্টার ঠিকানা</label>
		    		<input type="text" class="form-control" name="address" id="address" placeholder="উপদেষ্টার সংক্ষিপ্ত ঠিকানা লিখুন">
		    	</div>
				<div class="form-group col-md-6">
			    	<label for="inputAddress2">উপদেষ্টার ছবি (Maximum:1MB)</label>
			    	<input type="file" class="form-control" id="inputAddress2" name="image">
				</div> 
		  	</div> 
		  	<br><br>
		  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
		</form>
	@endif
	<br><br>
	<hr>
</div>
@endsection