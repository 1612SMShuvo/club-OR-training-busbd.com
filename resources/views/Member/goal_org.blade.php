@extends("membermainpage")
@section("content")
<div class="container col-md-12">
	<center><h2>আমাদের সংস্থা </h2></center>
	<br>
	<hr>
	@if($value>=1)
	@foreach($about as $data)
	<center><h3 style="color: blue;">সংস্থার নাম</h3><br>
		<p>{{($data->name)}}</p>
	</center>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-4" style="padding: 50px;"> 
			<center><h3 style="color: blue;">আমাদের সংস্থার লক্ষ্য</h3></center>
			<br>
			<hr>
			<p>{{($data->goal1)}}</p>
			<p>{{($data->goal2)}}</p>
			<p>{{($data->goal3)}}</p>
			<p>{{($data->goal4)}}</p>
			<p>{{($data->goal5)}}</p>
			<p>{{($data->goal6)}}</p>
			<p>{{($data->goal7)}}</p>
			<p>{{($data->goal8)}}</p>
			<p>{{($data->goal9)}}</p>
			<p>{{($data->goal10)}}</p>
			<br>
			<hr>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-4" style="padding: 50px;">
			<center><h3 style="color: blue;">আমাদের সংস্থার উদ্দেশ্য</h3></center>
			<br>
			<hr>
			<p>{{($data->intention1)}}</p>
			<p>{{($data->intention2)}}</p>
			<p>{{($data->intention3)}}</p>
			<p>{{($data->intention4)}}</p>
			<p>{{($data->intention5)}}</p>
			<p>{{($data->intention6)}}</p>
			<p>{{($data->intention7)}}</p>
			<p>{{($data->intention8)}}</p>
			<p>{{($data->intention9)}}</p>
			<p>{{($data->intention10)}}</p>
			<br>
			<hr>
		</div>
	</div>
	@endforeach
	@else
	<center><h3 style="color: blue;">সংস্থার নাম</h3><br>
		<p></p>
	</center>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-4" style="padding: 50px;"> 
			<center><h3 style="color: blue;">আমাদের সংস্থার লক্ষ্য</h3></center>
			<br>
			<hr>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-4" style="padding: 50px;">
			<center><h3 style="color: blue;">আমাদের সংস্থার উদ্দেশ্য</h3></center>
			<br>
			<hr>
		</div>
	</div>
	<center><h3 style="color:red;">There is no record.....!!!</h3></center>
	@endif
</div>
<br><br><br>
<hr>
@endsection