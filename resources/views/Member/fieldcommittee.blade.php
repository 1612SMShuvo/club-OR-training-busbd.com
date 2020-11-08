@extends("membermainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
	            @php $i=0; @endphp
	            	<center>
	            		<h2>মাঠ উপদেষ্টা কমিটির সদস্য মন্ডলী</h2>
			    @if($value>=1)
	            	</center>
	            	<br>
	        <table class="table">
			    <thead class="thead-dark">
			    	<tr>
				        <th scope="col">ক্রমিক নং</th>
				        <th scope="col">সদস্যের নাম</th>
				        <th scope="col">সদস্যের ঠিকানা</th>
				        <th scope="col">সদস্যের মোবাইল</th>
				        <th scope="col">পদবী</th>
				        <th scope="col">নির্বাচন</th>
			    	</tr>
			    </thead>
			    <tbody>
			    	@foreach($committees as $data)
			      	<tr>
				        <th scope="row">@php echo $i=$i+1; @endphp</th>
						    <td>{{($data->advisor_name)}}</td> 
						    <td>{{($data->address)}}</td> 
						    <td>{{($data->phone)}}</td> 
						    <td>{{($data->rank)}}</td> 
				        <td>
				        	<a href="{{URL::to('viewfieldcommittee/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
					    </td>
				    </tr>
				    @endforeach
				</tbody>
			</table>
				@else
				<center><h4 style="color:red;">There is No Record Here.....!!!!</h4></center>
				@endif
				</div>
            </div>
@endsection