@extends("membermainpage")
@section("content")
<div class="container">
	<center><h2>কমিটির সদস্যের বিবরণী</h2></center>
	<br><hr>
	<div class="row">
		<div class="col-xl-6 col-lg-6 col-md-6"  style="padding-left: 40px;">
			<div class="single-product-details" style="padding:40px;">
			    <h4>কমিটির নাম:&nbsp;&nbsp;<b style="font-size: 14px;">{{($info->committee_name)}}</b></h4>
			    <h4>সদস্যের নাম:&nbsp;&nbsp;<b style="font-size: 14px;">{{($info->advisor_name)}}</b></h4>
			    <h4>সদস্যের ঠিকানা:&nbsp;&nbsp;<b style="font-size: 14px;">{{($info->address)}}</b></h4>
			    <h4>সদস্যের ফোন নম্বর:&nbsp;&nbsp;<b style="font-size: 14px;">{{($info->phone)}}</b></h4>
			    <h4>পদবী:&nbsp;&nbsp;<b style="font-size: 14px;">{{($info->rank)}}</b></h4>
			</div>
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6"  style="padding-left: 40px;">
			<img style="height: 500px; width: 400px;" src="{{URL::to($info->image)}}">
		</div>
	</div>
</div>
<br><hr>
@endsection