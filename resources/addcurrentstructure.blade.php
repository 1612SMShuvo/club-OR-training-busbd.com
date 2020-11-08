@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br>
	<form action="{{URL::to('add_currentstructure')}}" method="POST">
		@csrf
		<div class="form-group col-lg-12 col-sm-12 col-md-12">
	    	<label for="inputState">মূল-প্রকল্পের নাম </label>
	    	<select id="inputState" class="form-control" name="main_project">
	       		<option selected>বেছে নিন... </option>
	       		@foreach($project as $data)
	       		<option value="{{($data->project_name)}}">{{($data->project_name)}}</option>
	       		@endforeach
	    	</select>
	    </div>
			<div class="form-group col-lg-12 col-sm-12 col-md-12">
		    	<label for="inputAddress">সহ-প্রকল্পের নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="structure_name" placeholder="সহ-প্রকল্পের নাম">
			</div>
	    	<div class="form-group col-lg-12 col-sm-12 col-md-12">
	    		<label for="inputEmail4">সহ-প্রকল্পের ঠিকানা</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="address" placeholder="চলমান কাঠামোর ঠিকানা">
	    	</div>
	    	<div class="form-group col-lg-12 col-sm-12 col-md-12">
	    		<label for="inputEmail4">সহ-প্রকল্পের</label>
	    		<textarea class="form-control" id="exampleFormControlTextarea4" raws="3" name="description" placeholder="সংস্থার চলমান কাঠামোর বিবরনী"></textarea>
	    	</div>
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection