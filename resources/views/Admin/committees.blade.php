@extends("adminmainpage")
@section("content")
<center>
    <div class="shop-detail-box-main">
        <div class="container">
        	<a href="{{URL::to('reliefcommittees')}}"><button class="btn btn-info">ত্রান সাব-কমিটি</button></a>
        	<a href="{{URL::to('resourcescommittees')}}"><button class="btn btn-info">কর্ম সংস্থান সাব-কমিটি</button></a>
        	<a href="{{URL::to('fieldcommittees')}}"><button class="btn btn-info">মাঠ সাব-কমিটি</button></a>

       </div>
   </div>
</center>
<br><br><br>
<hr>
@endsection