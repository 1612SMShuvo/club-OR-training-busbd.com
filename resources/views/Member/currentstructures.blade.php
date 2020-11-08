@extends("membermainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
	            	<center>
	            		<h2>চলমান কাঠামো সমূহ</h2>
	            		<h5>কমিটি প্রধাণ: &nbsp;</h5>
	            	</center>
	            	<br>
	            	@php $i=0; @endphp
	                <table class="table">
					    <thead class="thead-dark">
					    	<tr>
						        <th scope="col">ক্রমিক নং</th>
						        <th scope="col">কাঠামোর নাম</th>
						        <th scope="col">কাঠামোর ঠিকানা</th>
						        <th scope="col">কাঠামোর বিবরনী</th>
						        <th scope="col">নির্বাচন</th>
					    	</tr>
					    </thead>
					    @if($value>=1)
					    <tbody>
					    	@foreach($info as $data)
					      <tr>
					        <th scope="row">@php echo $i=$i+1; @endphp</th>
					        <td>{{$data->project_name}}</td>
					        <td>{{$data->subproject_name}}</td>
					        <td>{{$data->min_cost}}</td> 
					        <td>
						        <a href="{{URL::to('currentstructure/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
						    </td>
						    </tr>
						    @endforeach
						</tbody>
						@else
						<center><h3 style="color:red;">There is no record.....!!!!</h3></center>
						@endif
					</table>
				</div>
            </div>
@endsection