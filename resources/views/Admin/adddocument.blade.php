@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br><br><br>
	<form action="{{URL::to('add_document')}}" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="form-group col-lg-10 col-sm-4 col-md-10">
		    	<label for="inputAddress">ডকুমেন্টের নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="title" placeholder="ডকুমেন্টের নাম ">
			</div>
	    	<div class="form-group col-lg-10 col-sm-4 col-md-10">
	    		<label for="inputEmail4">ডকুমেন্ট বেছে নিন</label>
	    		<input type="file" class="form-control" id="inputEmail4" name="file">
	    	</div>
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection