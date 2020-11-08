@extends("membermainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>চলমান কাঠামো</h2></div></center>
	<br><br>
	<form>
		@csrf
			<div class="form-group col-lg-12 col-sm-12 col-md-12">
		    	<label for="inputAddress">চলমান কাঠামোর নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="structure_name" value="{{($info->structure_name)}}" placeholder="চলমান কাঠামোর নাম" style="color: black;" readonly="">
			</div>
	    	<div class="form-group col-lg-12 col-sm-12 col-md-12">
	    		<label for="inputEmail4">চলমান কাঠামোর ঠিকানা</label>
	    		<input type="text" class="form-control" id="inputEmail4" name="address" value="{{($info->address)}}" placeholder="চলমান কাঠামোর ঠিকানা" style="color: black;" readonly="">
	    	</div>
	    	<div class="form-group col-lg-12 col-sm-12 col-md-12">
	    		<label for="inputEmail4">চলমান কাঠামোর বিবরনী</label>
	    		<textarea class="form-control" id="exampleFormControlTextarea4" raws="3" name="description" placeholder="সংস্থার চলমান কাঠামোর বিবরনী"  style="color: black;" readonly="">{{($info->description)}}</textarea>
	    	</div>
	  	<br><br>
	</form>
	<br><br>
	<hr>
</div>
@endsection