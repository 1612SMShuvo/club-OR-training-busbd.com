@extends("superadminmainpage")

@section("content")
        <div id="welcome">
            <h1>Welcome </h1>	
        </div>
        
        <div id="mini_nav">
            <div id="mini_board">
                <div class = "mini_font"><a href="{{URL::to('footer')}}">Footer</a></div>
                <img style="padding: 2px;" src="{{asset('adminCss/img/sales.png')}}"/>
            </div>
            
            <div id="mini_board">
                <div class = "mini_font"><a href="{{URL::to('menu')}}">Menu</a></div>
                <img style="padding: 2px;" src="{{asset('adminCss/img/menu.png')}}"/>
            </div>
            
            <div id="mini_board">
                <div class = "mini_font"><a href="{{URL::to('photo')}}">Photos</a></div>
                <img  style="padding: 2px;" src="{{asset('adminCss/img/photos.png')}}" />
            </div>
            
            <div id="mini_board">
                <div class = "mini_font"><a href="{{URL::to('logo')}}">Logos</a></div>
                <img style="padding: 2px;" src="{{asset('adminCss/img/logo.png')}}" />
            </div>
        </div>
        
        
        <div id="second_row">
            <div id="Tasks_Panel">
                <h4>Tasks Panel</h4>
                <h4>     </h4>
                <div id="message"> </div>
            </div>
        </div>
        
    

@endsection 