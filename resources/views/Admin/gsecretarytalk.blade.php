@extends("adminmainpage")
@section("content")
<div class="container">
	<center><h2>সাধারন সম্পাদকের বাণী</h2></center>
    	<form action="{{URL::to('add_gsecretarytalk')}}" method="POST"  enctype="multipart/form-data">
		@csrf
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সাধারন সম্পাদকের ছবি </label>
		    	<input type="file" class="form-control" id="inputAddress" name="image" placeholder="সাধারন সম্পাদকের ছবি " required="">
			</div>
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সাধারন সম্পাদকের নাম</label>
		    	<input type="text" class="form-control" id="inputAddress" name="g_name" placeholder="সাধারন সম্পাদকের নাম" required="">
			</div> 
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সাধারন সম্পাদকের ঠিকানা</label>
		    	<input type="text" class="form-control" id="inputAddress" name="g_address" placeholder="সাধারন সম্পাদকের ঠিকানা" required="">
			</div> 
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সাধারন সম্পাদকের মোবাইল</label>
		    	<input type="text" class="form-control" id="inputAddress" name="g_mobile" placeholder="সাধারন সম্পাদকের মোবাইল" required="">
			</div> 
	    	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	    		<label for="inputEmail4">সাধারন সম্পাদকের বাণী</label>
		    	<textarea class="form-control" id="exampleFormControlTextarea4" raws="8" style="height: 200px;" name="g_talk" placeholder="সাধারন সম্পাদকের বাণী" required=""></textarea>
	    	</div>
	  	<center><button type="submit" class="btn btn-success">সংযুক্ত করুন</button></center>
	</form>
            <br><hr>
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
	<br><hr>
	@php $i=0; @endphp
    <table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col-lg-1 col-md-1 col-sm-1">ক্রমিক নং</th>
				<th scope="col-lg-2 col-md-2 col-sm-2">সাধারন সম্পাদকের নাম</th>
				<th scope="col-lg-2 col-md-2 col-sm-2">সাধারন সম্পাদকের ঠিকানা</th>
				<th scope="col-lg-2 col-md-2 col-sm-2">সাধারন সম্পাদকের মোবাইল</th>
				<th scope="col-lg-4 col-md-4 col-sm-4">সাধারন সম্পাদকের বাণী</th>
				<th scope="col-lg-1 col-md-1 col-sm-1">নির্বাচন</th>
			</tr>
		</thead>
		@if($value>=1)
		<tbody>
			@foreach($speeches as $data)
			<tr>
				<th scope="row">@php echo $i=$i+1; @endphp</th>
				<td>{{($data->g_name)}}</td>
				<td>{{($data->g_address)}}</td>
				<td>{{($data->g_mobile)}}</td>
				<td>{{($data->g_talk)}}</td> 
				<td>
					<a href="{{URL::to('viewgsecretarytalk/'.$data->id)}}"><img style="height: 35px; width: 35px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
					<a href="{{URL::to('deletegsecretarytalk/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
				</td>
			</tr>
			@endforeach
		</tbody>
		@else
		<center><h3 style="color: red;">There Is No Such Value......!!!!</h3></center>
		@endif
	</table>
</div>
<br><br><br>
<hr>
@endsection