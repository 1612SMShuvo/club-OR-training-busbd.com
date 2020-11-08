@extends("membermainpage")
@section("content")
<div class="container">
	<div class="row">
		<div class="col-xl-6 col-lg-6 col-md-6"  style="padding-left: 40px;">
		    <center><h2>উপদেষ্টা বিবরণী</h2></center>
		    <br><hr>
		    <div class="single-product-details">
		        <h4>উপদেষ্টার নাম:&nbsp;&nbsp;<b style="font-size: 14px;">{{$advisor->a_name}}</b></h4>
		        <h4>উপদেষ্টার ঠিকানা:&nbsp;&nbsp;<b style="font-size: 14px;">{{$advisor->address}}</b></h4>
		        <h4>উপদেষ্টার ফোন নম্বর:&nbsp;&nbsp;<b style="font-size: 14px;">{{$advisor->phone}}</b></h4>
		        <h4>উপদেষ্টার ক্লাব:&nbsp;&nbsp;<b style="font-size: 14px;">{{$advisor->club}}</b><br></h4>
		    </div>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6" style="padding:30px;">
			<img style="height: 500px; width: 400px;" src="{{URL::to($advisor->image)}}">
		</div>
	</div>
	<br><hr>
</div>
@endsection