@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br>
	<form action="{{URL::to('update_currentstructure/'.$info->id)}}" method="POST">
		@csrf
		<div class="form-group  col-lg-12 col-sm-12 col-md-12">
			<input type="text" class="form-control" id="inputEmail4" name="project_name" value="{{($info->project_name)}}" placeholder="প্রকল্পের সর্বনিম্ন খরচ" readonly=""> 
		</div>
		<div class="form-row  col-lg-12 col-sm-12 col-md-12">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">সহ-প্রকল্পের নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="subproject_name" value="{{$info->subproject_name}}" placeholder="সহ-প্রকল্পের নাম " readonly="">
			</div>
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">প্রকল্পের সর্বনিম্ন খরচ</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="min_cost" value="{{$info->min_cost}}" placeholder="প্রকল্পের সর্বনিম্ন খরচ" readonly="">
	    	</div>
		</div> 
	    <div class="form-group col-lg-12 col-sm-12 col-md-12">
	    	<label for="inputState">সহ-প্রকল্পের স্বকীয়তা </label>
	    	<input type="text" class="form-control" id="inputEmail4" name="status" value="{{($info->status)}}" placeholder="প্রকল্পের সর্বনিম্ন খরচ" readonly=""> 
	    </div>
	    <div class="form-group col-lg-12 col-sm-12 col-md-12">
	   		<label for="inputEmail4">চলমান প্রকল্পের ঠিকানা</label>
	   		<input type="text" class="form-control" id="inputEmail4" name="address" value="{{($info->address)}}" placeholder="চলমান কাঠামোর ঠিকানা">
	   	</div>
	  	<div class="form-group col-lg-12 col-sm-12 col-md-12">
	   		<label for="inputEmail4">চলমান প্রকল্পের বিবরনী</label>
	   		<textarea class="form-control" id="exampleFormControlTextarea4" raws="5" name="description" placeholder="সংস্থার চলমান কাঠামোর বিবরনী">{{($info->description)}}</textarea>
	    </div>
	  	<br><br>
		<center><button type="submit" class="btn btn-primary">সংশোধন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection