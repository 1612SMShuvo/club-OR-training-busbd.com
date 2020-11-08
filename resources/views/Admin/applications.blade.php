@extends("adminmainpage")
@section("content")
<div class="container col-lg-12 col-md-12 col-sm-4">
  <form class="form-inline d-flex justify-content-center md-form form-sm active-cyan active-cyan-2 mt-2" action="{{URL::to('search_applicant')}}" method="POST">
    @csrf
    <i class="fas fa-search" aria-hidden="true"></i>
    <input class="form-control form-control-sm ml-3 w-75" type="text" name="applicant_id" placeholder="সদস্যের আইডি দিয়ে খুজুন... " aria-label="Search">
  </form>
  <br>
  <br><hr>
	<div class="form-group">
	<center><h4>আবেদন সমূহ</h4></center>
	<br><br> 
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ক্রমিক নং</th>
      <th scope="col"> সদস্য আইডি</th>  
      <th scope="col">নাম</th>  
      <th scope="col">পিতার নাম</th>  
      <th scope="col">ই-মেইল</th>
      <th scope="col">এন.আই.ডি</th>
      <th scope="col">থানা/উপজেলা/ইউনিয়ন</th>  
      <th scope="col">জেলা</th> 
      <th scope="col">মোবাইল নং</th> 
      <th scope="col">কার্যকারিতা</th> 
      <th scope="col">নির্বাচন করুন</th>
    </tr>
  </thead>
  @php $i=0;@endphp
  @if($value>=1)
  <tbody>
    @foreach($apps as $data)
    <tr>
      <th scope="row">@php echo $i=$i+1; @endphp</th>
      <td>{{$data->applicant_id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->father_name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->nid}}</td>
      <td>{{$data->c_upzilla}}</td>
      <td>{{$data->c_zilla}}</td>
      <td>{{$data->mobile}}</td>
      <td>{{$data->status}}</td>
      <td>
      	<a href="{{URL::to('updateapplications/'.$data->a_id)}}"><img style="height: 30px; width: 30px; padding-right: 8px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
      </td>
    </tr>
    @endforeach
  </tbody>
  @else
  <center><h2 style="color: red;">There is no record...!!!</h2></center>
  @endif
</table>
	<br><br><br><br>
</div>
@endsection