@extends("adminmainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
            <center><h2>সাধারণ সম্পাদকের বাণী</h2></center>
            <br><hr>
            <form action="{{URL::to('updategsecretary/'.$speeches->id)}}" method="POST" enctype="multipart/form-data">
            	@csrf
		        <div class="row">
		            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4" style="padding-right: 40px;">
		                <img class="d-block w-100" src="{{URL::to($speeches->image)}}" alt="">
	                </div>
	                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-4">
		                <div class="single-product-details">
		                	<input type="file" class="form-control" name="image" value="{{($speeches->image)}}">
	                        <h4>সাধারণ সম্পাদকের নাম:&nbsp;&nbsp;</h4><b></b>
	                		<input type="text" class="form-control" name="g_name" value="{{($speeches->g_name)}}">
	                		<h4>সাধারণ সম্পাদকের ঠিকানা:&nbsp;&nbsp;</h4><b></b>
	                		<input type="text" class="form-control" name="g_address" value="{{($speeches->g_address)}}">
	                        <h4>সাধারণ সম্পাদকের ফোন নম্বর:&nbsp;&nbsp;</h4><b></b>
	                		<input type="text" class="form-control" name="g_mobile" value="{{($speeches->g_mobile)}}">
	                        <h4>সাধারণ সম্পাদকের বানী:&nbsp;&nbsp;</h4><b></b>
	                		<textarea class="form-control" id="exampleFormControlTextarea1" name="g_talk" rows="5">{{($speeches->g_talk)}}</textarea><br>
	                    </div>
	                    <br>
				        <center>
				        	<button type="submit" class="btn btn-success">আপডেট করুন</button>
				        	<a href="{{URL::to('gsecretarytalk')}}"><button type="button" class="btn btn-warning">আপডেট বাতিল করুন</button></a>
				        </center>
		            </div>
		        </div>
		    </form>
        </div>
    </div>

@endsection