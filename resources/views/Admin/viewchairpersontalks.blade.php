@extends("adminmainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
            <center><h2>সভাপতির বাণী</h2></center>
            <br><hr>
            <form action="{{URL::to('updatespech_chairperson/'.$speech->id)}}" method="POST"  enctype="multipart/form-data">
            	@csrf
            	<input type="hidden" name="">
            	<input type="hidden" name="">
		        <div class="row">
		            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4" style="padding-right: 40px;">
		                <img class="d-block w-100" src="{{URL::to($speech->image)}}" alt="">
	                </div>
	                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-4">
		                <div class="single-product-details">
		                	<input type="file" class="form-control" name="image" value="{{($speech->image)}}">
	                        <h4>সভাপতির নাম:&nbsp;&nbsp;</h4><b></b><br>
	                		<input type="text" class="form-control" name="c_name" value="{{($speech->c_name)}}"><br>
	                        <h4>সভাপতির ঠিকানা:&nbsp;&nbsp;</h4><b></b>
	                		<input type="text" class="form-control" name="c_address"  value="{{($speech->c_address)}}"><br>
	                        <h4>সভাপতির ফোন নম্বর:&nbsp;&nbsp;</h4><b></b><br>
	                		<input type="text" class="form-control" name="c_mobile"  value="{{($speech->c_mobile)}}"><br>
	                        <h4>সভাপতির বানী:&nbsp;&nbsp;</h4><b></b><br>
	                		<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="c_talk"> value="{{($speech->c_talk)}}"</textarea><br>
	                    </div>
		            </div>
		        </div>
		        <center>
		        	<button type="submit" class="btn btn-success">আপডেট করুন</button>
		        	<a href="{{URL::to('chairpersontalks')}}"><button type="button" class="btn btn-warning">আপডেট বাতিল করুন</button></a>
		        </center>
		    </form>
        </div>
    </div>

@endsection