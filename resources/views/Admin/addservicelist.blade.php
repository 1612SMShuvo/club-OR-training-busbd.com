@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	<form action="{{'add_service'}}" method="POST">
		@csrf
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">সেবার নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="service_name" placeholder="সেবার নাম লিখুন">
			</div>
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">সেবার সর্বনিম্ন খরচ</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="min_cost" placeholder="সেবার সর্বনিম্ন খরচ টাকায় লিখুন">
	    	</div>
		</div> 
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection