@extends("adminmainpage")
@section("content")
<div class="container">
	<center>
		<div class="col-lg-12 col-md-12 col-sm-12">
			<form class="form-group" action="{{URL::to('advisorsearch')}}" method="GET">
				@csrf
				<div class="row">
					<div class="col-md-10">
			    		<input class="form-control" type="text" name="applicant_id" placeholder="সদস্য সংযুক্তির জন্য সদস্যের আইডি দিয়ে খুজুন... " aria-label="Search">
			    	</div>
			    	<div class="col-md-2">
			    		<button class=" btn btn-success" type="submit"><i class="fas fa-search" aria-hidden="true" style="color: black;">সংযুক্তি</i></button>
			    	</div>
			    </div>
			</form>
		</div>
	</center>
	<br>
	<br>	
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
	<hr>
	@php $i=0; @endphp
	<center><h2>উপদেষ্টা মন্ডলী</h2></center>
        <br>
	            	<div class="row col-lg-12 col-md-12">
						<div class="col-lg-4 col-md-4 col-sm-12">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<form class="form-inline form-group" action="{{URL::to('advisorsearchtable')}}" method="GET">
								@csrf
								<i class="fas fa-search" aria-hidden="true" style="color: green;"></i>
			    				<input class="form-control" type="text" name="applicant_id" placeholder="উপদেষ্টা্ সদস্যের আইডি দিয়ে খুজুন... " aria-label="Search">
							</form>
						</div>
					</div>
        	<table class="table">
			    <thead class="thead-dark">
			    	<tr>
				        <th scope="col">ক্রমিক নং</th>
				        <th scope="col">উপদেষ্টার আইডি</th>
				        <th scope="col">উপদেষ্টার নাম</th>
				        <th scope="col">উপদেষ্টা্র ঠিকানা</th>
				        <th scope="col">উপদেষ্টার মোবাইল</th>
				        <th scope="col">ক্লাবের নাম</th>
				        <th scope="col">নির্বাচন</th>
			    	</tr>
				</thead>
				@if($value>=1)
			    <tbody>
			    	@foreach($advisor as $data)
				    <tr>
				        <th scope="row">@php echo $i=$i+1; @endphp</th>
				        <td>{{($data->applicant_id)}}</td>
				        <td>{{($data->a_name)}}</td>
				        <td>{{($data->address)}}</td>
				        <td>{{($data->phone)}}</td>
				        <td>{{($data->club)}}</td> 
				        <td>
					       	<a href="{{URL::to('view_advisor/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
			        		<a href="{{URL::to('delete_advisor/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
				        </td>
				    </tr>
				    @endforeach
				</tbody>
				@else
				<center><h3 style="color:red;">There Is No Such Values.....!!!!</h3></center>
				@endif
			</table>
</div>

	<br>
	<hr>
	<br>
@endsection