@extends("membermainpage")
@section("content")
<div class="container">
	<center><h2>সংস্থা সম্পর্কে</h2></center>
	<br>
	<hr>
	@foreach($about as $data)
			<div class="form-group">
		    	<h3 style="color: blue;">সংস্থার নাম</h3>
		    	<p>{{($data->name)}}</p>
			</div>
			<hr>
	    	<div class="form-group">
	    		<h3 style="color:blue;">সংস্থা সম্পর্কে</h3>
	    		<p>{{($data->about)}}</p>
	    	</div> 
	    	@endforeach
	<br><br>
	<hr>
</div>
@endsection