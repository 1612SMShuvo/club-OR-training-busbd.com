@extends("layout")
@section("content")
<div class="container">
	<br><br>
	<center><div class="text"><h2>আবেদন করুন </h2></div></center>
	<br><br>
	<form action="{{URL::to('add_application')}}" method="POST" enctype="multipart/form-data">
		@csrf
			{{-- <div class="form-group">
	    		<label for="inputEmail4" style="color: black;">আইডি</label> 
	    		<input type="text" class="form-control" id="role_id" name="role_id" value="191" placeholder="আপনার আইডি লিখুন" readonly="">
	    	</div> --}}
			<div class="form-group">
	    		<label for="inputEmail4" style="color: black;"> নাম </label> 
	    		<input type="text" class="form-control" id="name" name="name" placeholder="আপনার নাম লিখুন">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">পিতার নাম </label> 
	    		<input type="text" class="form-control" id="father_name" name="father_name" placeholder="আপনার পিতার নাম লিখুন">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">মাতার নাম </label> 
	    		<input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="আপনার মাতার নাম লিখুন">
	    	</div>
			<div class="form-group">
		    	<label for="inputAddress" style="color: black;">ই-মেইল</label> 
		    	<input type="text" class="form-control" id="email" name="email" placeholder="আপনার ই-মেইল লিখুন">
			</div>
			<div class="form-group">
		    	<label for="inputAddress2" style="color: black;">আপনার জাতীয় পরিচয় পত্র নম্বর</label>
		    	<input type="text" class="form-control" id="nid" name="nid" placeholder="আপনার জাতীয় পরিচয় পত্র নম্বর লিখুন">
			</div>
			<div class="form-group">
		    	<label for="inputAddress2" style="color: black;">আপনার মোবাইল নম্বর</label>
		    	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="আপনার মোবাইল নম্বর লিখুন">
			</div><br>
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<center><h3>বর্তমান ঠিকানা</h3></center> 
				<div class="form-group">
				   	<label  for="residential_c_house" style="color: black;">বাড়ি নং </label>
				   	<input type="text" class="form-control" id="c_house" name="c_house" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_village" style="color: black;">গ্রাম </label>
				   	<input type="text" class="form-control" id="c_village" name="c_village" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_postoffice" style="color: black;">ডাক অফিস </label>
				   	<input type="text" class="form-control" id="c_postoffice" name="c_postoffice" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_upzilla" style="color: black;">উপজেলা/ইউনিয়ন</label>
				   	<input type="text" class="form-control" id="c_upzilla" name="c_upzilla" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_zilla" style="color: black;">জেলা </label>
				   	<input type="text" class="form-control" id="c_zilla" name="c_zilla" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label  for="residential_c_division" style="color: black;">বিভাগ</label>
				   	<input type="text" class="form-control" id="c_division" name="c_division" placeholder="আপনার ঠিকানা লিখুন">
				</div>
	    	</div>
			<div class="form-group col-md-6">
		    	<center><h3>স্থায়ী ঠিকানা</h3></center> 
				<div class="form-group">
				   	<label for="permanent_p_house" style="color: black;">বাড়ি নং </label>
				   	<input type="text" class="form-control" id="p_house" name="p_house" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_village" style="color: black;">গ্রাম </label>
				   	<input type="text" class="form-control" id="p_village" name="p_village" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_postoffice" style="color: black;">ডাক অফিস </label>
				   	<input type="text" class="form-control" id="p_postoffice" name="p_postoffice" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_upzilla" style="color: black;">উপজেলা/ইউনিয়ন</label>
				   	<input type="text" class="form-control" id="p_upzilla" name="p_upzilla" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_zilla" style="color: black;">জেলা </label>
				   	<input type="text" class="form-control" id="p_zilla" name="p_zilla" placeholder="আপনার ঠিকানা লিখুন">
				</div>
				<div class="form-group">
				   	<label for="permanent_p_division" style="color: black;">বিভাগ</label>
				   	<input type="text" class="form-control" id="p_division" name="p_division" placeholder="আপনার ঠিকানা লিখুন">
				</div>
			</div>
			<center>
		    	<div class="form-check">
					<input class="form-check-input" type="checkbox" value="abcd" name="same_residential_permanent" id="same_residential_permanent" onclick="return auto_fill_address();">
		    		<label class="form-check-label" for="same_residential_permanent">
					    বর্তমান ঠিকানাকেই স্থায়ী ঠিকানা হিসেবে ব্যাবহার করুন...  
					</label>
				</div>
			</center>
		</div><br>
		<center><h3>নমিনীর তথ্য </h3></center>
			<div class="form-group">
	    		<label for="inputEmail4" style="color: black;"> নাম </label> 
	    		<input type="text" class="form-control" id="nominee" name="nominee" placeholder="আপনার নাম লিখুন">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">পিতার নাম </label> 
	    		<input type="text" class="form-control" id="father_nominee" name="father_nominee" placeholder="আপনার পিতার নাম লিখুন">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">প্রার্থীর সাথে সম্পর্ক</label> 
	    		<input type="text" class="form-control" id="relation" name="relation" placeholder="আপনার মাতার নাম লিখুন">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">মোবাইল নম্বর </label> 
	    		<input type="text" class="form-control" id="nominee_mobile" name="nominee_mobile" placeholder="আপনার মাতার নাম লিখুন">
	    	</div>
	    	<br><br>
		<center><h3>অন্যান্য তথ্য </h3><h5 style="color: red;">(হ্যা হলে বক্সে ক্লিক করুন নতুবা ছেড়ে দিন)</h5></center><br> 
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<div class="form-check">
					<input class="form-check-input" type="checkbox" name="addict" value="হ্যাঁ" id="addict">
					<label class="form-check-label" for="defaultCheck1">
					    মাদকাসক্ত কিনা?
					</label>
				</div>
	    	</div>
			<div class="form-group col-md-6">
		    	<div class="form-check">
					<input class="form-check-input" type="checkbox" name="indebted" value="হ্যাঁ" id="indebted">
					<label class="form-check-label" for="defaultCheck2">
					    দেওলিয়া বা ঋণগ্রস্থ কিনা?
					</label>
				</div>
			</div>
		</div>
		<div class="form-row">
	    	<div class="form-group col-md-6">
	    		<div class="form-check">
					<input class="form-check-input" type="checkbox" name="accused" value="হ্যাঁ" id="accused">
					<label class="form-check-label" for="defaultCheck3">
					    আসামি কিনা(ফেরারি/মামলা)? 
					</label>
				</div>
	    	</div>
			<div class="form-group col-md-6">
		    	<div class="form-check">
					<input class="form-check-input" type="checkbox" name="patient" value="হ্যাঁ" id="defaultCheck4">
					<label class="form-check-label" for="defaultCheck4">
					    জটিল রোগী কিনা? 
					</label>
				</div>
			</div>
		</div><br>
		<div class="form-row">
	    	<div class="form-group col-md-6">
				<div class="form-group">
			    	<label for="inputAddress" style="color: black;">পাসপোর্ট সাইজের ছবি দিন</label> 
			    	<input type="file" class="form-control" id="pp_image" name="pp_image" placeholder="আপনার আপনার পাসপোর্ট সাইজের ছবি দিন লিখুন">
				</div>
	    	</div>
			<div class="form-group col-md-6">
				<div class="form-group"> 
			    	<label for="inputAddress" style="color: black;">সাক্ষরের ছবি দিন</label> 
			    	<input type="file" class="form-control" id="s_image" name="s_image" placeholder="আপনার সাক্ষরের ছবি দিন">
				</div>
			</div>
		</div>
		<div class="form-group">
	   		<label for="inputEmail4" style="color: black;">গোপন পাসওয়ার্ড দিন</label> 
	   		<input type="password" class="form-control" id="password" name="password" placeholder="*************">
	   	</div>
		<input type="text" class="form-control" id="status" name="status" value="Pending" hidden="">
	  <center><button type="submit" class="btn btn-primary">আবেদন সফল করুন </button></center>
	</form>
