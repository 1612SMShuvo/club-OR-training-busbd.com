@extends("adminmainpage")
@section("content")
<div class="container">
	<center><h2>সংস্থা সম্পর্কে</h2></center>
	<br>
	<hr>
	<form action="{{URL::to('add_aboutorg')}}" method="POST">
		@csrf
			<div class="form-group col-lg-12 col-md-12 col-sm-12">
		    	<label for="inputAddress">সংস্থার নাম</label>
		    	<input type="text" class="form-control" id="inputAddress" name="name" placeholder="সংস্থার নাম">
			</div> 
	    	<div class="form-group col-lg-12 col-md-12 col-sm-12">
	    		<label for="inputEmail4">সংস্থা সম্পর্কে</label>
		    	<textarea class="form-control" id="exampleFormControlTextarea4" raws="8" name="about" placeholder="সংস্থা সম্পর্কে"></textarea>
	    	</div>
	  	<center><button type="submit" class="btn btn-success">সংযুক্ত করুন</button></center>
	</form>
	<hr>
	<br>
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
	@php $i=0; @endphp
	<hr>
	<div style="padding: 50px;" class="col-lg-12 col-md-10 col-sm-4"> 
		<center><h2>সংস্থা  সম্পর্কে</h2></center>
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ক্রমিক নং</th>
					<th scope="col">সংস্থার নাম</th>
					<th scope="col">সংস্থার সম্পর্কে </th>
					<th scope="col">সংযুক্তির তারিখ</th>
					<th scope="col">নির্বাচন</th>
				</tr>
			</thead>
			@if($value>=1)
			<tbody> 
				@foreach($about as $data)
				<tr>
					<th scope="row">@php echo $i=$i+1; @endphp</th>
					<td>{{($data->name)}}</td>
					<td>{{($data->about)}}</td>
				    <td>{{($data->created_at)}}</td>
				    <td>
			        	<a href="{{URL::to('details_aboutorg/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
			        	<a href="{{URL::to('update_aboutorg/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
			        	<a href="{{URL::to('delete_aboutorg/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
				    </td>
				</tr>
				@endforeach
			</tbody>
			@else
			<center><h4 style="color: red;">এখানে কোন সংস্থা সম্পর্কে কোন তথ্য নেই......!!!</h4></center>
			@endif
		</table>
	</div>
</div>
<br><br><br>
<hr>
@endsection