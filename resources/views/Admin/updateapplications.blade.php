@extends("adminmainpage")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>আবেদন অনুমোদিত করুন </h2></div></center>
	<br><br>
	<form action="{{URL::to('applsrove_applslication/'.$appls->a_id)}}" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6">
					<img style="height: 256px; width: 256px;" src="{{URL::to($appls->pp_image)}}">
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6">
					<img style="height: 256px; width: 256px;" src="{{URL::to($appls->s_image)}}">
				</div>
			</div>
			<br><hr>
	    	<div class="form-group">
			    <label for="exampleFormControlSelect1" style="color: black;">আইডি</label>
			    <select class="form-control" id="exampleFormControlSelect1" name="role_id">
			    	<option selected="">বেছে নিন......</option>
			    	<option value="191">সদস্য </option> 
			    	<option value="1005">এডমিন</option>
			    </select>
			</div>
			<div class="form-group">
	    		<label for="inputEmail4" style="color: black;"> সদস্য আইডি </label> 
	    		<input type="text" class="form-control" id="applicant_id" name="applicant_id" value="{{$appls->applicant_id}}" placeholder="আপনার সদস্য আইডি লিখুন" >
	    	</div>
			<div class="form-group">
	    		<label for="inputEmail4" style="color: black;"> নাম </label> 
	    		<input type="text" class="form-control" id="name" name="name" value="{{$appls->name}}" placeholder="আপনার নাম লিখুন" readonly="">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">পিতার নাম </label> 
	    		<input type="text" class="form-control" id="father_name" name="father_name" value="{{$appls->father_name}}" placeholder="আপনার পিতার নাম লিখুন" readonly="">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">মাতার নাম </label> 
	    		<input type="text" class="form-control" id="mother_name" name="mother_name" value="{{$appls->mother_name}}" placeholder="আপনার মাতার নাম লিখুন" readonly="">
	    	</div>
			<div class="form-group">
		    	<label for="inputAddress" style="color: black;">ই-মেইল</label> 
		    	<input type="text" class="form-control" id="email" name="email" value="{{$appls->email}}" placeholder="আপনার ই-মেইল লিখুন" readonly="">
			</div>
			<div class="form-group">
		    	<label for="inputAddress2" style="color: black;">আপনার জাতীয় পরিচয় পত্র নম্বর</label>
		    	<input type="text" class="form-control" id="nid" name="nid" value="{{$appls->nid}}" placeholder="আপনার জাতীয় পরিচয় পত্র নম্বর লিখুন" readonly="">
			</div>
			<div class="form-group">
		    	<label for="inputAddress2" style="color: black;">আপনার মোবাইল নম্বর</label>
		    	<input type="text" class="form-control" id="mobile" name="mobile" value="{{$appls->mobile}}" placeholder="আপনার মোবাইল নম্বর লিখুন">
			</div><br>
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<center><h3>বর্তমান ঠিকানা</h3></center> 
				<div class="form-group">
				   	<label  for="residential_c_house" style="color: black;">বাড়ি নং </label>
				   	<input type="text" class="form-control" id="c_house" name="c_house" value="{{$appls->c_house}}" placeholder="আপনার ঠিকানা লিখুন" >
				</div>
				<div class="form-group">
				   	<label  for="residential_c_village" style="color: black;">গ্রাম </label>
				   	<input type="text" class="form-control" id="c_village" name="c_village" value="{{$appls->c_village}}" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_postoffice" style="color: black;">ডাক অফিস </label>
				   	<input type="text" class="form-control" id="c_postoffice" name="c_postoffice" value="{{$appls->c_postoffice}}" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_upzilla" style="color: black;">উপজেলা/ইউনিয়ন</label>
				   	<input type="text" class="form-control" id="c_upzilla" name="c_upzilla" value="{{$appls->c_upzilla}}" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_zilla" style="color: black;">জেলা </label>
				   	<input type="text" class="form-control" id="c_zilla" name="c_zilla" value="{{$appls->c_zilla}}" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_division" style="color: black;">বিভাগ</label>
				   	<input type="text" class="form-control" id="c_division" name="c_division" value="{{$appls->c_division}}" placeholder="আপনার ঠিকানা লিখুন">
				</div>
	    	</div>
			<div class="form-group col-md-6">
		    	<center><h3>স্থায়ী ঠিকানা</h3></center> 
				<div class="form-group">
				   	<label for="permanent_p_house" style="color: black;">বাড়ি নং </label>
				   	<input type="text" class="form-control" id="p_house" name="p_house" value="{{$appls->p_house}}" placeholder="আপনার ঠিকানা লিখুন" readonly="">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_village" style="color: black;">গ্রাম </label>
				   	<input type="text" class="form-control" id="p_village" name="p_village" value="{{$appls->p_village}}"placeholder="আপনার ঠিকানা লিখুন" readonly="">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_postoffice" style="color: black;">ডাক অফিস </label>
				   	<input type="text" class="form-control" id="p_postoffice" name="p_postoffice" value="{{$appls->p_postoffice}}" placeholder="আপনার ঠিকানা লিখুন" readonly="">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_upzilla" style="color: black;">উপজেলা/ইউনিয়ন</label>
				   	<input type="text" class="form-control" id="p_upzilla" name="p_upzilla" value="{{$appls->p_upzilla}}" placeholder="আপনার ঠিকানা লিখুন" readonly="">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_zilla" style="color: black;">জেলা </label>
				   	<input type="text" class="form-control" id="p_zilla" name="p_zilla" value="{{$appls->p_zilla}}" placeholder="আপনার ঠিকানা লিখুন" readonly="">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_division" style="color: black;">বিভাগ</label>
				   	<input type="text" class="form-control" id="p_division" name="p_division" value="{{$appls->p_division}}" placeholder="আপনার ঠিকানা লিখুন" readonly="">
				</div>
			</div>
		</div><br>
		<center><h3>নমিনীর তথ্য </h3></center>
			<div class="form-group">
	    		<label for="inputEmail4" style="color: black;"> নাম </label> 
	    		<input type="text" class="form-control" id="nominee" name="nominee" value="{{$appls->nominee}}" placeholder="আপনার নাম লিখুন" readonly="">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">পিতার নাম </label> 
	    		<input type="text" class="form-control" id="father_nominee" name="father_nominee" value="{{$appls->father_nominee}}" placeholder="আপনার পিতার নাম লিখুন" readonly="">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">প্রার্থীর সাথে সম্পর্ক</label> 
	    		<input type="text" class="form-control" id="relation" name="relation" value="{{$appls->relation}}" placeholder="আপনার মাতার নাম লিখুন" readonly="">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">মোবাইল নম্বর </label> 
	    		<input type="text" class="form-control" id="nominee_mobile" name="nominee_mobile" value="{{$appls->nominee_mobile}}" placeholder="আপনার মাতার নাম লিখুন" readonly="">
	    	</div>
	    	<br><br>
		<center><h3>অন্যান্য তথ্য </h3><h5 style="color: red;">(হ্যা হলে বক্সে ক্লিক করুন নতুবা ছেড়ে দিন)</h5></center><br> 
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<div class="form-check">
					<label class="form-check-label" for="defaultCheck1">
					    মাদকাসক্ত কিনা? 
					</label>
					<input  class="form-control" type="text" name="addict" value="{{$appls->addict}}" id="addict" readonly="">
				</div>
	    	</div>
			<div class="form-group col-md-6">
		    	<div class="form-check">
					<label class="form-check-label" for="defaultCheck2">
					    দেওলিয়া বা ঋণগ্রস্থ কিনা?
					</label>
					<input  class="form-control" type="text" name="indebted" value="{{$appls->indebted}}" id="indebted" readonly="">
				</div>
			</div>
		</div>
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<div class="form-check">
					<label class="form-check-label" for="defaultCheck3">
					    আসামি কিনা(ফেরারি/মামলা)? 
					</label>
					<input  class="form-control" type="text" name="accused" value="{{$appls->accused}}" id="accused" readonly="">
				</div>
	    	</div>
			<div class="form-group col-md-6">
		    	<div class="form-check">
					<label class="form-check-label" for="defaultCheck4">
					    জটিল রোগী কিনা? 
					</label>
					<input  class="form-control" type="text" name="patient" value="{{$appls->patient}}" id="patient" readonly="">
				</div>
			</div>
		</div><br>
	    	<div class="form-group">
			    <label for="exampleFormControlSelect1" style="color: black;">অনুমোদন দিন</label>
			    <select class="form-control" id="exampleFormControlSelect1" name="status">
			    	<option selected="">বেছে নিন......</option>
			    	<option value="অনুমোদিত">অনুমোদিত </option> 
			    	<option value="প্রত্যাক্ষিত">প্রত্যাক্ষিত</option> 
			    </select>
			</div>
		<input type="text" class="form-control" id="password" name="password" value="{{($appls->password)}}" hidden="">
	  <center><button type="submit" class="btn btn-primary">সফল করুন </button></center>
	</form>
</div>
<br><br><hr><br>
@endsection
