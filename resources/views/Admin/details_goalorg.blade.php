@extends("adminmainpage")
@section("content")
<div class="container col-lg-10 col-md-10 col-sm-10">
	<center><h2>আমাদের সংস্থা </h2></center>
	<form action="{{URL::to('update_goalorg/'.$goals->id)}}" method="POST">
		@csrf
		<br>
		<hr>
		<label for="inputEmail4">সংস্থার নাম</label>
		<input type="text" class="form-control" id="inputEmail4" name="name" value="{{($goals->name)}}" placeholder="সংস্থার নাম" ><br>
		<div class="row">
			
			<div class="col-lg-6 col-md-6 col-sm-4">
			    <label for="inputEmail4">সংস্থার লক্ষ্য সমূহ</label>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal1" value="{{($goals->goal1)}}" placeholder="সংস্থার ১ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal2" value="{{($goals->goal2)}}" placeholder="সংস্থার ২য় লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal3" value="{{($goals->goal3)}}" placeholder="সংস্থার ৩য় লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal4" value="{{($goals->goal4)}}" placeholder="সংস্থার ৪র্থ লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal5" value="{{($goals->goal5)}}" placeholder="সংস্থার ৫ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal6" value="{{($goals->goal6)}}" placeholder="সংস্থার ৬ষ্ঠ লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal7" value="{{($goals->goal7)}}" placeholder="সংস্থার ৭ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal8" value="{{($goals->goal8)}}" placeholder="সংস্থার ৮ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal9" value="{{($goals->goal9)}}" placeholder="সংস্থার ৯ম লক্ষ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="goal10" value="{{($goals->goal10)}}" placeholder="সংস্থার ১০ম লক্ষ্য লিখুন"><br>
		    </div>
			<div class="form-group col-lg-6 col-md-6 col-sm-6">
			    <label for="inputAddress">সংস্থার উদ্দেশ্য সমূহ</label>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention1" value="{{($goals->intention1)}}" placeholder="সংস্থার ১ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention2" value="{{($goals->intention2)}}" placeholder="সংস্থার ২য় উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention3" value="{{($goals->intention3)}}" placeholder="সংস্থার ৩য় উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention4" value="{{($goals->intention4)}}" placeholder="সংস্থার ৪র্থ উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention5" value="{{($goals->intention5)}}" placeholder="সংস্থার ৫ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention6" value="{{($goals->intention6)}}" placeholder="সংস্থার ৬ষ্ঠ উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention7" value="{{($goals->intention7)}}" placeholder="সংস্থার ৭ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention8" value="{{($goals->intention8)}}" placeholder="সংস্থার ৮ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention9" value="{{($goals->intention9)}}" placeholder="সংস্থার ৯ম উদ্দেশ্য লিখুন"><br>
			   	<input type="text" class="form-control" id="inputEmail4" name="intention10" value="{{($goals->intention10)}}" placeholder="সংস্থার ১০ম উদ্দেশ্য লিখুন"><br>
			</div>
		</div>
		<center><button type="submit" class="btn btn-success">আপডেট করুন</button></center>
	</form>
</div>
<br><br><br>
<hr>
@endsection