@extends("membermainpage")
@section("content")
<div class="container">
		    <center><h2>প্রকল্পের বিবরণী</h2></center>
		    <br><hr>
		    <div class="single-product-details">
		        <h4>মূল-প্রকল্পের নাম:&nbsp;&nbsp;</h4><b>{{($proj->project_name)}}</b><br>
		        <h4>সহ-প্রকল্পের নাম:&nbsp;&nbsp;</h4><b>{{($proj->subproject_name)}}</b><br>
		        <h4>প্রকল্পের ঠিকানা:&nbsp;&nbsp;</h4><b>{{($proj->address)}}</b><br>
		        <h4>প্রকল্পের বিবরনী:&nbsp;&nbsp;</h4><b>{{($proj->description)}}</b><br>
		        <h4>প্রকল্পের খরচ:&nbsp;&nbsp;</h4><b>{{($proj->min_cost)}}</b><br>
		    </div>
		    <br><hr>
</div>
@endsection