@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br>
	<form action="{{URL::to('update_projectsonly/'.$project->id)}}" method="POST">
		@csrf
			<div class="form-group col-lg-12 col-sm-12 col-md-12">
		    	<label for="inputAddress">কাঠামোর নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="project_name" value="{{$project->project_name}}" placeholder="চলমান কাঠামোর নাম">
			</div>
			<div class="form-group col-lg-12 col-sm-12 col-md-12">
		    	<label for="inputAddress">কাঠামোর স্বকীয়তা </label>
	    		<select id="inputState" class="form-control" name="status">
	        		<option selected value="{{($project->status)}}">{{($project->status)}}</option>
	        		<option value="চলমান">চলমান</option>
	        		<option value="পরিকল্পিত">পরিকল্পিত</option>
	    		</select>
			</div>
	  	<br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
</div>
@endsection