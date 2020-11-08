@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	<form action="{{URL::to('add_video')}}" method="POST"  enctype="multipart/form-data">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-lg-12 col-md-10 col-sm-4">
	    		<label for="inputEmail4">ভিডিও নাম লিখুন</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="title" placeholder="ভিডিওর নাম লিখুন">
	    	</div>
	    	<div class="form-group col-lg-12 col-md-10 col-sm-4">
	    		<label for="inputEmail4">ভিডিও লিঙ্ক</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="video" placeholder="ভিডিও লিঙ্ক দিন ">
	    	</div>
		</div>  
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection