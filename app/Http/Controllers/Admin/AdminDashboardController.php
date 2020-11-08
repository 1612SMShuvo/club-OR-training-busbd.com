<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use DB;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
	
    public function admin_dashboard()
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
        
        return view('Admin.admin_dashboard')->with('icons',$icon)->with('logos',$logo)->with('slides',$slide)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('abouts',$about)->with('adds',$add)->with('chairpersons',$chairperson)->with('gsecretarys',$gsecretary)->with('itservices',$itservice)->with('nss',$news)->with('adv1',$advisors1)->with('adv2',$advisors2)->with('com1',$committee1)->with('com2',$committee2)->with('num',$no);
    }
	
    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< About Organisation >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function aboutorg()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $aboutorga=DB::table('about_org')->get();
        $count=DB::table('about_org')->get()->count();
        return view('Admin.aboutorg')->with('about',$aboutorga)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function add_aboutorg(Request $request)
    {
        $data=array();

        $data['name']=$request->name;
        $data['about']=$request->about;
        $insert=DB::table('about_org')->insert($data);
        if ($insert) {
            return redirect('/aboutorg')->with('flash_message_success','সংস্থা সম্পর্কে বিষয়াদি সংযুক্ত হয়েছে.....!!!!');
        }
        else{
            return redirect('/aboutorg')->with('flash_message_success','সংস্থা সম্পর্কে বিষয়াদি সংযুক্ত হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function details_aboutorg(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $aboutorga=DB::table('about_org')->where('id',$id)->first();
        return view('Admin.details_aboutorg')->with('about',$aboutorga)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function detailsdocument(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        return view('Admin.detailsdocument')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function update_aboutorg(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $aboutorga=DB::table('about_org')->where('id',$id)->first();
        return view('Admin.update_aboutorg')->with('about',$aboutorga)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function updateaboutorg(Request $request,$id)
    {
        $data=array();

        $data['name']=$request->name;
        $data['about']=$request->about;
        $update=DB::table('about_org')->where('id',$id)->update($data);
        if ($update) {
            return redirect('/aboutorg')->with('flash_message_success','সংস্থা সম্পর্কে বিষয়াদি সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/aboutorg')->with('flash_message_success','সংস্থা সম্পর্কে বিষয়াদি সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function delete_aboutorg(Request $request,$id)
    {
        $delete=DB::table('about_org')->where('id',$id)->delete();
        if ($delete) 
        {
            return redirect('/aboutorg')->with('flash_message_success','সংস্থা সম্পর্কে বিষয়াদি মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/aboutorg')->with('flash_message_success','সংস্থা সম্পর্কে বিষয়াদি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
	

    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Goal of The Organisation >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function goalorg()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
    	return view('Admin.goalorg')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function add_goal(Request $request)
    {
        $data=array();

        $data['name']=$request->name;
        $data['goal1']=$request->goal1;
        $data['goal2']=$request->goal2;
        $data['goal3']=$request->goal3;
        $data['goal4']=$request->goal4;
        $data['goal5']=$request->goal5;
        $data['goal6']=$request->goal6;
        $data['goal7']=$request->goal7;
        $data['goal8']=$request->goal8;
        $data['goal9']=$request->goal9;
        $data['goal10']=$request->goal10;
        $data['intention1']=$request->intention1;
        $data['intention2']=$request->intention2;
        $data['intention3']=$request->intention3; 
        $data['intention4']=$request->intention4;
        $data['intention5']=$request->intention5;
        $data['intention6']=$request->intention6;
        $data['intention7']=$request->intention7;
        $data['intention8']=$request->intention8;
        $data['intention9']=$request->intention9;
        $data['intention10']=$request->intention10;

        $insert=DB::table('goals')->insert($data);
        if ($insert) {
            return redirect('/view_goalorg')->with('flash_message_success','সংস্থার লক্ষ্য ও উদ্দেশ্য গুলো সংযুক্ত হয়েছে.....!!!!');
        }
        else{
            return redirect('/view_goalorg')->with('flash_message_success','সংস্থার লক্ষ্য ও উদ্দেশ্য গুলো সংযুক্ত হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    public function view_goalorg()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $goal=DB::table('goals')->get();
        $count=DB::table('goals')->get()->count();
    	return view('Admin.view_goalorg')->with('goals',$goal)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
	
    public function details_goalorg(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $goal=DB::table('goals')->where('id',$id)->first();
        return view('Admin.details_goalorg')->with('goals',$goal)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function update_goalorg(Request $request, $id)
    {
        $data=array();

        $data['name']=$request->name;
        $data['goal1']=$request->goal1;
        $data['goal2']=$request->goal2;
        $data['goal3']=$request->goal3;
        $data['goal4']=$request->goal4;
        $data['goal5']=$request->goal5;
        $data['goal6']=$request->goal6;
        $data['goal7']=$request->goal7;
        $data['goal8']=$request->goal8;
        $data['goal9']=$request->goal9;
        $data['goal10']=$request->goal10;
        $data['intention1']=$request->intention1;
        $data['intention2']=$request->intention2;
        $data['intention3']=$request->intention3; 
        $data['intention4']=$request->intention4;
        $data['intention5']=$request->intention5;
        $data['intention6']=$request->intention6;
        $data['intention7']=$request->intention7;
        $data['intention8']=$request->intention8;
        $data['intention9']=$request->intention9;
        $data['intention10']=$request->intention10;

        $update=DB::table('goals')->where('id',$id)->update($data);
        if ($update) {
            return redirect('/view_goalorg')->with('flash_message_success','সংস্থার লক্ষ্য ও উদ্দেশ্য গুলো সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/view_goalorg')->with('flash_message_success','সংস্থার লক্ষ্য ও উদ্দেশ্য গুলো সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }


    public function delete_goalorg(Request $request, $id)
    {
        $delete=DB::table('goals')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/view_goalorg')->with('flash_message_success','সংস্থার লক্ষ্য ও উদ্দেশ্য গুলো মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/view_goalorg')->with('flash_message_success','সংস্থার লক্ষ্য ও উদ্দেশ্য গুলো মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }


    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Speech of Chairperson >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function chairpersontalks()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $goal=DB::table('goals')->get();
        $count=DB::table('goals')->get()->count();
        $speech=DB::table('speech_chairperson')->get();
        $count=DB::table('speech_chairperson')->get()->count();
    	return view('Admin.chairpersontalks')->with('speeches',$speech)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function add_chaipersontalk(Request $request)
    {
        $data=array();

        $data['c_name']=$request->c_name;
        $data['c_address']=$request->c_address;
        $data['c_mobile']=$request->c_mobile;
        $data['c_talk']=$request->c_talk;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/chairperson/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            
        DB::table('speech_chairperson')->insert($data);
            return redirect('/chairpersontalks')->with('flash_message_success','সংস্থার সভাপতির বানী সংযুক্ত হয়েছে.....!!!!');
        }
        else{
            return redirect('/chairpersontalks')->with('flash_message_success','সংস্থার সভাপতির বানী সংযুক্ত হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function updatespech_chairperson(Request $request,$id)
    {
        $data=array();

        $data['c_name']=$request->c_name;
        $data['c_address']=$request->c_address;
        $data['c_mobile']=$request->c_mobile;
        $data['c_talk']=$request->c_talk;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/chairperson/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            
        DB::table('speech_chairperson')->where('id',$id)->update($data);
            return redirect('/chairpersontalks')->with('flash_message_success','সংস্থার সভাপতির বানী সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/chairpersontalks')->with('flash_message_success','সংস্থার সভাপতির বানী সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    public function viewchairpersontalks(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $goal=DB::table('goals')->get();
        $count=DB::table('goals')->get()->count();
        $speeches=DB::table('speech_chairperson')->where('id',$id)->first();
        return view('Admin.viewchairpersontalks')->with('speech',$speeches)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function deletechairpersontalks(Request $request, $id)
    {
        $delete=DB::table('speech_chairperson')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/chairpersontalks')->with('flash_message_success','সংস্থার সভাপতির বানী মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/chairpersontalks')->with('flash_message_success','সংস্থার সভাপতির বানী মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
	

    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Speech of G. Secretary >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function gsecretarytalk()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $speech=DB::table('speech_gsecretary')->get();
        $count=DB::table('speech_gsecretary')->get()->count();
        return view('Admin.gsecretarytalk')->with('speeches',$speech)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function add_gsecretarytalk(Request $request)
    {
        $data=array();

        $data['g_name']=$request->g_name;
        $data['g_address']=$request->g_address;
        $data['g_mobile']=$request->g_mobile;
        $data['g_talk']=$request->g_talk;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/gsecretary/';
            $image_url=$upload_path.$image_full_name; 
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            
        DB::table('speech_gsecretary')->insert($data);
            return redirect('/gsecretarytalk')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী সংযুক্ত হয়েছে.....!!!!');
        }
        else{
            return redirect('/gsecretarytalk')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী সংযুক্ত হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    public function viewgsecretarytalk(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $speech=DB::table('speech_gsecretary')->where('id',$id)->first();
        return view('Admin.viewgsecretarytalk')->with('speeches',$speech)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function updategsecretary(Request $request,$id)
    {
        $data=array();

        $data['g_name']=$request->g_name;
        $data['g_address']=$request->g_address;
        $data['g_mobile']=$request->g_mobile;
        $data['g_talk']=$request->g_talk;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/gsecretary/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            
        DB::table('speech_gsecretary')->where('id',$id)->update($data);
            return redirect('/gsecretarytalk')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/gsecretarytalk')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    public function deletegsecretarytalk(Request $request, $id)
    {
        $delete=DB::table('speech_gsecretary')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/gsecretarytalk')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/gsecretarytalk')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Advisors Only >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function advisors()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $advisors=DB::table('advisors')->get();
        $count=DB::table('advisors')->get()->count();
    	return view('Admin.advisors')->with('advisor',$advisors)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function advisorsearchtable(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $applicant_id=$request->applicant_id;
        $advisors=DB::table('advisors')->where('applicant_id',$applicant_id)->first();
        $count=DB::table('advisors')->where('applicant_id',$applicant_id)->count();
        return view('Admin.advisors')->with('advisor',$advisors)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function addadvisors()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        return view('Admin.addadvisors')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function view_advisor(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $advisor=DB::table('advisors')->where('id',$id)->first();
        return view('Admin.view_advisor')->with('info',$advisor)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function add_advisor(Request $request)
    {
        $data=array();

        $data['applicant_id']=$request->applicant_id;
        $data['club']=$request->club;
        $data['a_name']=$request->a_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['image']=$request->image_text;
        $image=$request->file('image');
        if ($image) 
        {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/advisor/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            
        DB::table('advisors')->insert($data);
            return redirect('/advisors')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী সংশোধন করা হয়েছে.....!!!!');
        }
        elseif($image=$request->image_text)
        {
            DB::table('advisors')->insert($data);
            return redirect('/advisors')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী সংশোধন করা হয়েছে.....!!!!');
        }
        else
        {
            return redirect('/advisors')->with('flash_message_success','সংস্থার সাধারণ সম্পাদকের বানী সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    

    public function advisorsearch(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applicant_id=$request->applicant_id;
        $advisor=DB::table('applicant_details')->where('applicant_id',$applicant_id)->first();
        $count=DB::table('applicant_details')->where('applicant_id',$applicant_id)->count();
        return view('Admin.addadvisors')->with('info',$advisor)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function update_advisors(Request $request,$id)
    {
        $data=array();

        $data['club']=$request->club;
        $data['a_name']=$request->a_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['image']=$request->image;
        $update=DB::table('advisors')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/advisors')->with('flash_message_success','সংস্থার উপদেষ্টার বিবরণী সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/advisors')->with('flash_message_success','সংস্থার উপদেষ্টার বিবরণী সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    public function delete_advisor(Request $request, $id)
    {
        $delete=DB::table('advisors')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/advisors')->with('flash_message_success','সংস্থার উপদেষ্টার বিবরণী মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/advisors')->with('flash_message_success','সংস্থার উপদেষ্টার বিবরণী মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }


    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Committee Only >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function committees()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
    	return view('Admin.committees')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
// Advisor Committee............@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    public function advisorcommittees()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('advisor_committee')->get();
        $count=DB::table('advisor_committee')->get()->count();
        // echo $committee; die;
    	return view('Admin.advisorcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
       
    public function searchadvisorcommittee(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $applicant_id=$request->applicant_id;
        $advisors=DB::table('advisor_committee')->where('applicant_id',$applicant_id)->get();
        $count=DB::table('advisor_committee')->where('applicant_id',$applicant_id)->count();
        return view('Admin.advisorcommittees')->with('committees',$advisors)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function addadvisorcommittees(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $applicant_id=$request->applicant_id;
        $committee=DB::table('applicant_details')->where('applicant_id',$applicant_id)->first();
        $count=DB::table('applicant_details')->where('applicant_id',$applicant_id)->count();
    	return view('Admin.addadvisorcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function addadvisor_committees(Request $request)
    {
        $data=array();

        $data['applicant_id']=$request->applicant_id;
        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $insert=DB::table('advisor_committee')->insert($data);
        if ($insert) 
        {
            return redirect('/advisorcommittees')->with('flash_message_success','সংস্থার উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/advisorcommittees')->with('flash_message_success','সংস্থার উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function updateadvisorcommittee(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $committee=DB::table('advisor_committee')->where('id',$id)->first();
        return view('Admin.updateadvisorcommittee')->with('committees',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function update_advisorcommittees(Request $request,$id)
    {
        $data=array();

        $data['applicant_id']=$request->applicant_id;
        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $update=DB::table('advisor_committee')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/advisorcommittees')->with('flash_message_success','সংস্থার উপদেষ্টা কমিটির সদস্য সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/advisorcommittees')->with('flash_message_success','সংস্থার উপদেষ্টা কমিটির সদস্য সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function deleteadvisorcommittee(Request $request,$id)
    {
        $delete=DB::table('advisor_committee')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/advisors')->with('flash_message_success','সংস্থার উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/advisors')->with('flash_message_success','সংস্থার উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
// Relief Committee............@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    public function reliefcommittees()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $committee=DB::table('relief_committee')->get();
        $count=DB::table('relief_committee')->get()->count();
        return view('Admin.reliefcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    
    public function addreliefcommittees(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applicant_id=$request->applicant_id;
        $committee=DB::table('applicant_details')->where('applicant_id',$applicant_id)->first();
        $count=DB::table('applicant_details')->where('applicant_id',$applicant_id)->count();
        return view('Admin.addreliefcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }


    public function addrelief_committees(Request $request)
    {
        $data=array();

        $data['applicant_id']=$request->applicant_id;
        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['image']=$request->image;
        $insert=DB::table('relief_committee')->insert($data);
        if ($insert) 
        {
            return redirect('/reliefcommittees')->with('flash_message_success','সংস্থার ত্রান উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/reliefcommittees')->with('flash_message_success','সংস্থার ত্রান উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    
    public function searchreliefcommittee(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applicant_id=$request->applicant_id;
        $committee=DB::table('relief_committee')->where('applicant_id',$applicant_id)->get();
        $count=DB::table('relief_committee')->where('applicant_id',$applicant_id)->count();
        return view('Admin.reliefcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function updatereliefcommittee(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $committee=DB::table('relief_committee')->where('id',$id)->first();
        return view('Admin.updatereliefcommittee')->with('committees',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function update_reliefcommittee(Request $request,$id)
    {
        $data=array();

        $data['applicant_id']=$request->applicant_id;
        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['image']=$request->image;
        $update=DB::table('relief_committee')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/reliefcommittees')->with('flash_message_success','সংস্থার ত্রান উপদেষ্টা কমিটির সদস্য সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/reliefcommittees')->with('flash_message_success','সংস্থার ত্রান উপদেষ্টা কমিটির সদস্য সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function deletereliefcommittee(Request $request,$id)
    {
        $delete=DB::table('relief_committee')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/reliefcommittees')->with('flash_message_success','সংস্থার ত্রান উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/reliefcommittees')->with('flash_message_success','সংস্থার ত্রান উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
// Resource Committee............@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    public function resourcescommittees()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('resource_committee')->get();
        $count=DB::table('resource_committee')->get()->count();
        return view('Admin.resourcescommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function addresourcescommittees(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applicant_id=$request->applicant_id;
        $committee=DB::table('applicant_details')->where('applicant_id',$applicant_id)->first();
        $count=DB::table('applicant_details')->where('applicant_id',$applicant_id)->count();
        return view('Admin.addresourcescommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function searchresourcescommittee(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applicant_id=$request->applicant_id;
        $committee=DB::table('resource_committee')->where('applicant_id',$applicant_id)->get();
        $count=DB::table('resource_committee')->where('applicant_id',$applicant_id)->count();
        return view('Admin.resourcescommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function addresource_committees(Request $request)
    {
        $data=array();

        $data['applicant_id']=$request->applicant_id;
        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['image']=$request->image;
        $insert=DB::table('resource_committee')->insert($data);
        if ($insert) 
        {
            return redirect('/resourcescommittees')->with('flash_message_success','সংস্থার কর্ম সংস্থান উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/resourcescommittees')->with('flash_message_success','সংস্থার কর্ম সংস্থান উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function updateresorcecommittee(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $committee=DB::table('resource_committee')->where('id',$id)->first();
        return view('Admin.updateresorcecommittee')->with('committees',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function update_resorcecommittee(Request $request,$id)
    {
        $data=array();

        $data['applicant_id']=$request->applicant_id;
        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['image']=$request->image;
        $update=DB::table('resource_committee')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/resourcescommittees')->with('flash_message_success','সংস্থার কর্ম সংস্থান উপদেষ্টা কমিটির সদস্য সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/resourcescommittees')->with('flash_message_success','সংস্থার কর্ম সংস্থান উপদেষ্টা কমিটির সদস্য সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function deleteresorcecommittee(Request $request,$id)
    {
        $delete=DB::table('resource_committee')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/resourcescommittees')->with('flash_message_success','সংস্থার কর্ম সংস্থান উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/resourcescommittees')->with('flash_message_success','সংস্থার কর্ম সংস্থান উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

// Field Committee............@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    
    public function fieldcommittees()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('field_committee')->get();
        $count=DB::table('field_committee')->get()->count();
        return view('Admin.fieldcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    
    public function addfieldcommittees(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applicant_id=$request->applicant_id;
        $committee=DB::table('applicant_details')->where('applicant_id',$applicant_id)->first();
        $count=DB::table('applicant_details')->where('applicant_id',$applicant_id)->count();
        return view('Admin.addfieldcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    

    public function searchfieldcommittee(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applicant_id=$request->applicant_id;
        $committee=DB::table('field_committee')->where('applicant_id',$applicant_id)->get();
        $count=DB::table('field_committee')->where('applicant_id',$applicant_id)->count();
        return view('Admin.fieldcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
        public function addfield_committees(Request $request)
    {
        $data=array();

        $data['applicant_id']=$request->applicant_id;
        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['image']=$request->image;
        $insert=DB::table('field_committee')->insert($data);
        if ($insert) 
        {
            return redirect('/fieldcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/fieldcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function updatefieldcommittee(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $committee=DB::table('field_committee')->where('id',$id)->first();
        return view('Admin.updatefieldcommittee')->with('committees',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function update_fieldcommittee(Request $request,$id)
    {
        $data=array();

        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $update=DB::table('field_committee')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/fieldcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/fieldcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function deletefieldcommittee(Request $request,$id)
    {
        $delete=DB::table('field_committee')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/fieldcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/fieldcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

// Sub Committee............@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    
    public function subcommittees()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('sub_committee')->get();
        $count=DB::table('sub_committee')->get()->count();
        return view('Admin.subcommittees')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    
    public function addsubcommittees()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        return view('Admin.addsubcommittees')->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
        public function addsub_committees(Request $request)
    {
        $data=array();

        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $insert=DB::table('sub_committee')->insert($data);
        if ($insert) 
        {
            return redirect('/subcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/subcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function updatesubcommittee(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('sub_committee')->where('id',$id)->first();
        return view('Admin.updatesubcommittee')->with('committees',$committee)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function update_subcommittee(Request $request,$id)
    {
        $data=array();

        $data['committee_name']=$request->committee_name;
        $data['advisor_name']=$request->advisor_name;
        $data['rank']=$request->rank;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $update=DB::table('sub_committee')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/subcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/subcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function deletesubcommittee(Request $request,$id)
    {
        $delete=DB::table('sub_committee')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/subcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/subcommittees')->with('flash_message_success','সংস্থার মাঠ উপদেষ্টা কমিটির সদস্য মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

// famous Persons............@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

    public function addfamousperson()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        return view('Admin.addfamousperson')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function famous_persons()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $famous=DB::table('famous_persons')->get();
        $count=DB::table('famous_persons')->get()->count();
        return view('Admin.famous_persons')->with('persons',$famous)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function add_famousperson(Request $request)
    {
        $data=array();

        $data['name']=$request->name;
        $data['mother_name']=$request->mother_name;
        $data['father_name']=$request->father_name;
        $data['address']=$request->address;
        $data['work_place']=$request->work_place;
        $data['phone']=$request->phone;
        $data['rank']=$request->rank;
        $image=$request->file('image');
        if ($image) {
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/SuperAdmin/famousperson/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                DB::table('famous_persons')->insert($data);
                return redirect('/famous_persons')->with('flash_message_success','বিখ্যাত ব্যাক্তি বিষয়াদি সংযুক্ত করা হয়েছে.....!!!!');
            }
            else{
                return redirect('/famous_persons')->with('flash_message_success','বিখ্যাত ব্যাক্তি বিষয়াদি সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
            }
    }

    public function updatefamouspersons(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $famous=DB::table('famous_persons')->where('id',$id)->first();
        return view('Admin.updatefamouspersons')->with('persons',$famous)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    } 

    public function update_famouspersons(Request $request,$id)
    {
        $data=array();

        $data['name']=$request->name;
        $data['mother_name']=$request->mother_name;
        $data['father_name']=$request->father_name;
        $data['address']=$request->address;
        $data['work_place']=$request->work_place;
        $data['phone']=$request->phone;
        $data['rank']=$request->rank;
        $image=$request->file('image');
        if ($image) {
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/SuperAdmin/famousperson/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                DB::table('famous_persons')->where('id',$id)->update($data);
                return redirect('/famous_persons')->with('flash_message_success','বিখ্যাত ব্যাক্তি বিষয়াদি সংশোধন করা হয়েছে.....!!!!');
            }
            else{
                return redirect('/famous_persons')->with('flash_message_success','বিখ্যাত ব্যাক্তি বিষয়াদি সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
            }
    }

    public function deletefamouspersons(Request $request,$id)
    {
        $delete=DB::table('famous_persons')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/famous_persons')->with('flash_message_success','বিখ্যাত ব্যাক্তি বিষয়াদি মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/famous_persons')->with('flash_message_success','বিখ্যাত ব্যাক্তি বিষয়াদি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Services Only >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function servicelist()
    { 
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $services=DB::table('service_list')->get();
        $count=DB::table('service_list')->get()->count();
    	return view('Admin.servicelist')->with('service',$services)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function addservicelist()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
    	return view('Admin.addservicelist')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function add_service(Request $request)
    {
        $data=array();

        $data['service_name']=$request->service_name;
        $data['min_cost']=$request->min_cost;
        $insert=DB::table('service_list')->insert($data);
        if ($insert) 
        {
            return redirect('/servicelist')->with('flash_message_success','সেবা সমূহ সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/servicelist')->with('flash_message_success','সেবা সমূহ সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function updateservicelist(Request $request,$id)
    { 
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $services=DB::table('service_list')->where('id',$id)->first();
        return view('Admin.updateservicelist')->with('service',$services)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function update_service(Request $request,$id)
    {
        $data=array();

        $data['service_name']=$request->service_name;
        $data['min_cost']=$request->min_cost;
        $update=DB::table('service_list')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/servicelist')->with('flash_message_success','সেবা সমূহ সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/servicelist')->with('flash_message_success','সেবা সমূহ সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    public function deleteservicelist(Request $request,$id)
    { 
        $delete=DB::table('service_list')->where('id',$id)->delete();

        if($delete)
        {
            return redirect('/servicelist')->with('flash_message_success','সেবা মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/servicelist')->with('flash_message_success','সেবা মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Gallery Only >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// Photos............@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    public function g_photo()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $photos=DB::table('gallery_photo')->get();
        $count=DB::table('gallery_photo')->get()->count();
    	return view('Admin.g_photo')->with('photo',$photos)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function addg_photo()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        return view('Admin.addg_photo')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function add_photos(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $image=$request->file('image');
        if ($image) {
                //Addvertisement-1
                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $image_full_name=$image_name.'.'.$ext;
                $upload_path='public/SuperAdmin/galleryphoto/';
                $image_url=$upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['image']=$image_url;
                DB::table('gallery_photo')->insert($data);
                return redirect('/g_photo')->with('flash_message_success','গ্যালারীতে ছবি সংযুক্ত করা হয়েছে.....!!!!');
            }
            else{
                return redirect('/g_photo')->with('flash_message_success','গ্যালারীতে ছবি সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
            }
    }

    
    public function viewphoto(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $photos=DB::table('gallery_photo')->where('id',$id)->first();
        return view('Admin.viewphoto')->with('photo',$photos)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    
    public function deletephoto(Request $request,$id)
    {
        $delete=DB::table('gallery_photo')->where('id',$id)->delete();
        
        if($delete)
        {
            return redirect('/g_photo')->with('flash_message_success','গ্যালারীতে ছবিটি মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/g_photo')->with('flash_message_success','গ্যালারীতে ছবিটি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
   

   // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Schedule Only >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    public function schedule()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $schedule=DB::table('schedule_info')->get();
        $count=DB::table('schedule_info')->get()->count();
        return view('Admin.schedule')->with('info',$schedule)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    
    public function addschedule()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        return view('Admin.addschedule')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function add_schedule(Request $request)
    {
        $data=array();

        $data['date']=$request->date;
        $data['event']=$request->event;
        $data['co_ordinators']=$request->co_ordinators;
        $data['days']=$request->days;
        $data['place']=$request->place;
        $insert=DB::table('schedule_info')->insert($data);
        if ($insert) 
        {
            return redirect('/schedule')->with('flash_message_success','কার্যক্রম সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/schedule')->with('flash_message_success','কার্যক্রম সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
     
    public function updateschedule(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $schedule=DB::table('schedule_info')->where('id',$id)->first();
        return view('Admin.updateschedule')->with('info',$schedule)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function update_schedule(Request $request,$id)
    {
        $data=array();

        $data['date']=$request->date;
        $data['event']=$request->event;
        $data['co_ordinators']=$request->co_ordinators;
        $data['days']=$request->days;
        $data['place']=$request->place;
        $update=DB::table('schedule_info')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/schedule')->with('flash_message_success','কার্যক্রম সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/schedule')->with('flash_message_success','কার্যক্রম সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
     
    public function deleteschedule(Request $request,$id)
    {
        $delete=DB::table('schedule_info')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/schedule')->with('flash_message_success','কার্যক্রমটি মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/schedule')->with('flash_message_success','কার্যক্রমটি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

// <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< Schedule Only >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    public function currentstructure()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $dd="চলমান";
        $structure=DB::table('projects')->where('status',$dd)->orderByRaw('project_name DESC')->get();
        $count=DB::table('projects')->where('status',$dd)->get()->count();
        return view('Admin.currentstructure')->with('info',$structure)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function updatecurrentstructure(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $structure=DB::table('projects')->where('id',$id)->first();
        return view('Admin.updatecurrentstructure')->with('info',$structure)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function deletecurrentstructure(Request $request, $id)
    {
        $delete=DB::table('projects')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/currentstructure')->with('flash_message_success','চলমান কাঠামোটি মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/currentstructure')->with('flash_message_success','চলমান কাঠামোটি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    public function update_currentstructure(Request $request, $id)
    {
        $data=array();

        $data['project_name']=$request->project_name;
        $data['subproject_name']=$request->subproject_name;
        $data['min_cost']=$request->min_cost;
        $data['status']=$request->status;
        $data['address']=$request->address;
        $data['description']=$request->description;
        $update=DB::table('projects')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/currentstructure')->with('flash_message_success','কার্যক্রম সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/currentstructure')->with('flash_message_success','কার্যক্রম সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    

// Projects............@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    public function projects()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $projects=DB::table('projects')->get();
        $count=DB::table('projects')->get()->count();
        return view('Admin.projects')->with('project',$projects)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    
    public function addprojects()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $projects=DB::table('projects_name')->get();
        
        return view('Admin.addprojects')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('project',$projects);
    }
    
    public function updateproject(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $projects=DB::table('projects')->where('id',$id)->first();
        return view('Admin.updateproject')->with('project',$projects)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
  
    public function add_projects(Request $request)
    {
        $data=array();

        $data['project_name']=$request->project_name;
        $data['subproject_name']=$request->subproject_name;
        $data['min_cost']=$request->min_cost;
        $data['status']=$request->status;
        $insert=DB::table('projects')->insert($data);
        if ($insert) 
        {
            return redirect('/projects')->with('flash_message_success','প্রকল্প সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/projects')->with('flash_message_success','প্রকল্প সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function deleteproject(Request $request,$id)
    {
        $delete=DB::table('projects')->where('id',$id)->delete();$delete=DB::table('current_structure')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/projects')->with('flash_message_success','প্রকল্পটি মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/projects')->with('flash_message_success','প্রকল্পটি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function update_projects(Request $request,$id)
    {
        $data=array();
        $data['project_name']=$request->project_name;
        $data['subproject_name']=$request->subproject_name;
        $data['min_cost']=$request->min_cost;
        $data['status']=$request->status;
        $update=DB::table('projects')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/projects')->with('flash_message_success','প্রকল্প সংশোধন করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/projects')->with('flash_message_success','প্রকল্প সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function addprojectsonly()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $proj=DB::table('projects_name')->get();
        $count=DB::table('projects_name')->get()->count();
        return view('Admin.addprojectsonly')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('project',$proj)->with('value',$count);
    }

    public function updateprojectsonly(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $proj=DB::table('projects_name')->where('id',$id)->first();
        return view('Admin.updateprojectsonly')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('project',$proj);
    }

    public function add_projectsonly(Request $request)
    {
        $data=array();

        $data['project_name']=$request->project_name;
        $data['status']=$request->status;
        $insert=DB::table('projects_name')->insert($data);
        if ($insert) 
        {
            return redirect('/addprojectsonly')->with('flash_message_success','প্রকল্প সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/addprojectsonly')->with('flash_message_success','প্রকল্প সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function update_projectsonly(Request $request,$id)
    {
        $data=array();

        $data['project_name']=$request->project_name;
        $data['status']=$request->status;
        $insert=DB::table('projects_name')->where('id',$id)->update($data);
        if ($insert) 
        {
            return redirect('/addprojectsonly')->with('flash_message_success','প্রকল্প সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/addprojectsonly')->with('flash_message_success','প্রকল্প সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    public function deleteprojectsonly(Request $request,$id)
    {
        $delete=DB::table('projects_name')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/projects')->with('flash_message_success','প্রকল্পটি মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/projects')->with('flash_message_success','প্রকল্পটি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    public function video()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $videos=DB::table('gallery_video')->get();
        $count=DB::table('gallery_video')->get()->count();
    	return view('Admin.video')->with('vdo',$videos)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    
    public function addvideo()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $videos=DB::table('gallery_video')->get();
        $count=DB::table('gallery_video')->get()->count();
        return view('Admin.addvideo')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    // ->with('video',$videos)->with('value',$count)
    public function add_video(Request $request)
    {
        $data=array();
        $data['title']=$request->title;
        $data['video']=$request->video;
        $insert=DB::table('gallery_video')->insert($data);

        if($insert)
        {
            return redirect('/video')->with('flash_message_success','গ্যালারীতে ভিডিও সংযুক্ত করা হয়েছে.....!!!!');
        }
        else
        {
            return redirect('/video')->with('flash_message_success','গ্যালারীতে ভিডিও সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
        return view('Admin.addvideo');
    }


    public function deletevideo(Request $request,$id)
    {
        $delete=DB::table('gallery_video')->where('id',$id)->delete();

        if($delete)
        {
            return redirect('/video')->with('flash_message_success','গ্যালারীতে ভিডিও মুছে ফেলা হয়েছে.....!!!!');
        }
        else
        {
            return redirect('/video')->with('flash_message_success','গ্যালারীতে ভিডিও মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    
    
    public function contacts()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $massages=DB::table('contact_details')
        ->orderByRaw('updated_at - created_at DESC')
        ->get();
        $count=DB::table('contact_details')->get()->count();
        return view('Admin.contacts')->with('msg',$massages)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function document()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        $documents=DB::table('documents')
        ->orderByRaw('updated_at - created_at DESC')
        ->get();
        $count=DB::table('documents')->get()->count();
        return view('Admin.document')->with('files',$documents)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    
    public function adddocument()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        return view('Admin.adddocument')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    
    public function deletedocument()
    {
        $delete=DB::table('documents')->where('id',$id)->delete();
        if($delete)
        {
            return redirect('/document')->with('flash_message_success','ডকুমেন্টটি মুছে ফেলা হয়েছে.....!!!!');
        }
        else{
            return redirect('/document')->with('flash_message_success','ডকুমেন্টটি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    
    public function applications()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applications=DB::table('applicant_details')->get();
        $count=DB::table('applicant_details')->get()->count();
    	return view('Admin.applications')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('apps',$applications)->with('value',$count);
    }

    public function updateapplications(Request $request, $a_id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $application=DB::table('applicant_details')->where('a_id',$a_id)->first();
        return view('Admin.updateapplications')->with('appls' ,$application)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }    

    public function search_applicant(Request $request)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $applicant_id=$request->applicant_id;
        $application=DB::table('applicant_details')->where('applicant_id',$applicant_id)->get();
        $count=DB::table('applicant_details')->where('applicant_id',$applicant_id)->count();
        return view('Admin.applications')->with('apps' ,$application)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }  

    public function responsesmassage(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $contact=DB::table('contact_details')->where('id',$id)->first();
        return view('Admin.responsesmassage')->with('cont' ,$contact)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function response_contact(Request $request,$id)
    {
        $data=array();

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['heading']=$request->heading;
        $data['massage']=$request->massage;
        $data['responses']=$request->responses;
        $update=DB::table('contact_details')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/contacts')->with('flash_message_success','আপনার উত্তর পাঠানো হয়েছে, খুব শীঘ্রই আপনার সাথে যোগাযোগ করা হবে.....!!!!');
        }
        else{
            return redirect('/contacts')->with('flash_message_success','আপনার উত্তর পাঠানো হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    public function delete_contact(Request $request,$id)
    {
        $deleted=DB::table('contact_details')->where('id',$id)->delete($data);
        if ($deleted) 
        {
            return redirect('/contacts')->with('flash_message_success','মেসেজটি মুছে ফেলা হয়েছে, খুব শীঘ্রই আপনার সাথে যোগাযোগ করা হবে.....!!!!');
        }
        else{
            return redirect('/contacts')->with('flash_message_success','মেসেজটি মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
     
    function applsrove_applslication(Request $request,$a_id)
    {
        $data=array();

        $data['role_id']=$request->role_id;
        $data['applicant_id']=$request->applicant_id;
        $data['mobile']=$request->mobile;
        $data['c_house']=$request->c_house;
        $data['c_village']=$request->c_village;
        $data['c_postoffice']=$request->c_postoffice;
        $data['c_upzilla']=$request->c_upzilla;
        $data['c_zilla']=$request->c_zilla;
        $data['c_division']=$request->c_division;
        $data['status']=$request->status;

        $info=array();
        $info['role_id']=$request->role_id;
        $info['name']=$request->name;
        $info['applicant_id']=$request->applicant_id;
        $info['email']=$request->email;
        $info['password']=bcrypt($request->password);
        $email=$request->email;
        $count=DB::table('users')->where('email',$email)->count();
        $approval=$request->status;
            if ($approval=="অনুমোদিত") 
            {
                if ($count=1) 
                {
                    $update=DB::table('applicant_details')->where('a_id',$a_id)->update($data);
                    $update1=DB::table('users')->where('email',$email)->update($info);
                    if($update && $update1)
                    {
                        return redirect('/applications')->with('flash_message_success','রেজিষ্ট্রেশন ফরম অনুমোদন ও ব্যবহারকারীর ধরন সংশোধন করা হয়েছে.....!!!!');
                    }
                    else
                    {
                        return redirect('/applications')->with('flash_message_success','রেজিষ্ট্রেশন ফরম অনুমোদন ও ব্যবহারকারীর ধরন সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
                    }
                }
                else
                {
                    $insert=DB::table('users')->insert($info);
                    $update=DB::table('applicant_details')->where('a_id',$a_id)->update($data);
                    if($update)
                    {
                        return redirect('/applications')->with('flash_message_success','রেজিষ্ট্রেশন ফরম অনুমোদন ও ব্যবহারকারীর ধরন সংযুক্ত হয়েছে.....!!!!');
                    }
                    else
                    {
                        return redirect('/applications')->with('flash_message_success','রেজিষ্ট্রেশন ফরম অনুমোদন ও ব্যবহারকারীর ধরন সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
                    }
                }
            }
            else
            {
                return redirect('/applications')->with('flash_message_success','রেজিষ্ট্রেশন ফরম অনুমোদন ও ব্যবহারকারীর ধরন সংযুক্ত বা সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
            }
        
    }

    // 
    public function news()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $new=DB::table('news_details')->get();
        $count=DB::table('news_details')->get()->count();
        return view('Admin.news')->with('news',$new)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function view_news(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $new=DB::table('news_details')->where('id',$id)->first();
        return view('Admin.view_news')->with('news',$new)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function news_add(Request $request)
    {
        $data=array();

        $data['title']=$request->title;
        $data['news']=$request->news;
        $insert=DB::table('news_details')->insert($data);

        if($insert)
        {
            return redirect('/news')->with('flash_message_success','সংবাদ সংযুক্ত করা হয়েছে.....!!!!');
        }
        else
        {
            return redirect('/news')->with('flash_message_success','সংবাদ সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    public function news_update(Request $request,$id)
    {
        $data=array();

        $data['title']=$request->title;
        $data['news']=$request->news;
        $update=DB::table('news_details')->where('id',$id)->update($data);
 
        if($update)
        {
            return redirect('/news')->with('flash_message_success','সংবাদ সংশোধন করা হয়েছে.....!!!!');
        }
        else
        {
            return redirect('/news')->with('flash_message_success','সংবাদ সংশোধন করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    public function delete_news(Request $request, $id)
    {
        $delete=DB::table('news_details')->where('id',$id)->delete();

        if($delete)
        {
            return redirect('/news')->with('flash_message_success','সংবাদ মুছে ফেলা হয়েছে.....!!!!');
        }
        else
        {
            return redirect('/news')->with('flash_message_success','সংবাদ মুছে ফেলা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
}
