@extends("adminmainpage")
@section("content")
<div class="container">
	<center><h2>সংস্থা সম্পর্কে</h2></center>
	<br>
	<hr>
	<form action="{{URL::to('updateaboutorg/'.$about->id)}}" method="POST">
		@csrf
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সংস্থার নাম</label>
		    	<input type="text" class="form-control" id="inputAddress" name="name" value="{{($about->name)}}" placeholder="সংস্থার নাম">
			</div> 
	    	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	    		<label for="inputEmail4">সংস্থা সম্পর্কে</label>
		    	<textarea class="form-control" id="exampleFormControlTextarea4" raws="8" name="about" placeholder="সংস্থা সম্পর্কে" style="height: 300px;">{{($about->about)}}</textarea>
	    	</div>
	  	<center><button type="submit" class="btn btn-success">সংযুক্ত করুন</button></center>
	</form>
	<br>
</div>
@endsection