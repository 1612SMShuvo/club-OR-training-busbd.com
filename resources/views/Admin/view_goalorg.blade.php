@extends("adminmainpage")
@section("content")
<div class="container">
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
<hr>
	<center><h2>আমাদের সংস্থার লক্ষ ও উদ্দেশ্য</h2></center>
	<br>
	<hr>
	@php $i=0; @endphp
	<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ক্রমিক নং</th>
					<th scope="col">সংস্থার নাম</th>
					<th scope="col">সংযুক্তির তারিখ</th>
					<th scope="col">নির্বাচন</th>
				</tr>
			</thead>
			@if($value>=1)
			<tbody> 
				@foreach($goals as $data)
				<tr>
					<th scope="row">@php echo $i=$i+1; @endphp</th>
					<td>{{($data->name)}}</td>
					<td>{{($data->created_at)}}</td>
				    <td>
			        	<a href="{{URL::to('details_goalorg/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
			        	<a href="{{URL::to('delete_goalorg/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
				    </td>
				</tr>
				@endforeach
			</tbody>
			@else
			<center><h3 style="color:red;">There Is no Such information.......!!!</h3></center>
			@endif
		</table>
</div>
<br><br><br>
<hr>
@endsection