@extends("adminmainpage")
@section("content")
<div class="container">
	<center>
		<h2 style="color:black;">নতুন সংযুক্ত করুন</h2>
	<br>
	<br>	
		<div class="col-lg-12 col-md-12 col-sm-12">
			<form class="form-group" action="{{URL::to('news_add')}}" method="POST">
				@csrf
					<div class="form-control">
			    		<input class="form-control" type="text" name="title" placeholder="সংবাদের শিরোনাম">
			    	</div>
					<div class="form-control">
			    		<textarea class="form-control" type="text" name="news" rows="4" placeholder="সংক্ষিপ্ত সংবাদ">
			    		</textarea> 
			    	</div><br>
			    	<center>
			    		<button class=" btn btn-success" type="submit">সংযুক্তি</button>
			    	</center>
			    </div>
			</form>
		</div>
	</center>
	<br>
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
	@php $i=0; @endphp
	<center><h2>নিউজ বা সংবাদ</h2></center>
        <br>
        	<table class="table">
			    <thead class="thead-dark">
			    	<tr>
				        <th scope="col">ক্রমিক নং</th>
				        <th scope="col">শিরোনাম</th>
				        <th scope="col">বিস্তারিত</th> 
				        <th scope="col">তারিখ ও সময়</th>
				        <th scope="col">নির্বাচন</th>
			    	</tr>
				</thead>
				@if($value>=1)
			    <tbody>
			    	@foreach($news as $data)
				    <tr>
				        <th scope="row">@php echo $i=$i+1; @endphp</th>
				        <td>{{($data->title)}}</td>
				        <td>{{($data->news)}}</td>
				        <td>{{($data->created_at)}}</td>
				        <td>
					       	<a href="{{URL::to('view_news/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
			        		<a href="{{URL::to('delete_news/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
				        </td>
				    </tr>
				    @endforeach
				</tbody>
				@else
				<center><h3 style="color:red;">There Is No Such Values.....!!!!</h3></center>
				@endif
			</table>
</div>

	<br>
	<hr>
	<br>
@endsection