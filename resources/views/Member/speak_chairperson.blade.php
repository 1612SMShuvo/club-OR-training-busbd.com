@extends("membermainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
        	<center><h2>সভাপতির বাণী</h2></center>
        	<br><hr>
            @if($value>=1)
            @foreach($speeches as $data)
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4" style="padding-right: 40px;">
                    <img class="d-block w-100" src="{{URL::to($data->image)}}" alt="">
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8"  style="padding-left: 40px;">
                	<br>
                    <div class="single-product-details">
                        <h4>সভাপতির নাম:&nbsp;&nbsp;</h4><b>{{($data->c_name)}}</b>
                        <h4>সভাপতির ঠিকানা:&nbsp;&nbsp;</h4><b>{{($data->c_address)}}</b>
                        <h4>সভাপতির ফোন নম্বর:&nbsp;&nbsp;</h4><b>{{($data->c_mobile)}}</b>
                        <h4>সভাপতির বানী:&nbsp;&nbsp;</h4><b>{{($data->c_talk)}}</b><br>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <center><h3 style="color:red;">There is no record</h3></center>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4" style="padding-right: 40px;">
                    <img class="d-block w-100" src="" alt="">
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8"  style="padding-left: 40px;">
                    <br>
                    <div class="single-product-details">
                        <h4>সভাপতির নাম:&nbsp;&nbsp;</h4><b></b>
                        <h4>সভাপতির ঠিকানা:&nbsp;&nbsp;</h4><b></b>
                        <h4>সভাপতির ফোন নম্বর:&nbsp;&nbsp;</h4><b></b>
                        <h4>সভাপতির বানী:&nbsp;&nbsp;</h4><b></b><br>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

@endsection