</div>
<br><br><hr><br>
<script type="text/javascript">
    function auto_fill_address(){
     var same_addr = document.getElementById("same_residential_permanent").checked;
     var c_house = document.getElementById("c_house").value;
     var c_village = document.getElementById("c_village").value;
     var c_postoffice = document.getElementById("c_postoffice").value;
     var c_upzilla = document.getElementById("c_upzilla").value;
     var c_zilla = document.getElementById("c_zilla").value;
     var c_division = document.getElementById("c_division").value;
     //alert(x);
     if(same_addr){
      if((c_house=='' || c_house==null)||(c_village=='' || c_village==null)||(c_postoffice=='' || c_postoffice==null)||(c_upzilla=='' || c_upzilla==null)||(c_zilla=='' || c_zilla==null)||(c_division=='' || c_division==null)){
       alert('দয়া করে ঠিকানা ফরম পূরণ করুন......!!!');
       document.getElementById("same_residential_permanent").checked = false;
      }else{
       document.getElementById("p_house").value = c_house;
       document.getElementById("p_village").value = c_village;
       document.getElementById("p_postoffice").value = c_postoffice;
       document.getElementById("p_upzilla").value = c_upzilla;
       document.getElementById("p_zilla").value = c_zilla;
       document.getElementById("p_division").value = c_division;
      }
     }
     else
     {
       document.getElementById("p_house").value ='';
       document.getElementById("p_village").value = '';
       document.getElementById("p_postoffice").value = '';
       document.getElementById("p_upzilla").value = '';
       document.getElementById("p_zilla").value = '';
       document.getElementById("p_division").value = '';
     }  
      }
   </script>
@endsection


{{-- 
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;"> নাম </label> 
	    		<input type="text" class="form-control" id="inputEmail4" name="company" placeholder="আপনার নাম লিখুন">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">পিতার নাম </label> 
	    		<input type="text" class="form-control" id="inputEmail4" name="company" placeholder="আপনার পিতার নাম লিখুন">
	    	</div>
	    	<div class="form-group">
	    		<label for="inputEmail4" style="color: black;">মাতার নাম </label> 
	    		<input type="text" class="form-control" id="inputEmail4" name="company" placeholder="আপনার মাতার নাম লিখুন">
	    	</div>
			<div class="form-group">
		    	<label for="inputAddress" style="color: black;">ই-মেইল</label> 
		    	<input type="text" class="form-control" id="inputAddress" name="house" placeholder="আপনার ই-মেইল লিখুন">
			</div>
			<div class="form-group">
		    	<label for="inputAddress2" style="color: black;">আপনার জাতীয় পরিচয় পত্র নম্বর</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="area" placeholder="আপনার জাতীয় পরিচয় পত্র নম্বর লিখুন">
			</div>
			<div class="raw">
				<div class="col">
					hello
				</div>
				<div class="col">
					hi
				</div>
			</div> --}}
			{{-- <div class="raw">
				<div class="col-lg-6 col-md-6 col-sm-6">
				<center><h4>বর্তমান ঠিকানা</h4></center> 
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">বাড়ি নং </label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">গ্রাম </label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">ডাক অফিস </label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">উপজেলা/ইউনিয়ন</label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">জেলা </label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">বিভাগ</label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
				<center><h4>স্থায়ী ঠিকানা</h4></center> 
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">বাড়ি নং </label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">গ্রাম </label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">ডাক অফিস </label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">উপজেলা/ইউনিয়ন</label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">জেলা </label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
					<div class="form-group">
				    	<label for="inputAddress" style="color: black;">বিভাগ</label>
				    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
				    </div>
				</div>
			</div> --}}
{{-- 			<div class="form-group">
		    	<label for="inputAddress" style="color: black;">আপনার ঠিকানা</label>
		    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার ঠিকানা লিখুন">
			</div>
			<div class="form-group">
	    		<label for="inputAddress" style="color: black;">আপনার থানা/উপজেলা/ইউনিয়ন</label>
		    	<input type="text" class="form-control" id="inputAddress" name="road" placeholder="আপনার থানা/উপজেলা/ইউনিয়ন নাম লিখুন">
			</div> 
			<div class="form-group">
		    	<label for="inputAddress2" style="color: black;">আপনার জেলা</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="area" placeholder="আপনার জেলার নাম লিখুন">
			</div>
			<div class="form-group">
		    	<label for="inputAddress2" style="color: black;">আপনার রেফারেন্সের নাম</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="area" placeholder="আপনার রেফারেন্সের নাম লিখুন">
			</div>
	    	<div class="form-group">
			    <label for="exampleFormControlSelect1" style="color: black;">আবেদনের বিষয়</label>
			    <select class="form-control" id="exampleFormControlSelect1">
			    	<option>1</option>
			    	<option>2</option>
			    	<option>3</option>
			    	<option>4</option>
			    	<option>5</option>
			    </select>
			</div>
			<div class="form-group">
		    	<label for="inputAddress2" style="color: black;">আপনার মোবাইল নম্বর</label>
		    	<input type="text" class="form-control" id="inputAddress2" name="area" placeholder="আপনার মোবাইল নম্বর লিখুন">
			</div>
			<br><br>
	  <center><button type="submit" class="btn btn-primary">আবেদন সফল করুন </button></center>
	</form> --}}