@extends("superadminmainpage")
@section("content")
<div class="container col-md-10 col-lg-10 col-sm-12">
			<br><br><br><br>
			<center><div class="text"><h4>Add Home Slide Photos</h4></div></center>
			<br><br><br><br>
			<form action="{{URL::to('addphoto')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-12">
				    	<label for="inputAddress">Slide Image</label>
				    	<input type="file" class="form-control" id="inputAddress" name="image" placeholder="Enter Slide Image Here">
					</div>
				</div>
			  <center><button type="submit" class="btn btn-success">Add Now</button></center>
			</form>
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
	<br><br>
	@php $i=0; @endphp
			<center><h4>All Home Slide Photos</h4></center>
			<br><br>
			<table class="table" style="padding: 20px;">
				<thead class="thead-dark">
				    <tr>
				    	<th scope="col">S.No.</th>
				    	<th scope="col">Map Image</th>
				    	<th scope="col">Option</th>
				    </tr>
				</thead>
				@if($value>=1)
				<tbody>
					@foreach($slide as $data)
					<tr>
					    <th scope="row">@php echo $i=$i+1; @endphp</th>
					    <td><img style="height: 70px; width: 65px;" src={{URL::to($data->image)}}></td>
					    <td>
					      	<a href="{{URL::to('delete_photo/'.$data->id)}}"><img style="height: 60px; width: 57px; padding-left: 8px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
					      	<a href="{{URL::to('update_photo/'.$data->id)}}"><img style="height: 60px; width: 57px; padding-left: 8px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
					    </td>
					</tr>
					@endforeach
				</tbody>
				@else
				<center><h4 style="color: red;">There is no Such values.....!!!!</h4></center>
				@endif
			</table>
</div>
@endsection