@extends("membermainpage")
@section("content")
    <div class="shop-detail-box-main">
        <div class="container">
            	@php $i=0; @endphp
	<center><h2>উপদেষ্টা মন্ডলী</h2></center>
        <br>
        	<table class="table">
			    <thead class="thead-dark">
			    	<tr>
				        <th scope="col">ক্রমিক নং</th>
				        <th scope="col">উপদেষ্টার নাম</th>
				        <th scope="col">উপদেষ্টা্র ঠিকানা</th>
				        <th scope="col">উপদেষ্টার মোবাইল</th>
				        <th scope="col">ক্লাবের নাম</th>
				        <th scope="col">নির্বাচন</th>
			    	</tr>
				</thead>
				@if($value>=1)
			    <tbody>
			    	@foreach($advisor as $data)
				    <tr>
				        <th scope="row">@php echo $i=$i+1; @endphp</th>
				        <td>{{($data->a_name)}}</td>
				        <td>{{($data->address)}}</td>
				        <td>{{($data->phone)}}</td>
				        <td>{{($data->club)}}</td> 
				        <td>
					       	<a href="{{URL::to('viewadvisor/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
				        </td>
				    </tr>
				    @endforeach
				</tbody>
				@else
				<center><h3 style="color:red;">There Is No Such Values.....!!!!</h3></center>
				@endif
			</table>
		</div>
</div>
@endsection