@extends("adminmainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
            <center><h2>উপদেষ্টার তথ্যাদি</h2></center>
            <br><hr>
            <div class="row">
            	<div class="col-md-4 col-lg-4 col-sm-12">
            		<img src="{{URL::to($info->image)}}" style="height: 300px; width: 300px;">
            	</div>
            <br>
            <div class="col-lg-8 col-md-8 col-sm-12">
	            <form action="{{URL::to('update_advisors/'.$info->id)}}" method="POST"  enctype="multipart/form-data">
	            	@csrf
			        <div class="form-group">
						<label for="inputEmail4">আইডি</label>
				    	<input type="text" class="form-control" id="inputEmail4" name="applicant_id" value="{{($info->applicant_id)}}" readonly="">
					</div>
					<div class="form-row">
				    	<div class="form-group col-md-6">
				    		<label for="inputEmail4">ক্লাবের নাম</label>
				    		<input type="text" class="form-control" id="inputEmail4" name="club" value="{{($info->club)}}" placeholder="ক্লাবের নাম লিখুন " readonly="">
				    	</div>
						<div class="form-group col-md-6">
					    	<label for="inputAddress">উপদেষ্টার নাম </label>
					    	<input type="text" class="form-control" id="inputAddress" name="a_name" value="{{($info->a_name)}}" placeholder="উপদেষ্টার নাম লিখুন  ">
						</div>
					</div>
					<input type="hidden" name="email" value="{{($info->email)}}">
					<div class="form-row">
						<div class="form-group col-md-6">
					    <label for="inputAddress">উপদেষ্টার পদবী</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="rank">
						    	<option selected="">{{($info->rank)}}</option>
						    	<option value="প্রধান">প্রধান </option> 
						    	<option value="সদস্য">সদস্য</option>
						    </select>
						</div>
						<div class="form-group col-md-6">
					    	<label for="inputAddress2">উপদেষ্টার মোবাইল</label>
					    	<input type="text" class="form-control" id="inputAddress2" name="phone" value="{{($info->phone)}}" placeholder="উপদেষ্টার মোবাইল লিখুন ">
						</div>
					</div>
					<div class="form-row"> 
				    		<label for="inputCity">উপদেষ্টার ঠিকানা</label>
				    		<input type="text" class="form-control" name="address" id="inputCity" value="{{($info->address)}}" placeholder="উপদেষ্টার ঠিকানা লিখুন ">
				  	</div>
					<input type="hidden" name="image" value="{{($info->image)}}">
				  	<br> <br> 
			        <center>
			        	<button type="submit" class="btn btn-success">আপডেট করুন</button>
			        	<a href="{{URL::to('advisors')}}"><button type="button" class="btn btn-warning">আপডেট বাতিল করুন</button></a>
			        </center>
			    </form>
			</div>
        </div>
    </div>

@endsection