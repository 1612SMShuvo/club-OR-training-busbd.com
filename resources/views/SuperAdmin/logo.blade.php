@extends("superadminmainpage")
@section("content")
<div class="container col-md-12 col-lg-12">
			<br><br>
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
			<div class="row">
				<div class="col-md-6">
					<center><div class="text"><h4>Add Logo</h4></div></center>
					<br><br>	
					<form action="{{URL::to('addlogo')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-12">
						    	<label for="inputAddress">Logo Photo</label>
						    	<input type="file" class="form-control" id="inputAddress" name="image" placeholder="Enter Logo Image Here">
							</div>
						</div>
					  <center><button type="submit" class="btn btn-success">Add Now</button></center>
					</form>
				</div>
				<div class="col-md-6">	
					<center><div class="text"><h4>Add Icon</h4></div></center>
					<br><br>
					<form  action="{{URL::to('addicon')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-row">
							<div class="form-group col-md-12">
						    	<label for="inputAddress">Icon Photo</label>
						    	<input type="file" class="form-control" id="inputAddress" name="image" placeholder="Enter Icon Image Here">
							</div>
						</div>
					  <center><button type="submit" class="btn btn-success">Add Now</button></center>
					</form>
				</div>
			</div>
			<br><br><br><br>
			<div class="row">
				<div class="col-md-6">
					<center><h4>All Home Logo Photos</h4></center>
					<br><br>
					@php $i=0; $j=0; @endphp
					<table class="table">
						<thead class="thead-dark">
						    <tr>
						    	<th scope="col">S.No.</th>
						    	<th scope="col">Logo</th>
						    	<th scope="col">Option</th>
						    </tr>
						</thead>
						@if($value1>=1)
						<tbody>
							@foreach($logos as $data)
							<tr>
							    <th scope="row">@php echo $i=$i+1; @endphp</th>
							    <td><img style="height: 40px; width: 35px;" src="{{URL::to($data->image)}}"> </td>
							    <td>
									<a href="{{URL::to('delete_logo/'.$data->id)}}">
										<button class="btn btn-light">
											<img style="height: 45px; width: 45px; padding-left: 8px;" src="{{asset('adminCss/img/delete.PNG')}}">&nbsp;&nbsp;Delete
										</button>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
						@else
						<center><h4 style="color: red;">There is no Logos.......!!!!</h4></center>
						@endif
					</table><br>
				</div>
				<div class="col-md-6">
					<center><h4>All Icon Photos</h4></center>
					<br><br>
					<table class="table">
						<thead class="thead-dark">
						    <tr>
						    	<th scope="col">S.No.</th>
						    	<th scope="col">Icon</th>
						    	<th scope="col">Option</th>
						    </tr>
						</thead>
						@if($value2>=1)
						<tbody>
							@foreach($icons as $aa)
							<tr>
							    <th scope="row">@php echo $j=$j+1; @endphp</th>
							    <td><img style="height: 40px; width: 40px;" src="{{URL::to($aa->image)}}"></td>
							    <td>
									<a href="{{URL::to('delete_icon/'.$aa->id)}}">
										<button class="btn btn-light">
											<img style="height: 45px; width: 45px; padding-left: 8px;" src="{{asset('adminCss/img/delete.PNG')}}">&nbsp;&nbsp;Delete
										</button>
									</a>
							    </td>
							</tr>
							@endforeach
						</tbody>
						@else
						<center><h4 style="color: red;">There is no Icons.......!!!!</h4></center>
						@endif
					</table><br>
				</div>
			</div>
</div>
@endsection