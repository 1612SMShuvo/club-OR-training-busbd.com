@extends("adminmainpage")
@section("content")
<div class="container" style="padding: 15px;">
	<a href="{{URL::to('view_goalorg')}}"><button class="btn btn-info" style="color: black; padding: 15px;">সকল লক্ষ্য ও উদ্দেশ্য দেখুন</button></a>
	<center><h2>লক্ষ ও উদ্দেশ্য সংযুক্ত করুন</h2></center>
	<form action="{{URL::to('add_goal')}}" method="POST">
		@csrf
		<div class="form-group">
	    	<label for="inputEmail4">সংস্থার নাম</label>
	    	<input type="text" class="form-control" id="inputEmail4" name="name" placeholder="সংস্থার নাম লিখুন ">
	    </div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-4">
			    <label for="inputEmail4">সংস্থার লক্ষ্য সমূহ</label>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal1" placeholder="সংস্থার ১ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal2" placeholder="সংস্থার ২য় লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal3" placeholder="সংস্থার ৩য় লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal4" placeholder="সংস্থার ৪র্থ লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal5" placeholder="সংস্থার ৫ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal6" placeholder="সংস্থার ৬ষ্ঠ লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal7" placeholder="সংস্থার ৭ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal8" placeholder="সংস্থার ৮ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal9" placeholder="সংস্থার ৯ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal10" placeholder="সংস্থার ১০ম লক্ষ্য লিখুন"><br>
		    </div>
			<div class="form-group col-lg-6 col-md-6 col-sm-6">
			    <label for="inputAddress">সংস্থার উদ্দেশ্য সমূহ</label>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention1" placeholder="সংস্থার ১ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention2" placeholder="সংস্থার ২য় উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention3" placeholder="সংস্থার ৩য় উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention4" placeholder="সংস্থার ৪র্থ উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention5" placeholder="সংস্থার ৫ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention6" placeholder="সংস্থার ৬ষ্ঠ উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention7" placeholder="সংস্থার ৭ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention8" placeholder="সংস্থার ৮ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention9" placeholder="সংস্থার ৯ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention10" placeholder="সংস্থার ১০ম উদ্দেশ্য লিখুন"><br>
			</div>
		  	<center><button type="submit" class="btn btn-success">সংযুক্ত করুন</button></center>
		</div> 
	</form>
</div>
<br><br><br>
<hr>
@endsection