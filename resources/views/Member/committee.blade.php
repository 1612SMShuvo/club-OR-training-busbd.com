@extends("membermainpage")
@section("content")
<center>
    <div class="shop-detail-box-main">
        <div class="container">
        	<a href="{{URL::to('reliefcommittee')}}"><button class="btn btn-success">ত্রান বিষয়ক সহ-কমিটি</button></a>
        	<a href="{{URL::to('resourcescommittee')}}"><button class="btn btn-success">কর্ম সংস্থান বিষয়ক সহ-কমিটি</button></a>
        	<a href="{{URL::to('fieldcommittee')}}"><button class="btn btn-success">মাঠ বিষয়ক সহ-</button></a>

       </div>
   </div>
</center>
<br><br><br>
<hr>
@endsection