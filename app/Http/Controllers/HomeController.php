<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use DB;
use Illuminate\Support\Facades\Auth;
use users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function greate()
    { 
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $slide=DB::table('slide_photo')->get();
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $map=DB::table('footer_map')->first();
        $about=DB::table('about_org')->first();
        $add=DB::table('advertisement')->get();
        $chairperson=DB::table('speech_chairperson')->first();
        $gsecretary=DB::table('speech_gsecretary')->first();
        $itservice=DB::table('it_service')->get();
        $news=DB::table('news_details')->get();
        $no=DB::table('emergency_no')->get();
        $advisors1=DB::table('advisors')->orderByRaw('updated_at', 'DESC')->get();
        $advisors2=DB::table('advisors')->orderByRaw('updated_at', 'ASC')->get();
        $committee1=DB::table('famous_persons')->orderByRaw('updated_at', 'DESC')->get();
        $committee2=DB::table('famous_persons')->orderByRaw('updated_at', 'ASC')->get();
        // $gsecretary=DB::table('speech_gsecretary')->get();
        return view('greate')->with('icons',$icon)->with('icons',$icon)->with('logos',$logo)->with('slides',$slide)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('abouts',$about)->with('adds',$add)->with('chairpersons',$chairperson)->with('gsecretarys',$gsecretary)->with('itservices',$itservice)->with('nss',$news)->with('adv1',$advisors1)->with('adv2',$advisors2)->with('com1',$committee1)->with('com2',$committee2)->with('num',$no);
    }
    public function membermainpage()
    {
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $slide=DB::table('slide_photo')->get();
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $map=DB::table('footer_map')->first();
        $about=DB::table('about_org')->first();
        $add=DB::table('advertisement')->get();
        $chairperson=DB::table('speech_chairperson')->first();
        $gsecretary=DB::table('speech_gsecretary')->first();
        $itservice=DB::table('it_service')->get();
        $news=DB::table('news_details')->get();
        $advisors1=DB::table('advisors')->orderByRaw('updated_at', 'DESC')->get();
        $advisors2=DB::table('advisors')->orderByRaw('updated_at', 'ASC')->get();
        $committee1=DB::table('famous_persons')->orderByRaw('updated_at', 'DESC')->get();
        $committee2=DB::table('famous_persons')->orderByRaw('updated_at', 'ASC')->get();
        $no=DB::table('emergency_no')->get();
        
        return view('membermainpage')->with('icons',$icon)->with('icons',$icon)->with('logos',$logo)->with('slides',$slide)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('abouts',$about)->with('adds',$add)->with('chairpersons',$chairperson)->with('gsecretarys',$gsecretary)->with('itservices',$itservice)->with('nss',$news)->with('adv1',$advisors1)->with('adv2',$advisors2)->with('com1',$committee1)->with('com2',$committee2)->with('num',$no);
    }
    public function adminmainpage()
    {
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $slide=DB::table('slide_photo')->get();
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $map=DB::table('footer_map')->first();
        $about=DB::table('about_org')->first();
        $add=DB::table('advertisement')->get();
        $chairperson=DB::table('speech_chairperson')->first();
        $gsecretary=DB::table('speech_gsecretary')->first();
        $itservice=DB::table('it_service')->get();
        $news=DB::table('news_details')->get();
        $advisors1=DB::table('advisors')->orderByRaw('updated_at', 'DESC')->get();
        $advisors2=DB::table('advisors')->orderByRaw('updated_at', 'ASC')->get();
        $committee1=DB::table('famous_persons')->orderByRaw('updated_at', 'DESC')->get();
        $committee2=DB::table('famous_persons')->orderByRaw('updated_at', 'ASC')->get();
        $no=DB::table('emergency_no')->get();
        
        return view('adminmainpage')->with('icons',$icon)->with('icons',$icon)->with('logos',$logo)->with('slides',$slide)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('abouts',$about)->with('adds',$add)->with('chairpersons',$chairperson)->with('gsecretarys',$gsecretary)->with('itservices',$itservice)->with('nss',$news)->with('adv1',$advisors1)->with('adv2',$advisors2)->with('com1',$committee1)->with('com2',$committee2)->with('num',$no);
    }
    public function admin_dashboard()
    {
        return view('Admin.admin_dashboard');
    }
    public function layout()
    {
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $slide=DB::table('slide_photo')->get();
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $map=DB::table('footer_map')->first();
        $about=DB::table('about_org')->first();
        $add=DB::table('advertisement')->get();
        $chairperson=DB::table('speech_chairperson')->first();
        $gsecretary=DB::table('speech_gsecretary')->first();
        $itservice=DB::table('it_service')->get();
        $advisors1=DB::table('advisors')->orderByRaw('updated_at', 'DESC')->get();
        $advisors2=DB::table('advisors')->orderByRaw('updated_at', 'ASC')->get();
        $committee1=DB::table('famous_persons')->orderByRaw('updated_at', 'DESC')->get();
        $committee2=DB::table('famous_persons')->orderByRaw('updated_at', 'ASC')->get();
        $no=DB::table('emergency_no')->get();
        // $gsecretary=DB::table('speech_gsecretary')->get();
        return view('layout')->with('icons',$icon)->with('icons',$icon)->with('logos',$logo)->with('slides',$slide)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('abouts',$about)->with('adds',$add)->with('chairpersons',$chairperson)->with('gsecretarys',$gsecretary)->with('itservices',$itservice)->with('adv1',$advisors1)->with('adv2',$advisors2)->with('com1',$committee1)->with('com2',$committee2)->with('num',$no);
    }
    public function application()
    {
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $slide=DB::table('slide_photo')->get();
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $map=DB::table('footer_map')->first();
        $about=DB::table('about_org')->first();
        return view('Member.application')->with('icons',$icon)->with('icons',$icon)->with('logos',$logo)->with('slides',$slide)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('abouts',$about);
    }

    public function add_application(Request $request)
    {
        $data=array();

        $data['name']=$request->name;
        $data['father_name']=$request->father_name;
        $data['mother_name']=$request->mother_name;
        $data['email']=$request->email;
        $data['nid']=$request->nid;
        $data['mobile']=$request->mobile;
        $data['c_house']=$request->c_house;
        $data['c_village']=$request->c_village;
        $data['c_postoffice']=$request->c_postoffice;
        $data['c_upzilla']=$request->c_upzilla;
        $data['c_zilla']=$request->c_zilla;
        $data['c_division']=$request->c_division;
        $data['p_house']=$request->p_house;
        $data['p_village']=$request->p_village;
        $data['p_postoffice']=$request->p_postoffice;
        $data['p_upzilla']=$request->p_upzilla;
        $data['p_zilla']=$request->p_zilla;
        $data['p_division']=$request->p_division;
        $data['nominee']=$request->nominee;
        $data['father_nominee']=$request->father_nominee;
        $data['relation']=$request->relation;
        $data['nominee_mobile']=$request->nominee_mobile;
        $data['addict']=$request->addict;
        $data['indebted']=$request->indebted;
        $data['accused']=$request->accused;
        $data['patient']=$request->patient;
        $data['status']=$request->status;
        $data['password']=$request->password;
        $image1=$request->file('pp_image');
        $image2=$request->file('s_image');
        if ($image1 && $image2) {
            $image1_name=hexdec(uniqid());
            $ext=strtolower($image1->getClientOriginalExtension());
            $image1_full_name=$image1_name.'.'.$ext;
            $upload_path='public/SuperAdmin/applicant/';
            $image1_url=$upload_path.$image1_full_name;
            $success=$image1->move($upload_path,$image1_full_name);
            $data['pp_image']=$image1_url;
            $image2_name=hexdec(uniqid());
            $ext=strtolower($image2->getClientOriginalExtension());
            $image2_full_name=$image2_name.'.'.$ext;
            $upload_path='public/SuperAdmin/applicant/';
            $image2_url=$upload_path.$image2_full_name;
            $success=$image2->move($upload_path,$image2_full_name);
            $data['s_image']=$image2_url;
            
        DB::table('applicant_details')->insert($data);
            return redirect('/login')->with('flash_message_success','আপনার রেজিষ্ট্রেশন ফরম সংযুক্ত করা হয়েছে, দয়া করে আনুমোদনের জন্য অপেক্ষা করুন.....!!!!');
        }
        else{
            return redirect('/application')->with('flash_message_success','আপনার রেজিষ্ট্রেশন ফরম সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
}
