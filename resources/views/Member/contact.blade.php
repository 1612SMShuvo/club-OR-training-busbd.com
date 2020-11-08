@extends("membermainpage")
@section("content")
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <br><br>
                <div class="contact-info-left">
                    <h2>হট লাইন নম্বর</h2>
                    <p>যেকোনো জরুরী সময়ে দ্রুত যোগাযোগের জন্য নিম্নোক্ত নম্বরে্র যেকোনো একটিতে কল করুন অথবা সংক্ষিপ্ত মেসেজ দিন পাশের যোগাযোগ বক্স থেকে ।</p>
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>ঠিকানা: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>ফোন নম্বর: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>ই-মেইল: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
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
                <br>
                    <h2>মেসেজ যোগাযোগ বক্স</h2>
                    <p>জরুরি মেসেজ লিখুন এবং "পাঠান" বাটন চাপুন </p>
                    <form action="{{URL::to('add_contact')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail4" style="color: black;">আপনার নাম </label> 
                            <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="আপনার নাম লিখুন">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress" style="color: black;">আপনার ই-মেইল</label> 
                            <input type="text" class="form-control" id="inputAddress" name="email" placeholder="আপনার ই-মেইল লিখুন">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4" style="color: black;">শিরোনাম লিখুন </label> 
                            <input type="text" class="form-control" id="inputEmail4" name="heading" placeholder="শিরোনাম লিখুন ">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4">সংক্ষিপ্ত বার্তা লিখুন</label>
                            <textarea class="form-control" id="exampleFormControlTextarea4" raws="8" style="height: 200px;" name="massage" placeholder="সংক্ষিপ্ত বার্তা লিখুন" required=""></textarea>
                        </div>
                        <center><input type="submit" class="btn btn-success" value="পাঠান"></center>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection