@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	<form action="{{URL::to('update_subcommittee/'.$committees->id)}}" method="POST">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">কমিটির নাম</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="committee_name" value="{{($committees->committee_name)}}" placeholder="কমিটির নাম লিখুন " readonly="">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">উপদেষ্টার নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="advisor_name" value="{{($committees->advisor_name)}}" placeholder="উপদেষ্টার নাম লিখুন  ">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">উপদেষ্টার পদবী</label>
		    	<input type="text" class="form-control" id="inputAddress" name="rank" value="{{($committees->rank)}}" placeholder="উপদেষ্টার পদবী লিখুন ">
			</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">উপদেষ্টার মোবাইল</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="phone" value="{{($committees->phone)}}" placeholder="উপদেষ্টার মোবাইল লিখুন ">
			</div>
		</div>
		<div class="form-row"> 
	    		<label for="inputCity">উপদেষ্টার ঠিকানা</label>
	    		<input type="text" class="form-control" name="address" id="inputCity" value="{{($committees->address)}}" placeholder="উপদেষ্টার ঠিকানা লিখুন ">
	  	</div>  
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংশোধন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection