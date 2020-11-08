@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Add Menu</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('addmenu')}}" method="POST">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">Menu Name</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="menu_name" placeholder="Enter Menu Name">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">Menu URL</label>
		    	<input type="text" class="form-control" id="inputAddress" name="menu_url" placeholder="Enter Menu URL">
			</div>
		</div>
	  <center><button type="submit" class="btn btn-success">Add Menu</button></center>
	</form>
	<br><br>
	@php $i=0; @endphp
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
			<center><h4>All Menu</h4></center>
			<br><br>
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				    	<th scope="col">S.No.</th>
				    	<th scope="col">Menu Name</th>
				    	<th scope="col">Menu URI</th>
				    	<th scope="col">Option</th>
				    </tr>
				</thead>
				@if($value>=1)
				<tbody>
					@foreach($menu as $data)
					<tr>
					    <th scope="row">@php echo $i=$i+1; @endphp</th>
					    <td>{{($data->menu_name)}}</td>
					    <td>{{($data->menu_url)}}</td>
					    <td>
					      	<a href="{{URL::to('update_menu/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 8px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
					      	<a href="{{URL::to('delete_menu/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-left: 8px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
					    </td>
					</tr>
					@endforeach
				</tbody>
				@else
				<center><h4 style="color: red;">There is no such velue.....!!!!</h4></center>
				@endif
			</table>
		</div>
</div>
@endsection