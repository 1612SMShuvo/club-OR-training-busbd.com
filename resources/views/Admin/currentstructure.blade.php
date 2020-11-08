@extends("adminmainpage")
@section("content")
<div class="container">
	<div class="form-group">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-3">
				{{-- <a href="{{URL::to('addcurrentstructure')}}"><button type="button" class="btn btn-info">নতুন সংযোজন করুন</button></a> --}}
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3">
				{{-- <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2">
					<i class="fas fa-search" aria-hidden="true"></i>
					<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search By Club Name" aria-label="Search">
				</form> --}}
			</div>	
		</div>
	</div>

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
			</div><br>
	            	<br>
	            <div class="col-md-12 col-sm-12 col-lg-12">
	               @php $i=0; @endphp
				<center><h2>চলমান প্রকল্প সমূহের বিবরণী</h2>
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
					    	@foreach($info as $data)
					      <tr>
					        <th scope="row">@php echo $i=$i+1; @endphp</th>
					        <td>{{$data->project_name}}</td>
					        <td>{{$data->subproject_name}}</td>
					        <td>{{$data->min_cost}}</td> 
					        <td>
						        	<a href="{{URL::to('updatecurrentstructure/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
			        				<a href="{{URL::to('deletecurrentstructure/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
						        </td>
						    </tr>
						    @endforeach
						</tbody>
						@else
						<center><h3 style="color: red;">There is no records......!!!</h3></center>
						@endif
					</table>
					<br><hr>
				</center>
			</div>
		</div>
@endsection

