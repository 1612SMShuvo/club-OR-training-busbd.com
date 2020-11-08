@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>সংশোধন করুন</h2></div></center>
	<br><br><br><br>
	<form action="{{URL::to('update_projects/'.$project->id)}}" method="POST">
		@csrf
		<input type="text" class="form-control" id="inputEmail4" name="project_name" value="{{($project->project_name)}}" placeholder="প্রকল্পের সর্বনিম্ন খরচ" readonly=""> 
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">সহ-প্রকল্পের নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="subproject_name" value="{{$project->subproject_name}}" placeholder="সহ-প্রকল্পের নাম ">
			</div>
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">প্রকল্পের সর্বনিম্ন খরচ</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="min_cost" value="{{$project->min_cost}}" placeholder="প্রকল্পের সর্বনিম্ন খরচ">
	    	</div>
		</div> 
	    <div class="form-group">
	    	<label for="inputState">সহ-প্রকল্পের স্বকীয়তা </label>
	    	<select id="inputState" class="form-control" name="status">
	       		<option selected value="{{($project->status)}}">{{($project->status)}}</option>
	       		<option value="চলমান">চলমান</option>
	       		<option value="প্রকল্পিত">প্রকল্পিত</option> 
	    	</select>
	    </div>
	  	<br><br>
	  <center><button type="submit" class="btn btn-primary">সংশোধন করুন </button></center>
	</form>
	<br><br>
	<hr>
</div>
@endsection