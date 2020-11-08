@extends("adminmainpage")
@section("content")
<div class="container">
	<div class="form-group">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-3">
						<a href="{{URL::to('addschedule')}}"><button type="button" class="btn btn-info">নতুন সংযোজন করুন</button></a>
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
	<center><h4>পঞ্জিকা অনুযায়ী কার্যক্রম</h4></center>
	<br><br> 
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">ক্রমিক নং</th>
	      <th scope="col">তারিখ</th> 
	      <th scope="col">কার্যক্রমের নাম</th>
	      <th scope="col">কার্যক্রমের সময়কাল</th>
	      <th scope="col">কার্যক্রমের ঠিকানা</th>
	      <th scope="col">নির্বাচন করুন</th> 
	    </tr>
	  </thead>
	  @php $i=0; @endphp
	  @if($value>=1)
	  <tbody>
	  	@foreach($info as $data)
	    <tr>
	      <th scope="row">@php echo $i=$i+1; @endphp</th>
	      <td>{{($data->date)}}</td>
	      <td>{{($data->event)}}</td>
	      <td>{{($data->days)}}</td>
	      <td>{{($data->place)}}</td>
	      <td>
	      	<a href="{{URL::to('updateschedule/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 8px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
			<a href="{{URL::to('deleteschedule/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	  @else
	  <center><h3 style="color: red;">There is no record...........!!!</h3></center>
	  @endif
	</table>
	<br><br><br><br>
</div>
@endsection