@extends("adminmainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
        	<div class="form-group">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-3">
						<a href="{{URL::to('addservicelist')}}"><button type="button" class="btn btn-info">নতুন সংযোজন করুন</button></a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-3">
					</div>
					<div class="col-lg-4 col-md-4 col-sm-3">
					</div>
						</form>
					</div>
				</div>
			</div><br><br>
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
	        @php $i=0; @endphp
        	<center><h2>সেবা সমূহ</h2></center>
            	<br>
                	<table class="table">
					    <thead class="thead-dark">
					      <tr>
					        <th scope="col">ক্রমিক নং</th>
					        <th scope="col">সেবার নাম</th> 
					        <th scope="col">খরচ(সর্বনিম্ন)</th>
					        <th scope="col">নির্বাচন</th>
					      </tr>
					    </thead>
					    @if($value>=1)
					    <tbody>
					    	@foreach($service as $data)
					      	<tr>
						        <th scope="row">@php echo $i=$i+1; @endphp</th>
						        <td>{{($data->service_name)}}</td>
						        <td>{{($data->min_cost)}}</td>
						        <td>
						        	<a href="{{URL::to('updateservicelist/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
									<a href="{{URL::to('deleteservicelist/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
							    </td>
						    </tr>
						    @endforeach
						</tbody>
						@else
						<center><h4 style="color:red;">There is No Record Here.....!!!!</h4></center>
						@endif>
					</table>
			<br><hr>
		</div>

@endsection