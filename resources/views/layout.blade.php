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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
                
                <!-- /.navbar-collapse -->
                <!-- End Atribute Navigation -->
            </div>
            <a class="nav-link" href="{{(URL::to('application'))}}"><button class="btn btn-light"><b>আবেদন</b></button></a>
            <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-light"><b class="fa fa-user">লগ ইন</b></button></a>
        </nav>
        <!-- End Navigation -->
    </header>
   <section class="main-content">


    @yield('content')
    

	</section>

    
    <footer>
    </footer>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="#">Club Site</a> Design By :
            <a href="https://html.design/">MM It Soft. LTD</a><p style="font-size: 5px;">S.M Shuvo(01762128000)</p></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <script src="{{asset('public/frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('public/frontend/js/inewsticker.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootsnav.js')}}"></script>
    <script src="{{asset('public/frontend/js/images-loded.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/isotope.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/contact-form-script.js')}}"></script>
    <script src="{{asset('public/frontend/js/custom.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery-ui.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
</body>

</html>