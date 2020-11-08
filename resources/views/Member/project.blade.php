@extends("membermainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
        	<div class="form-group">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-3">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-3">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-3">
						{{-- <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
							<a href="{{URL::to('viewproject')}}"><i class="fas fa-search" aria-hidden="true"></i>
							<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search By Club Name" aria-label="Search"></a>
						</form> --}}
					</div>
				</div>
			</div><br>
				@if(Session::has('flash_message_error'))
			<div class="alert alert-sm alert-denger alert-block" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true" >&times;</span></button>
				<strong>{!! session('flash_message_error')!!}</strong>
		    </div>
			@endif
			@if(Session::has('flash_message_success'))
			<div class="alert alert-sm alert-info alert-block" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close" ><span aria-hidden="true" >&times;</span></button>
				<strong>{!! session('flash_message_success')!!}</strong>
			@endif
			</div>
			<br>
			@php $i=0; @endphp
			<center><h2>প্রকল্প সমূহের বিবরণী</h2></center>
            	<br>
                	<table class="table">
					    <thead class="thead-dark">
					      <tr>
					        <th scope="col">ক্রমিক নং</th>
					        <th scope="col">মূল-প্রকল্পের নাম</th>
					        <th scope="col">সহ-প্রকল্পের নাম</th> 
					        <th scope="col">প্রকল্পের খরচ</th>
				        	<th scope="col">নির্বাচন</th>
					      </tr>
					    </thead>
					    @if($value>=1)
					    <tbody>
					    	@foreach($project as $data)
					      <tr>
					        <th scope="row">@php echo $i=$i+1; @endphp</th>
					        <td>{{$data->project_name}}</td>
					        <td>{{$data->subproject_name}}</td>
					        <td>{{$data->min_cost}}</td> 
					        <td>
				        		<a href="{{URL::to('viewproject/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
					    	</td>
					      </tr>
					      @endforeach
					    </tbody>
					    @else
					    <center><h3 style="color:red;">There is no record.....!!!</h3></center>
					    @endif
					</table>
            </div>
       </div>
@endsection