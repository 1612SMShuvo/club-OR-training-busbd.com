@extends("superadminmainpage")
@section("content")
<div class="container">
	<br><br>
  <center><h4>All Addresses</h4></center>
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
  @endif
</div>
  <br><br>
  @php
    $i=0;
  @endphp
	<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">S.No.</th>
        <th scope="col">Company Name</th>
        <th scope="col">House</th>
        <th scope="col">Road</th>
        <th scope="col">Area</th>
        <th scope="col">City</th>
        <th scope="col">ZIP</th>
        <th scope="col">Division</th>
        <th scope="col">Option</th>
      </tr>
    </thead>
    @if($value>=1)
    <tbody>
      @foreach($companyaddress as $data)
      <tr>
        <th scope="row">@php echo $i=$i+1; @endphp</th>
        <td>{{($data->company)}}</td>
        <td>{{($data->house)}}</td>
        <td>{{($data->road)}}</td>
        <td>{{($data->area)}}</td>
        <td>{{($data->city)}}</td>
        <td>{{($data->zip)}}</td>
        <td>{{($data->division)}}</td>
        <td>
        	<a href="{{URL::to('update_address/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-right: 8px;" src="{{asset('adminCss/img/edit.PNG')}}"></a>
        	<a href="{{URL::to('delete_address/'.$data->id)}}"><img style="height: 30px; width: 30px; padding-left: 8px;" src="{{asset('adminCss/img/delete.PNG')}}"></a>
        </td>
      </tr>
      @endforeach
    </tbody>
    @else
    <center><h4 style="color:red;">There Is No Value Here.......!!!</h4></center>
    @endif
  </table>
	<br><br><br><br>
</div>
@endsection