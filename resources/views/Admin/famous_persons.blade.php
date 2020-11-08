@extends("adminmainpage")
@section("content")
<div class="container">
			<div class="form-group">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-3">
						<a href="{{URL::to('addfamousperson')}}"><button type="button" class="btn btn-info">নতুন সংযোজন করুন</button></a>
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
			<center>
	            <h2>প্রখ্যাত ব্যাক্তিবর্গ তালিকা</h2>
	        </center>
	        @php $i=0; @endphp
	        <table class="table">
			    <thead class="thead-dark">
			    	<tr>
				        <th scope="col">ক্রমিক নং</th>
				        <th scope="col">ব্যাক্তির নাম</th>
				        <th scope="col">ব্যাক্তির মা</th>
				        <th scope="col">ব্যাক্তির বাবা</th> 
				        <th scope="col">ব্যাক্তির ঠিকানা</th>
				        <th scope="col">ব্যাক্তির কর্মস্থল </th>
				        <th scope="col">ব্যাক্তির মোবাইল</th> 
				        <th scope="col">পদবী</th>
				        <th scope="col">নির্বাচন</th>
			    	</tr>
			    </thead>
			    <tbody>
			    @if($value>=1)
			    <tbody>
			    	@foreach($persons as $data)
			      	<tr>
				        <th scope="row">@php echo $i=$i+1; @endphp</th>
				        <td>{{($data->name)}}</td>
				        <td>{{($data->mother_name)}}</td>
				        <td>{{($data->father_name)}}</td>
				        <td>{{($data->address)}}</td>
				        <td>{{($data->work_place)}}</td>
				        <td>{{($data->phone)}}</td>
				        <td>{{($data->rank)}}</td>
				        <td>
				        	<a href="{{URL::to('updatefamouspersons/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
							<a href="{{URL::to('deletefamouspersons/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
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