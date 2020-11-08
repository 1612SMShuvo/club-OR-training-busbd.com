@extends("superadminmainpage")
@section("content")
<div class="container col-lg-12 col-md-12 col-sm-12">
	<div class="row">
		<div class="col-md-6">
			<br><br><br><br>
			<center><div class="text"><h4>Add Map Here</h4></div></center>
			<br><br><br><br>
			<form action="{{URL::to('addmap')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-row">
			    	<div class="form-group col">
			    		<label for="inputEmail4">Company Name</label>
			    		<input type="text" class="form-control" id="inputEmail4" name="company" placeholder="Enter Company Name Here">
			    	</div>
					<div class="form-group col">
			    		<label for="inputAddress">Share Map Link</label>
			    		<input type="link" class="form-control" id="inputAddress" name="map_url" placeholder="Share Map Link">
					</div>
				</div>
				<div class="form-group">
				    <label for="inputAddress">Map Image</label>
				    <input type="file" class="form-control" id="inputAddress" name="image" placeholder="Enter Map Image Here">
				</div><br>
			  <center><button type="submit" class="btn btn-success">Add Now</button></center>
			</form>
		</div>
		<div class="col-md-6">
			<br><br><br><br>
			<center><div class="text"><h4>Add Emergecy No. Here</h4></div></center>
			<br><br><br><br>
			<form action="{{URL::to('add_emr_num')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-row">
			    	<div class="form-group col">
			    		<label for="inputEmail4"> Name</label>
			    		<input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Enter Company Name Here">
			    	</div>
					<div class="form-group col">
			    		<label for="inputAddress">Number</label>
			    		<input type="text" class="form-control" id="inputAddress" name="number" placeholder="Share Map Link">
					</div>
				</div><br>
			  <center><button type="submit" class="btn btn-success">Add Now</button></center>
			</form>
		</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col">
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
		</div>
		<div class="col">
		</div>
	</div>
<br><br>
@php $i=0; @endphp
	<div class="row">
		<div class="col">
			<br><br>
			<center><h4>All Maps</h4></center>
			<br><br>
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				    	<th scope="col">S.No.</th>
				    	<th scope="col">Company Name</th>
				    	<th scope="col">Map Image</th>
				    	<th scope="col">Option</th>
				    </tr>
				</thead>
				@if($value>=1)
				<tbody>
					@foreach($mapadd as $data)
					<tr>
					    <th scope="row">@php echo $i=$i+1; @endphp</th>
					    <td>{{($data->company)}}</td>
					    <td><img style="height: 70px; width: 65px;" src={{URL::to($data->image)}}></td>
					    <td>
					      	<a href="{{URL::to('update_map/'.$data->id)}}"><img style="height: 30px; width: 30px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
					      	<a href="{{URL::to('delete_map/'.$data->id)}}"><img style="height: 30px; width: 30px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
					    </td>
					</tr>
					@endforeach
				</tbody>
				@else
				<center><h4 style="color: red;">There is no such values.....!!!</h4></center>
				@endif
			</table>
		</div>
		<div class="col-md-6">
			<br><br>
			<center><h4>Emergency Numbers</h4></center>
			<br><br>
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				    	<th scope="col">S.No.</th>
				    	<th scope="col">Name</th>
				    	<th scope="col">Number</th>
				    	<th scope="col">Option</th>
				    </tr>
				</thead>
				@if($val>=1)
				<tbody>
					@foreach($kk as $dat)
					<tr>
					    <th scope="row">@php echo $i=$i+1; @endphp</th>
					    <td>{{($dat->name)}}</td>
					    <td>{{($dat->number)}}></td>
					    <td>
					      	<a href="{{URL::to('delete_map/'.$dat->id)}}"><img style="height: 30px; width: 30px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
					    </td>
					</tr>
					@endforeach
				</tbody>
				@else
				<center><h4 style="color: red;">There is no such values.....!!!</h4></center>
				@endif
			</table>
		</div>
	</div>

</div>
@endsection