@extends("adminmainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
            <center><h2>তথ্যাদি</h2></center>
            <br><hr>
            <form action="{{URL::to('update_famouspersons/'.$persons->id)}}" method="POST"  enctype="multipart/form-data">
            	@csrf
		        <div class="row">
		            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4" style="padding-right: 40px;">
		                <img class="d-block w-100" src="{{URL::to($persons->image)}}" alt="">
	                </div>
	                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-4">
		                <div class="form-group">
					    	<label for="inputAddress">ব্যাক্তির নাম </label>
					    	<input type="text" class="form-control" id="inputAddress" name="name" value="{{($persons->name)}}" placeholder="ব্যাক্তির নাম লিখুন ">
						</div>
				    	<div class="form-group">
				    		<label for="inputEmail4">ব্যাক্তির মায়ের নাম</label>
				    		<input type="text" class="form-control" id="inputEmail4" name="mother_name" value="{{($persons->mother_name)}}" placeholder="ব্যাক্তির মায়ের নাম লিখুন ">
				    	</div>
						<div class="form-group">
					    	<label for="inputAddress">ব্যাক্তির পিতার নাম</label>
					    	<input type="text" class="form-control" id="inputAddress" name="father_name" value="{{($persons->father_name)}}" placeholder="ব্যাক্তির পিতার নাম লিখুন ">
						</div>
						<div class="form-group">
					    	<label for="inputAddress2">ঠিকানা</label>
					    	<input type="text" class="form-control" id="inputAddress2" name="address" value="{{($persons->address)}}" placeholder="ব্যাক্তির ঠিকানা লিখুন ">
						</div>
						<div class="form-group">
					    	<label for="inputAddress">কর্মস্থলের ঠিকানা</label>
					    	<input type="text" class="form-control" id="inputAddress" name="work_place" value="{{($persons->work_place)}}" placeholder="ব্যাক্তির কর্মস্থলের ঠিকানা লিখুন ">
						</div>
						<div class="form-group">
					    	<label for="inputAddress2">মোবাইল নম্বর </label>
					    	<input type="text" class="form-control" id="inputAddress2" name="phone" value="{{($persons->phone)}}" placeholder="ব্যাক্তির মোবাইল নম্বর লিখুন ">
						</div>
						<div class="form-group">
					    	<label for="inputAddress">পদবী</label>
					    	<input type="text" class="form-control" id="inputAddress" name="rank" value="{{($persons->rank)}}" placeholder="ব্যাক্তির পদবী লিখুন ">
						</div> 
						<div class="form-group">
					    	<label for="inputAddress2">ছবি-আবারো বেছেনিন নতুন ছবি (Maximum:1MB)</label>
					    	<input type="file" class="form-control" id="inputAddress2" name="image" value="{{$persons->image}}" >
						</div> 
		            </div>
		        </div>
		        <center>
		        	<button type="submit" class="btn btn-success">আপডেট করুন</button>
		        	<a href="{{URL::to('famous_persons')}}"><button type="button" class="btn btn-warning">আপডেট বাতিল করুন</button></a>
		        </center>
		    </form>
        </div>
    </div>

@endsection