@extends("adminmainpage")
@section("content")
<div class="container">
	<center><h2>সভাপতির বাণী</h2></center>
            <br><hr>
	<form action="{{URL::to('add_chaipersontalk')}}" method="POST"  enctype="multipart/form-data">
		@csrf
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সভাপতির ছবি </label>
		    	<input type="file" class="form-control" id="inputAddress" name="image" placeholder="সভাপতির ছবি " required="">
			</div>
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সভাপতির নাম</label>
		    	<input type="text" class="form-control" id="inputAddress" name="c_name" placeholder="সভাপতির নাম" required="">
			</div> 
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সভাপতির ঠিকানা</label>
		    	<input type="text" class="form-control" id="inputAddress" name="c_address" placeholder="সভাপতির ঠিকানা" required="">
			</div> 
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সভাপতির মোবাইল</label>
		    	<input type="text" class="form-control" id="inputAddress" name="c_mobile" placeholder="সভাপতির মোবাইল" required="">
			</div> 
	    	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	    		<label for="inputEmail4">সভাপতির বাণী</label>
		    	<textarea class="form-control" id="exampleFormControlTextarea4" raws="8" style="height: 200px;" name="c_talk" placeholder="সভাপতির বাণী" required=""></textarea>
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
	<center><h2>সভাপতির বাণী</h2></center>
    <br>
    <table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col-lg-1 col-md-1 col-sm-1">ক্রমিক নং</th>
				<th scope="col-lg-2 col-md-2 col-sm-2">সভাপতির নাম</th>
				<th scope="col-lg-2 col-md-2 col-sm-2">সভাপতির ঠিকানা</th>
				<th scope="col-lg-2 col-md-2 col-sm-2">সভাপতির মোবাইল</th>
				<th scope="col-lg-4 col-md-4 col-sm-4">সভাপতির বাণী</th>
				<th scope="col-lg-1 col-md-1 col-sm-1">নির্বাচন</th>
			</tr>
		</thead>
		@if($value>=1)
		<tbody>
			@foreach($speeches as $data)
			<tr>
				<th scope="row">@php echo $i=$i+1; @endphp</th>
				<td>{{($data->c_name)}}</td>
				<td>{{($data->c_address)}}</td>
				<td>{{($data->c_mobile)}}</td>
				<td>{{($data->c_talk)}}</td> 
				<td>
					<a href="{{URL::to('viewchairpersontalks/'.$data->id)}}"><img style="height: 35px; width: 35px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
					{{-- <a href=""><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/edit.PNG')}}"></a> --}}
					<a href="{{URL::to('deletechairpersontalks/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
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