@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	<form action="{{URL::to('add_photos')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-lg-12 col-md-10 col-sm-4">
	    		<label for="inputEmail4">ছবির নাম লিখুন</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="name" placeholder="ছবির নাম লিখুন">
	    	</div>
	    	<div class="form-group col-lg-12 col-md-10 col-sm-4">
	    		<label for="inputEmail4">নতুন ছবি বেছে নিন</label>
	    		<input type="file" class="form-control" id="inputEmail4" name="image">
	    	</div>
		</div>  
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection