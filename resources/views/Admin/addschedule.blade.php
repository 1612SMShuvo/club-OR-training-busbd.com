@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center>
		<div class="text"><h2>কার্যক্রম তৈরী করুন</h2></div>
	</center>
	<br><br><br><br>
	<form action="{{URL::to('add_schedule')}}" method="POST">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">তারিখ বাছুন</label>
	    		<input type="date" class="form-control" id="inputEmail4" name="date" placeholder="তারিখ বাছুন">
	    	</div> 
			<div class="form-group col-md-6">
		    	<label for="inputAddress">কার্যক্রম এর নাম লিখুন</label>
		    	<input type="text" class="form-control" id="inputAddress" name="event" placeholder="কার্যক্রম এর নাম লিখুন">
			</div> 
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
		    	<label for="inputAddress">কার্যক্রমের সময়কাল</label>
		    	<input type="number" class="form-control" id="inputAddress" name="days" placeholder="কার্যক্রমের সময়কাল লিখুন">
			</div> 
		   	<div class="form-group col-md-6">
		   		<label for="inputEmail4">কার্যক্রমের ঠিকানা</label>
		    	<input type="text" class="form-control" id="inputEmail4" name="place" placeholder="কার্যক্রমের ঠিকানা লিখুন">
		    </div>
		</div> 
		<div class="form-group">
	    	<label for="inputEmail4">সমন্বয়কারী গণ</label>
		    <textarea class="form-control" id="exampleFormControlTextarea4" raws="8" style="height: 200px;" name="co_ordinators" placeholder="সমন্বয়কারী গণ" required=""></textarea>
	    </div> 
	<center> 
	  	<button type="submit" class="btn btn-success">সংযুক্ত করুন</button>
	</center>
	</form>
	<br><br><br><br>
	@endsection