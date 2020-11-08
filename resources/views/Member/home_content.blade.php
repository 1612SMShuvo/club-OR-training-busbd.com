@extends('membermainpage')
@section('content')
    <!-- Start Slider -->
    <div class="row" style="padding-left: 10px;">
        <div class="col-md-9 col-sm-12 col-lg-9">
            <div id="slides-shop" class="cover-slides">
                <ul class="slides-container">
                    @foreach($slides as $ss)
                    <li class="text-left">
                        <img src="{{URL::to($ss->image)}}"  class="img-fluid" alt="Responsive image" alt="">
                    </li>
                    @endforeach
                </ul>
            </div>
            <br>
            @php $i=0; @endphp
            <div class="row form-group" style="padding-left: 15px;">
                <div class="col-md-2 bg-info">
                    <center><h3 style="padding: 10px;">নিউজ সমূহ</h3></center>
                </div>
                <div class="col-md-9 text-truncate" style="padding: 10px; padding-right:20px;color: black; background-color: #d8e3df;">
                    @foreach($nss as $data)
                        <marquee behavior="scroll">
                            <a href="{{URL::to('viewnews/'.$data->id)}}">
                                <p>
                                    {{$data->title}}
                                </p>
                            </a>
                        </marquee>
                    @endforeach
                </div>
            </div> 

            <div class="about">
                <label for="exampleFormControlTextarea1" style="color:black; padding: 10px; padding-right:7px;color: black; font-size: 18px;background-color: #17A2B8;"><center>প্রতিষ্ঠান সম্পর্কে</center></label>
                <p class="box" rows="3" style="padding: 10px; color: black;">{{($abouts->about)}}</p>
                <center>
                    <a href="{{URL::to('about_org')}}"><button class="btn btn-info"> More</button></a>
                </center>
            </div>
                    <div class="row">
                        <div class="col">
                            <div class="bg-info"><center><h4 style="padding-top: 5px;padding-bottom: 5px; color: black;"><b>Advisors</b></h4></center></div>
                            <marquee behavior="scroll">
                                @foreach($adv1 as $ad)
                                <a href="{{URL::to('')}}">
                                    <img src="{{URL::to($ad->image)}}" style="height: 256px; width: 256px;">
                                </a>
                                @endforeach
                            </marquee>
                        </div>
                        <div class="col">
                            <div class="bg-success"><center><h4 style="padding-top: 5px; padding-bottom: 5px; color: black;"><b>Committee</b></h4></center></div>
                            <marquee behavior="scroll">
                                @foreach($com1 as $cm)
                                <img src="{{URL::to($cm->image)}}" style="height: 256px; width: 256px;">
                                @endforeach
                            </marquee>
                        </div>
                    </div>
        </div>
        <div class="col-md-3 col-sm-12 col-lg-3">
            <div class="speech text-truncate">
                <center>
                        <div class="p-3 mb-2 bg-info text-white"><h2><b>সভাপতির বাণী</b></h2></div>
                        <img src="{{$chairpersons->image}}" style="height: 256px; width: 256px;">
                        <hr>
                        <a href="{{URL::to('speak_chairperson')}}"><h4 style="color: black;"><b>{{$chairpersons->c_name}}</b></h4></a>
                        <h4 style="color: black;"><p>সভাপতি</p></h4>
                </center>
            </div><br>
            <div class="speech text-truncate">
                <center>
                        <div class="p-3 mb-2 bg-info text-white"><h2><b>সাঃ সম্পাদকের বাণী</b></h2></div>
                        <img src="{{($gsecretarys->image)}}" style="height: 256px; width: 256px;">
                        <hr>
                        <a href="{{URL::to('speak_gsecretary')}}"><h4 style="color: black;"><b>{{$gsecretarys->g_name}}</b></h4></a>
                        <h4 style="color: black;"><p>সাঃ সম্পাদক</p></h4>
                </center>
            </div><br>
            @php $i=0; @endphp
            <div class="others text-truncate">
                <center>
                    <div class="p-3 mb-2 bg-info text-white"><h2 style="color: black;"><b>আইটি সার্ভিস</b></h2></div>
                </center>
                <div class="form-group">
                    <select multiple class="form-control" id="exampleFormControlSelect2" style="height:140px">
                    @foreach($itservices as $it)
                      <option>@php echo $i=$i+1; @endphp. <a href="{{URL::to('/'.$it->id)}}">{{($it->itservice)}}</a></option>
                      @endforeach
                    </select>
                </div>
            </div><br>
            <div class="others text-truncate">
                <center>
                    <div class="p-3 mb-2 bg-info text-white"><h2 style="color: black;"><b>হট লাইন নং</b></h2></div>
                </center>
                <div class="form-group">
                    <select multiple class="form-control" id="exampleFormControlSelect2" style="height:140px">
                    @foreach($num as $kk)
                      <option class="fas fa-phone-square">&nbsp;<b>{{($kk->name)}}</b>&nbsp;:&nbsp;{{($kk->number)}}</option>
                      @endforeach
                    </select>
                </div>
            </div><br>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container col-sm-12 col-md-12 col-lg-12">
                <center><h2 style="color:blue;"><b>Addvertisement</b></h2></center><br>
            <div class="row">
                @foreach($adds as $dd)
                    <div class="col-lg-4 col-md-4 col-sm-12"><img src="{{URL::to($dd->image1)}}" style="height: 256px;width: 490px;"></div>
                    <div class="col-lg-4 col-md-4 col-sm-12"><img src="{{URL::to($dd->image2)}}" style="height: 256px;width: 490px;"></div>
                    <div class="col-lg-4 col-md-4 col-sm-12"><img src="{{URL::to($dd->image3)}}" style="height: 256px;width: 490px;"></div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection