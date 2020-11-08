@extends("membermainpage")
@section("content")
<br>
<hr>
@php $i=0; @endphp
<div class="container">
	<center><h2>পঞ্জিকা অনুযায়ী কার্যক্রম</h2></center>
	<br><br> 
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">ক্রমিক নং</th>
	      <th scope="col">তারিখ</th> 
	      <th scope="col">কার্যক্রমের নাম</th>
	      <th scope="col">কার্যক্রমের সময়কাল</th>
	      <th scope="col">কার্যক্রমের ঠিকানা</th>
	    </tr>
	  </thead>
	  @php $i=0; @endphp
	  @if($value>=1)
	  <tbody>
	  	@foreach($info as $data)
	    <tr>
	      <th scope="row">@php echo $i=$i+1; @endphp</th>
	      <td>{{($data->date)}}</td>
	      <td>{{($data->event)}}</td>
	      <td>{{($data->days)}}</td>
	      <td>{{($data->place)}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	  @else
	  <center><h3 style="color: red;">There is no record...........!!!</h3></center>
	  @endif
	</table>
	</table>
		<br><br><br><br>
</div>
@endsection