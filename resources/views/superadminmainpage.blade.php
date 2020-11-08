<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="{{asset('adminCss/css/dashboard.css')}}">
		<script src="{{asset('adminCss/js/dashboard.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
        <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('adminCss/Style.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
		<script>
			var comments = ;
			var products = ;
			var sales = ;
		</script>

	</head>
	<body>

		<div id="top-bar" class="bg bg-info">
			<nav class="">
				<ul>
					<li>
						<a href="{{URL::to('/superadmin_dashboard')}}"><img style="height: 40px; height: 35px;" src="{{asset('adminCss/img/adminhome.PNG')}}">Home</a>
					</li>
					<li style="color: black;">
						<img style="height: 40px; height: 35px;" src="{{asset('adminCss/img/admin.PNG')}}">
		                <a href="{{ route('logout') }}"  style="color: black;"
		                                   onclick="event.preventDefault();
		                                                 document.getElementById('logout-form').submit();">
		                                    {{-- {{ __('Logout') }} --}}
		                                    <b>Log Out</b>
		                </a>

		                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                    @csrf                                
		                </form>
		            </li>
				</ul>
            </nav>
        </div>	
			
	
		<div id = "side-navagate-bar" class="bg bg-info">
			<div class = "toggle-btn" onclick="toggleSideBar()">
				<span></span>
				<span></span>
				<span></span>
			</div>
            <ul class="list-unstyled components">
				<li><center><h4 id="logo" style="color: black;">Super Admin Pannel</h4></center></li>
                <li><a href=""></a></li>
                <li><a href="{{URL::to('addvertise')}}">Change Addvertisements</a></li>
                <li><a href="{{URL::to('additservice')}}">IT Services</a></li>
				<li><a href="{{URL::to('hotline')}}">Hot Line</a></li>
				{{-- <li><a href="{{URL::to('hotline')}}" target="_blank">Hot Line</a></li> --}}
                <li><a href="{{URL::to('address')}}">Add Address</a></li>
                <li><a href="{{URL::to('viewaddress')}}">View Address</a></li>
			</ul>
        </div>
        <div id="block">
	
            <div id="main-area" class="pl-3">
                <section class="main-content">


                    @yield('content')
         
        
                </section> 
            </div>
        </div>
	
	    

			
        <footer style="background-color: #cfd1d0;">
	        <div class="footer-main">
	            <div class="container">
		        	<div style="font-color: black;"><p style="font-size: 12px;">All Rights Reserved. &copy; 2020 ||Club Site||Design By :<a href="https://html.design/">MM It Soft. LTD</a></p><p style="font-size: 10px; font-style: italic;"><p style="font-size: 5px;">S.M Shuvo(01762128000)</p></p>
		        	</div>
	        	</div>
	    	</div>
        </footer>
	</body>
</html>
