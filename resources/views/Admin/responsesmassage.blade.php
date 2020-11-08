@extends("adminmainpage")
@section("content")
<div class="container">
    <div class="col-lg-12 col-sm-12">
                <br>
                    <h2>মেসেজ যোগাযোগ বক্স</h2>
                    <p>জরুরি মেসেজ লিখুন এবং "পাঠান" বাটন চাপুন </p>
                    <form action="{{URL::to('response_contact/'.$cont->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail4" style="color: black;">আপনার নাম </label> 
                            <input type="text" class="form-control" id="inputEmail4" name="name" value="{{($cont->name)}}" placeholder="আপনার নাম লিখুন" readonly="">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" style="color: black;">আপনার ই-মেইল</label> 
                            <input type="text" class="form-control" id="inputAddress" name="email" placeholder="আপনার ই-মেইল লিখুন" value="{{($cont->email)}}" readonly="">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4" style="color: black;">শিরোনাম লিখুন </label> 
                            <input type="text" class="form-control" id="inputEmail4" name="heading" value="{{($cont->heading)}}" placeholder="শিরোনাম লিখুন " readonly="">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">সংক্ষিপ্ত বার্তা লিখুন</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" raws="8" style="height: 200px;" name="massage" placeholder="সংক্ষিপ্ত বার্তা লিখুন" required="" readonly="">{{($cont->massage)}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">সংক্ষিপ্ত উত্তর লিখুন</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" raws="8" style="height: 200px;" name="responses" placeholder="সংক্ষিপ্ত উত্তর লিখুন" required="">{{($cont->responses)}}</textarea>
                        </div>
                        <center><input type="submit" class="btn btn-success" value="পাঠান"></center>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection