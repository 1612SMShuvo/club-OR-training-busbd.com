@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	<form action="{{URL::to('addsub_committees')}}" method="POST">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">কমিটির নাম</label>
				<select id="inputState" class="form-control" name="committee_name">
			        <option selected>সাব-কমিটির নাম লিখুন</option>
			        <option value="উপদেষ্টা সাব-কমিটি">উপদেষ্টা সাব-কমিটি</option>
			        <option value="ত্রান উপদেষ্টা সাব-কমিটি">ত্রান উপদেষ্টা সাব-কমিটি</option>
			        <option value="কর্ম সংস্থান উপদেষ্টা সাব-কমিটি">কর্ম সংস্থান উপদেষ্টা সাব-কমিটি</option>
			        <option value="মাঠ সাব-কমিটি">মাঠ সাব-কমিটি</option>
			    </select>
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">সদস্যের নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="advisor_name" placeholder="সদস্যের নাম লিখুন  ">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">সদস্যের পদবী</label>
		    	<input type="text" class="form-control" id="inputAddress" name="rank" placeholder="সদস্যের পদবী লিখুন ">
			</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">সদস্যের মোবাইল</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="phone" placeholder="সদস্যের মোবাইল লিখুন ">
			</div>
		</div>
		<div class="form-row"> 
	    		<label for="inputCity">সদস্যের ঠিকানা</label>
	    		<input type="text" class="form-control" name="address" id="inputCity" placeholder="সদস্যের ঠিকানা লিখুন ">
	  	</div> 
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection