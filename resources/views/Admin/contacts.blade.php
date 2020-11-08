@extends("adminmainpage")
@section("content")
<div class="container">
	<center><h2>জরুরি যোগাযোগকারীর মেসেজ</h2></center>
	<br><br>
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
	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ক্রমিক নং</th>
      <th scope="col">মেসেজকারীর নাম</th> 
      <th scope="col">মেসেজকারীর ই-মেইল</th>
      <th scope="col">মেসেজের শিরোনাম</th>
      <th scope="col">মেসেজ</th>
      <th scope="col">উত্তর</th>
      <th scope="col">নির্বাচন করুন</th>
    </tr>
  </thead>
  @if($value>=1)
  <tbody>
    @foreach($msg as $data)
    <tr>
      <th scope="row">@php echo $i=$i+1; @endphp </th>
      <td>{{($data->name)}}</td>
      <td>{{($data->email)}}</td>
      <td>{{($data->heading)}}</td>
      <td>{{($data->massage)}}</td>
      <td>{{($data->responses)}}</td>  
      <td>
        <a href="{{URL::to('responsesmassage/'.$data->id)}}"><img style="height: 35px; width: 35px; padding-right: 2px;" src="{{asset('frontendhome/images/view.PNG')}}"></a>
        <a href="{{URL::to('delete_contact/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 2px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
      </td>
    </tr>
    @endforeach
  </tbody>
  @else
  <center><h3 style="color:red;">There is no records....!!!</h3></center>
  @endif
</table>
	<br><br><br><br>
</div>
@endsection