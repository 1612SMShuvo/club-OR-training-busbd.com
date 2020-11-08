@extends("membermainpage")
@section("content")
<div class="container">
	<center><h2>কর্ম সংস্থান উপদেষ্টা কমিটির সদস্যের বিবরণী</h2></center>
	<br><hr>
	<div class="single-product-details" style="padding:40px;">
	    <h4>কমিটির নাম:&nbsp;&nbsp;</h4><b>{{($info->committee_name)}}</b>
	    <h4>সদস্যের নাম:&nbsp;&nbsp;</h4><b>{{($info->advisor_name)}}</b>
	    <h4>সদস্যের ঠিকানা:&nbsp;&nbsp;</h4><b>{{($info->address)}}</b>
	    <h4>সদস্যের ফোন নম্বর:&nbsp;&nbsp;</h4><b>{{($info->phone)}}</b>
	    <h4>পদবী:&nbsp;&nbsp;</h4><b>{{($info->rank)}}</b>
	</div>
</div>
<br><hr>
@endsection