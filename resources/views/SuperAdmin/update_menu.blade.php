@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br><br><br>
	<center><div class="text"><h4>Update Menu</h4></div></center>
	<br><br><br><br>
	<form action="{{URL::to('updatemenu/'.$menu->id)}}" method="POST">
		@csrf
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<label for="inputEmail4">Menu Name</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="menu_name" value="{{($menu->menu_name)}}" placeholder="Enter Menu Name">
	    	</div>
			<div class="form-group col-md-6">
		    	<label for="inputAddress">Menu URL</label>
		    	<input type="text" class="form-control" id="inputAddress" name="menu_url" value="{{$menu->menu_url}}" placeholder="Enter Menu URL">
			</div>
		</div>
	  <center><button type="submit" class="btn btn-success">Update Menu</button></center>
	</form>
</div>
@endsection