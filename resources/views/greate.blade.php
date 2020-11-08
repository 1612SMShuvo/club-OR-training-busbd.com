<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Club Site</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{URL::to($icons->image)}}">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontendhome/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('frontendhome/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontendhome/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontendhome/css/custom.css')}}">

</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-default bootsnav" style="">
            <div class="container" >
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu" >
                    <a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{URL::to($logos->image)}}" style="height: 60px; width: 65px;" class="logo" alt=""></a>  
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">সম্পর্কে</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <center>
                                        <ul class="menu">
                                            <li><a href="{{URL::to('about_org')}}">সংস্থা সম্পর্কে</a></li>
                                            <li><a href="{{URL::to('goal_org')}}">লক্ষ্য ও উদ্দেশ্য</a></li>
                                            <li><a href="{{URL::to('speak_chairperson')}}">সভাপতির বাণী</a></li>
                                            <li><a href="{{URL::to('speak_gsecretary')}}">সম্পাদকের বাণী</a></li>
                                        </ul>
                                        <!-- end col-3 -->
                                    </center>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">কমিটি</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <center>
                                        <ul class="menu">
                                            <li><a href="{{URL::to('advisor')}}">উপদেষ্টা</a></li>
                                            <li><a href="{{URL::to('committee')}}">কমিটি</a></li>
                                            <li><a href="{{URL::to('subcommittee')}}">সাব কমিটি</a></li> 
                                        </ul>
                                        <!-- end col-3 -->
                                    </center>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('services')}}">সেবা সমূহ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('project')}}">প্রকল্প সমূহ</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">গ্যালারী</a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <center>
                                        <ul class="menu">
                                            <li><a href="{{URL::to('photos')}}">ছবিসমূহ</a></li>
                                            <li><a href="{{URL::to('videos')}}">ভিডিও সমূহ </a></li>
                                        </ul>
                                        <!-- end col-3 -->
                                    </center>
                                    <!-- end row -->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('calender')}}">পঞ্জিকা</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('currentstructures')}}">চলমান কাঠামো</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('documents')}}">ডকুমেন্টস</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{URL::to('contact')}}">যোগাযোগ</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- End Atribute Navigation -->
            </div>
            <a class="nav-link" href="{{URL::to('application')}}"><button class="btn btn-light"><b class="" style="color: blue;">&nbsp;আবেদন</b></button></a>
            <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-light"><b class="fa fa-user" style="color: red;">&nbsp;লগ ইন</b></button></a>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <!-- Start Top Search -->
    <!-- End Top Search -->

    <!-- Start Slider -->
    <!-- End Main Top -->
    <center>
    </center>
    <!-- Start Top Search -->
    <!-- End Top Search -->

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
                <div class="col-md-10 text-truncate" style="padding: 10px; padding-right:20px;color: black; background-color: #d8e3df;">
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
                    <div class="pt-2 row">
                        <div class="col">
                            <div class="bg-info"><center><h4 style="padding-top: 5px;padding-bottom: 5px; color: black;"><b>Advisors</b></h4></center></div>
                            <marquee behavior="scroll">
                                @foreach($adv1 as $ad)
                                <a href="{{URL::to('viewadvisor/'.$ad->id)}}">
                                    <img src="{{URL::to($ad->image)}}" style="height: 256px; width: 256px;">
                                </a>
                                @endforeach
                            </marquee>
                        </div>
                        <div class="col">
                            <div class="bg-success"><center><h4 style="padding-top: 5px; padding-bottom: 5px; color: black;"><b>Committee</b></h4></center></div>
                            <marquee behavior="scroll">
                                @foreach($com1 as $cm)
                                <a href="{{URL::to('viewadvisorcommittee/'.$cm->id)}}">
                                    <img src="{{URL::to($cm->image)}}" style="height: 256px; width: 256px;">
                                </a>
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

    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>House: {{$addresss->house}}<br>Road: {{$addresss->road}}<br>Area: {{$addresss->area}}<br>City: {{$addresss->city}}-{{$addresss->zip}} </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Map</h4>
                            <ul><a href="{{URL::to($maps->map_url)}}"><img src="{{$maps->image}}" style="height: 200px; width: 330px;"></a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Hot Line</h4>
                            {{-- <p>.
                                </p> --}}
                            <li>
                                <p><i class="fas fa-phone-square"></i> Phone: {{($hotlines->t_phone)}}</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i> Phone: {{($hotlines->m_phone)}}</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i> Email: {{($hotlines->email)}}</p>
                            </li>
                            <!-- <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="#">Club Site</a> Design By :
            <a href="https://html.design/">MM It Soft. LTD</a><p style="font-size: 5px;">S.M Shuvo(01762128000)</p></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{asset('frontendhome/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontendhome/js/popper.min.js')}}"></script>
    <script src="{{asset('frontendhome/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('frontendhome/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('frontendhome/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('frontendhome/js/inewsticker.js')}}"></script>
    <script src="{{asset('frontendhome/js/bootsnav.js.')}}"></script>
    <script src="{{asset('frontendhome/js/images-loded.min.js')}}"></script>
    <script src="{{asset('frontendhome/js/isotope.min.js')}}"></script>
    <script src="{{asset('frontendhome/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontendhome/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('frontendhome/js/form-validator.min.js')}}"></script>
    <script src="{{asset('frontendhome/js/contact-form-script.js')}}"></script>
    <script src="{{asset('frontendhome/js/custom.js')}}"></script>
</body>

</html>