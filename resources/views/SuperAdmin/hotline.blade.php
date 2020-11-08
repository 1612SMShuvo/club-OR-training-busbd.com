@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<div class="text"><h4>Add Hot Line Number</h4></div>
	<br><br><br><br>
	<form action="{{URL::to('addhotline')}}" method="POST">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">Designation</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="designation" placeholder="Enter Designation Please">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">Telephone Number</label>
		    	<input type="text" class="form-control" id="inputAddress" name="t_phone" placeholder="Enter Telephone Number">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
	    		<label for="inputAddress">Mobile Number</label>
	    		<input type="text" class="form-control" id="inputAddress" name="m_phone" placeholder="Enter Mobile Number">
			</div>
			<div class="form-group col-md-6">
	    		<label for="inputAddress">Email</label>
	    		<input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter Email Address">
			</div>
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
	</div><br><br>
	<center><h4>Hotline Numbers</h4></center>
	@php
		$i=0;
	@endphp
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">S.No.</th>
	      <th scope="col">Designation</th>
	      <th scope="col">Telephone Number</th>
	      <th scope="col">Mobile Number</th>
	      <th scope="col">Email Address</th>
	      <th scope="col">Option</th>
	    </tr>
	  </thead>
	  @if($value>=1)
	  <tbody>
	  	@foreach($hotline as $data)
	    <tr>
	      <th scope="row">@php echo $i=$i+1; @endphp</th>
	      <td>{{($data->designation)}}</td>
	      <td>{{($data->t_phone)}}</td>
	      <td>{{($data->m_phone)}}</td>
	      <td>{{($data->email)}}</td>
	      <td>
	      	<a href="{{URL::to('update_hotline/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 8px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
	      	<a href="{{URL::to('delete_hotline/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-left: 8px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
	      </td>
	    </tr>
	    @endforeach
	    @else
	    <center><h5 style="color:red;">There is no value..........!!!!</h5 style="color:red;"></center>
	    @endif
	  </tbody>
	</table>
		<br><br><br><br>
</div>
@endsection