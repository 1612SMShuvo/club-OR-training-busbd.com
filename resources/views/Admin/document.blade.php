@extends("adminmainpage")
@section("content")
<div class="container">
	<div class="form-group">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-3">
						<a href="{{URL::to('adddocument')}}"><button type="button" class="btn btn-info">নতুন সংযোজন করুন</button></a>
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
	<center>
	            		<h2>ডকুমেন্ট সমূহ </h2>
	            	</center>
	            	<br>
	                <table class="table">
					    <thead class="thead-dark">
					    	<tr>
						        <th scope="col">ক্রমিক নং</th>
						        <th scope="col">ডকুমেন্টের নাম</th>
						        <th scope="col">প্রকাশ কাল</th> 
						        <th scope="col">নির্বাচন</th>
					    	</tr>
					    </thead>
					    @php $i=0; @endphp
					    @if($value>=1)
					    <tbody>
					    	@foreach($files as $data)
					      	<tr>
						        <th scope="row">@php echo $i=$i+1; @endphp</th>
						        <td>{{($data->title)}}</td>
						        <td>{{($data->created_at)}}</td>
						        <td>
						        	<a href="{{URL::to('show/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
						        	<a href="{{URL::to('deletedocument/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
						        </td>
						    </tr>
						    @endforeach
						</tbody>
						@else
						<center><h3 style="color: red;">There is no such value.....!!!</h3></center>
						@endif
					</table><br><br><hr>
				</div>
            </div>
@endsection