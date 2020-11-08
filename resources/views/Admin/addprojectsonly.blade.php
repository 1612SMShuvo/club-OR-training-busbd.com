@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>নতুন সংযোজন</h2></div></center>
	<br><br>
	<form action="{{URL::to('add_projectsonly')}}" method="POST">
		@csrf
			<div class="form-group col-lg-12 col-sm-12 col-md-12">
		    	<label for="inputAddress">কাঠামোর নাম </label>
		    	<input type="text" class="form-control" id="inputAddress" name="project_name" placeholder="চলমান কাঠামোর নাম">
			</div>
			<div class="form-group col-lg-12 col-sm-12 col-md-12">
		    	<label for="inputAddress">কাঠামোর স্বকীয়তা </label>
	    		<select id="inputState" class="form-control" name="status">
	        		<option selected>বেছে নিন...... </option>
	        		<option value="চলমান">চলমান</option>
	        		<option value="পরিকল্পিত">পরিকল্পিত</option>
	    		</select>
			</div>
	  	<br>
	  <center><button type="submit" class="btn btn-primary">সংযোজন করুন </button></center>
	</form>
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
		</div>
		@endif
		@php $i=0; @endphp
	  	<br>
	<br><br>
	<center><h2>কাঠামো সম্পর্কে</h2></center>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">ক্রমিক নং</th>
				<th scope="col">কাঠামো নাম</th>
				<th scope="col">কাঠামো স্বকীয়তা</th>
				<th scope="col">সংযুক্তির তারিখ</th>
				<th scope="col">নির্বাচন</th>
			</tr>
		</thead>
		@if($value>=1)
		<tbody> 
			@foreach($project as $data)
			<tr>
				<th scope="row">@php echo $i=$i+1; @endphp</th>
				<td>{{($data->project_name)}}</td>
				<td>{{($data->status)}}</td>
			    <td>{{($data->created_at)}}</td>
			    <td>
			    	<a href="{{URL::to('updateprojectsonly/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
		        	<a href="{{URL::to('deleteprojectsonly/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
			    </td>
			</tr>
			@endforeach
		</tbody>
		@else
		<center><h4 style="color: red;">এখানে কোন সংস্থা সম্পর্কে কোন তথ্য নেই......!!!</h4></center>
		@endif
	</table>
	<hr>
</div>
@endsection