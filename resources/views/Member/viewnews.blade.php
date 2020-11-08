@extends("membermainpage")
@section("content")
<div class="container">
	<center>
		<h2 style="color:black;">সংশোধন করুন</h2>
	<br>
	<br>	
		<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="form-control">
						<label>শিরোনাম</label>
			    		<p>{{($news->news)}}</p>
			    	</div>
			    		<br>
					<div class="form-control">
						<label>বিস্তারিত</label>
			    		<p>
			    			{{($news->news)}}
			    		</p>
			    	</div>
			    	<center>
			    		<br>
			    		<br>
			    	<a href="{{URL::to('newss')}}"><button class=" btn btn-success" type="submit">আগের পৃষ্ঠায় ফিরে যান</button></a>
			    	</center>
			    </div>
			</form>
		</div>
	</center>
	<br>
</div>
@endsection