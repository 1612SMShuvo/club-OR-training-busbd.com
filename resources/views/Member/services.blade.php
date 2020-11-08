@extends("membermainpage")
@section("content")
<div class="container">
    <div class="shop-detail-box-main">
        <div class="container">
        @php $i=0; @endphp
        	<center><h2>সেবা সমূহ</h2></center>
            	<br>
                	<table class="table">
					    <thead class="thead-dark">
					      <tr>
					        <th scope="col">ক্রমিক নং</th>
					        <th scope="col">সেবার নাম</th> 
					        <th scope="col">খরচ(সর্বনিম্ন)</th>
					      </tr>
					    </thead>
					    @if($value>=1)
					    <tbody>
					    	@foreach($service as $data)
					      	<tr>
						        <th scope="row">@php echo $i=$i+1; @endphp</th>
						        <td>{{($data->service_name)}}</td>
						        <td>{{($data->min_cost)}}</td>
						    </tr>
						    @endforeach
						</tbody>
						@else
						<center><h4 style="color:red;">There is No Record Here.....!!!!</h4></center>
						@endif>
					</table>
			<br><hr>
		</div>

@endsection