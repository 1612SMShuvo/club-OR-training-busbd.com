@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	<form action="{{URL::to('add_famousperson')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">ব্যাক্তির নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="name" placeholder="ব্যাক্তির নাম লিখুন ">
			</div>
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">ব্যাক্তির মায়ের নাম</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="mother_name" placeholder="ব্যাক্তির মায়ের নাম লিখুন ">
	    	</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">ব্যাক্তির পিতার নাম</label>
		    	<input type="text" class="form-control" id="inputAddress" name="father_name" placeholder="ব্যাক্তির পিতার নাম লিখুন ">
			</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">ঠিকানা</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="address" placeholder="ব্যাক্তির ঠিকানা লিখুন ">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">কর্মস্থলের ঠিকানা</label>
		    	<input type="text" class="form-control" id="inputAddress" name="work_place" placeholder="ব্যাক্তির কর্মস্থলের ঠিকানা লিখুন ">
			</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">মোবাইল নম্বর </label>
		    	<input type="text" class="form-control" id="inputAddress2" name="phone" placeholder="ব্যাক্তির মোবাইল নম্বর লিখুন ">
			</div>
	  	</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">পদবী</label>
		    	<input type="text" class="form-control" id="inputAddress" name="rank" placeholder="ব্যাক্তির পদবী লিখুন ">
			</div> 
			<div class="form-group col-md-6">
		    	<label for="inputAddress2">ছবি(Maximum: 1MB)</label>
		    	<input type="file" class="form-control" id="inputAddress2" name="image">
			</div>
	  	</div> 
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection