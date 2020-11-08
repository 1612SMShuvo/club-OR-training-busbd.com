<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home_content()
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
        
        return view('Member.home_content')->with('icons',$icon)->with('icons',$icon)->with('logos',$logo)->with('slides',$slide)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('abouts',$about)->with('adds',$add)->with('chairpersons',$chairperson)->with('gsecretarys',$gsecretary)->with('itservices',$itservice)->with('nss',$news)->with('adv1',$advisors1)->with('adv2',$advisors2)->with('com1',$committee1)->with('com2',$committee2)->with('num',$no);
    }
    public function about_org()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $aboutorga=DB::table('about_org')->get();
        $count=DB::table('about_org')->get()->count();
        return view('Member.about_org')->with('about',$aboutorga)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function viewnews(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $new=DB::table('goals')->where('id',$id)->first();

        return view('Member.viewnews')->with('news',$new)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function goal_org()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $goal=DB::table('goals')->get();
        $count=DB::table('goals')->get()->count();
        return view('Member.goal_org')->with('about',$goal)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function speak_chairperson()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $speech=DB::table('speech_chairperson')->get();
        $count=DB::table('speech_chairperson')->get()->count();
        return view('Member.speak_chairperson')->with('speeches',$speech)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function speak_gsecretary()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $speech=DB::table('speech_gsecretary')->get();
        $count=DB::table('speech_gsecretary')->get()->count();
        return view('Member.speak_gsecretary')->with('speeches',$speech)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function advisor()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $advisors=DB::table('advisors')->get();
        $count=DB::table('advisors')->get()->count();
        return view('Member.advisor')->with('advisor',$advisors)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function viewadvisor(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $advisors=DB::table('advisors')->where('id',$id)->first();
    	return view('Member.viewadvisor')->with('advisor',$advisors)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function committee()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
    	return view('Member.committee')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function advisorcommittee()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('advisor_committee')->get();
        $count=DB::table('advisor_committee')->get()->count();
        $dd="Head";
        $chief=DB::table('advisor_committee')->where('rank',$dd)->first();
        return view('Member.advisorcommittee')->with('committees',$committee)->with('value',$count)->with('prime',$chief)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function viewadvisorcommittee(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('advisor_committee')->where('id',$id)->first();
        return view('Member.viewadvisorcommittee')->with('info',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function reliefcommittee()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('relief_committee')->get();
        $count=DB::table('relief_committee')->get()->count();
        $dd="Head";
        $chief=DB::table('relief_committee')->where('rank',$dd)->first();
        return view('Member.reliefcommittee')->with('committees',$committee)->with('value',$count)->with('prime',$chief)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function viewreliefcommittee(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('relief_committee')->where('id',$id)->first();
        return view('Member.viewreliefcommittee')->with('info',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function resourcescommittee()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('resource_committee')->get();
        $count=DB::table('resource_committee')->get()->count();
        $dd="Head";
        $chief=DB::table('resource_committee')->where('rank',$dd)->first();
        return view('Member.resourcescommittee')->with('committees',$committee)->with('value',$count)->with('prime',$chief)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function viewresourcescommittee(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('resource_committee')->where('id',$id)->first();
        return view('Member.viewresourcescommittee')->with('info',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function fieldcommittee()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('field_committee')->get();
        $count=DB::table('field_committee')->get()->count();
        $dd="Head";
        $chief=DB::table('field_committee')->where('rank',$dd)->first();
        return view('Member.fieldcommittee')->with('committees',$committee)->with('value',$count)->with('prime',$chief)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function viewfieldcommittee(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('field_committee')->where('id',$id)->first();
        return view('Member.viewfieldcommittee')->with('info',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    // public function viewcommittee()
    // {
    // 	return view('Member.viewcommittee');
    // }
    public function subcommittee()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('sub_committee')->get();
        $count=DB::table('sub_committee')->get()->count();
        $dd="Head";
        $chief=DB::table('sub_committee')->where('rank',$dd)->first();
        return view('Member.subcommittee')->with('committees',$committee)->with('value',$count)->with('prime',$chief)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function viewsubcommittee(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $committee=DB::table('sub_committee')->where('id',$id)->first();
        return view('Member.viewsubcommittee')->with('info',$committee)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function services()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $services=DB::table('service_list')->get();
        $count=DB::table('service_list')->get()->count();
        return view('Member.services')->with('service',$services)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function project()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $projects=DB::table('projects')->get();
        $count=DB::table('projects')->get()->count();
        return view('Member.project')->with('project',$projects)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function viewproject(Request $request, $id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $projects=DB::table('projects')->where('id',$id)->first();
    	return view('Member.viewproject')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('proj' ,$projects);
    }

    public function photos()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $photos=DB::table('gallery_photo')->get();
        $count=DB::table('gallery_photo')->get()->count();
        return view('Member.photos')->with('photo',$photos)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function viewphotos(Request $request,$id)
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $photos=DB::table('gallery_photo')->where('id',$id)->first();
    	return view('Member.viewphotos')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('pp',$photos);
    }
    public function calender()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $schedule=DB::table('schedule_info')->get();
        $count=DB::table('schedule_info')->get()->count();
        return view('Member.calender')->with('info',$schedule)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function contact()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        return view('Member.contact')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function add_contact(Request $request)
    {
        $data=array();

        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['heading']=$request->heading;
        $data['massage']=$request->massage;
        $insert=DB::table('contact_details')->insert($data);
        if ($insert) 
        {
            return redirect('/contact')->with('flash_message_success','আপনার বার্তা পাঠানো হয়েছে, খুব শীঘ্রই আপনার সাথে যোগাযোগ করা হবে.....!!!!');
        }
        else{
            return redirect('/contact')->with('flash_message_success','আপনার বার্তা পাঠানো হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
        return view('Member.contact');
    }

    public function documents()
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
        return view('Member.documents')->with('files',$documents)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function viewdocuments()
    {   
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
        return view('Member.viewdocuments')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    public function currentstructures()
    { 
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $dd="চলমান";
        $infor=DB::table('projects')->where('status',$dd)->orderByRaw('project_name DESC')->get();
        $count=DB::table('projects')->where('status',$dd)->get()->count();
        return view('Member.currentstructures')->with('info',$infor)->with('value',$count)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function currentstructure(Request $request,$id)
    { 
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $infor=DB::table('projects')->where('id',$id)->first();
        return view('Member.currentstructure')->with('info',$infor)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function application()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        return view('Member.application')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

        
    public function videos()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();

        $videos=DB::table('gallery_video')->get();
        $count=DB::table('gallery_video')->get()->count();
    	return view('Member.videos')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map)->with('vdo',$videos)->with('value',$count);
    }
    public function viewvideos()
    {
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        
    	return view('Member.viewvideos')->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    // 
}
