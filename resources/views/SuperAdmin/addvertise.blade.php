@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Add Addvertisement</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('addaddvertise')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-4">
	    		<label for="inputEmail4">Addvertise-1</label>
	    		<input type="file" class="form-control" id="inputEmail4" name="image1" placeholder="Enter Addvertise-1 Please">
	    	</div>
			<div class="form-group col-md-4">
		    	<label for="inputAddress">Addvertise-2</label>
		    	<input type="file" class="form-control" id="inputAddress" name="image2" placeholder="Enter Addvertise-2 Please">
			</div>
			<div class="form-group col-md-4">
	    	<label for="inputAddress">Addvertise-3</label>
	    	<input type="file" class="form-control" id="inputAddress" name="image3" placeholder="Enter Addvertise-3 Please">
			</div>
		</div>
	  <center><button type="submit" class="btn btn-success">Add Now</button></center>
	</form>
	<br><br><br><br>	
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
	@php
		$i=0;
	@endphp
	<br>
	<center><h4>Addvertisements</h4></center><br><br>
	<table class="table">
		<thead class="thead-dark">
		    <tr>
		      <th scope="col">S.No.</th>
		      <th scope="col">Addvertisement-1</th>
		      <th scope="col">Addvertisement-2</th>
		      <th scope="col">Addvertisement-3</th>
		      <th scope="col">Option</th>
		    </tr>
		</thead>
		@if($value>=1)
		<tbody>
		@foreach($addvertise as $add)
		    <tr>
		      <th scope="row">@php echo $i=1+$i; @endphp</th>
		      <td><img style="height: 40px; width: 40px;" src="{{URL::to($add->image1)}}"></td>
		      <td><img style="height: 40px; width: 40px;" src="{{URL::to($add->image2)}}"></td>
		      <td><img style="height: 40px; width: 40px;" src="{{URL::to($add->image3)}}"></td>
		      <td>
		      	<a href="{{URL::to('/update_addvertise/'.$add->id)}}"><img style="height: 30px; width: 30px; padding-right: 8px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
		      	<a href="{{URL::to('/delete_addvertise/'.$add->id)}}"><img style="height: 30px; width: 30px; padding-left: 8px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
		      </td>
		    </tr>
		@endforeach
		</tbody>
		@else
	    <center><h5 style="color:red;">There is no value..........!!!!</h5 style="color:red;"></center>
		@endif
	</table>
	<br><br><br><br>
</div>
@endsection