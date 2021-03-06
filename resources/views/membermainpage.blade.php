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
                    <a class="navbar-brand" href="{{URL::to('home_content')}}"><img src="{{URL::to($logos->image)}}" style="height: 60px; width: 65px;" class="logo" alt=""></a>  
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">সম্পর্কে</a>
                            <ul class="dropdown-menu" role="menu">
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
                                            <li><a href="{{URL::to('advisorcommittee')}}">কমিটি</a></li>
                                            <li><a href="{{URL::to('committee')}}">সাব কমিটি</a></li> 
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
            <li class="fa fa-user" style="color: blue;">
                <a href="{{ route('logout') }}"  style="color: blue;"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{-- {{ __('Logout') }} --}}
                                    লগ আউট
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf                                
                </form>
            </li>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <!-- Start Top Search -->
    <!-- End Top Search -->

    <!-- Start Slider -->
    <!-- End Slider -->

    <!-- Start Categories  -->
   <section class="main-content">


    @yield('content')
    

    </section>
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