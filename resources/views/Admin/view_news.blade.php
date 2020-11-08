@extends("adminmainpage")
@section("content")
<div class="container">
	<center>
		<h2 style="color:black;">সংশোধন করুন</h2>
	<br>
	<br>	
		<div class="col-lg-12 col-md-12 col-sm-12">
			<form class="form-group" action="{{URL::to('news_update/'.$news->id)}}" method="POST">
				@csrf
					<div class="form-control">
			    		<input class="form-control" type="text" name="title" value="{{($news->title)}}" placeholder="সংবাদের শিরোনাম">
			    	</div>
			    		<br>
					<div class="form-control">
			    		<textarea class="form-control" type="text" name="news" rows=4 placeholder="সংক্ষিপ্ত সংবাদ">
			    			{{($news->news)}}
			    		</textarea> 
			    	</div>
			    	<center>
			    		<br>
			    		<br>
			    		<button class=" btn btn-success" type="submit"><i class="fas fa-search" aria-hidden="true" style="color: black;">সংশোধন</i></button>
			    	</center>
			    </div>
			</form>
		</div>
	</center>
	<br>
</div>
@endsection