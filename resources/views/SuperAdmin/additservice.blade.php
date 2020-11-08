@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Add IT Service</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('additservices')}}" method="POST">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">IT Service Name</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="itservice" placeholder="Enter IT Service Name">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">Service Cost(Minimum)</label>
		    	<input type="text" class="form-control" id="inputAddress" name="cost" placeholder="Enter Service Cost(Minimum)">
			</div>
		</div>
		<div class="form-group">
		   	<label for="inputAddress">Service Description</label>
				<textarea class="form-control" id="exampleFormControlTextarea4" name="serv_description" rows="3"></textarea>
		</div>
	  <center><button type="submit" class="btn btn-success">Add Now</button></center>
	</form>
	<br><br><br>
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
	@php
		$i=0;
	@endphp
	<center><h4>IT services</h4></center><br><br>
	<table class="table">
		<thead class="thead-dark">
		    <tr>
		      <th scope="col-md-1">S.No.</th>
		      <th scope="col-md-3">Service Name</th>
		      <th scope="col-md-4">Service description</th>
		      <th scope="col-md-2">Cost(Min)</th>
		      <th scope="col-md-2">Option</th>
		    </tr>
		</thead>
		@if($value>=1)
		<tbody>
		@foreach($service as $data)
		    <tr>
		      <th scope="row">@php echo $i=$i+1; @endphp</th>
		      <td>{{($data->itservice)}}</td>
		      <td rows="5">{{($data->serv_description)}}</td>
		      <td>{{($data->cost)}}</td>
		      <td>
		      	<a href="{{URL::to('update_itservice/'.$data->id)}}"><img style="height: 30px; width: 30px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
		      	<a href="{{URL::to('delete_itservice/'.$data->id)}}"><img style="height: 30px; width: 30px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
		      </td>
		    </tr>
		    @endforeach
		    @else
	    <center><h5 style="color:red;">There is no value..........!!!!</h5 style="color:red;"></center>
		</tbody>
		@endif
	</table>
	<br><br><br><br>
</div>
@endsection