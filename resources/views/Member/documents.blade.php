@extends("membermainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
	         
	            		<h2>ডকুমেন্ট সমূহ </h2>
	            	</center>
	            	<br>
	                <table class="table">
					    <thead class="thead-dark">
					    	<tr>
						        <th scope="col">ক্রমিক নং</th>
						        <th scope="col">ডকুমেন্টের নাম</th>
						        <th scope="col">প্রকাশ কাল</th> 
						        <th scope="col">নির্বাচন</th>
					    	</tr>
					    </thead>
					    @php $i=0; @endphp
					    @if($value>=1)
					    <tbody>
					    	@foreach($files as $data)
					      	<tr>
						        <th scope="row">@php echo $i=$i+1; @endphp</th>
						        <td>{{($data->title)}}</td>
						        <td>{{($data->created_at)}}</td>
						        <td>
						        	<a href="{{URL::to('showdocuments/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
						        </td>
						    </tr>
						    @endforeach
						</tbody>
						@else
						<center><h3 style="color: red;">There is no such value.....!!!</h3></center>
						@endif
					</table><br><br><hr>
				</div>
            </div>
@endsection