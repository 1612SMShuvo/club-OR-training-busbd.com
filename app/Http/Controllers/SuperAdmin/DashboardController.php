<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
use DB;

class DashboardController extends Controller
{
    public function superadmin_dashboard()
    {
    	return view('SuperAdmin.superadmin_dashboard');
    }

    // Hotline Address Only......................................................................................
    public function hotline()
    {
        $hotl=DB::table('hotline_add')->get();
        $count=DB::table('hotline_add')->get()->count();
        return view('SuperAdmin.hotline')->with('hotline',$hotl)->with('value',$count);
    }
    public function addhotline(Request $request)
    {
        $data=array();
        $data['designation']=$request->designation;
        $data['t_phone']=$request->t_phone;
        $data['m_phone']=$request->m_phone;
        $data['email']=$request->email;
        $insert=DB::table('hotline_add')->insert($data);
        if ($insert) {
            return redirect('/hotline')->with('flash_message_success','Hotline Addresses has been added successfully.....!!!!');
        }
        else{
            return redirect('/hotline')->with('flash_message_success','Hotline Addresses can not be added successfully.....!!!!');
        }
    }
    public function update_hotline(Request $request,$id)
    {
        $hotl=DB::table('hotline_add')->where('id',$id)->first();
        return view('SuperAdmin.update_hotline')->with('hotline',$hotl);
    }
    public function update_hot_line(Request $request,$id)
    {
        $data=array();
        $data['designation']=$request->designation;
        $data['t_phone']=$request->t_phone;
        $data['m_phone']=$request->m_phone;
        $insert=DB::table('hotline_add')->where('id',$id)->update($data);
        if ($insert) {
            return redirect('/hotline')->with('flash_message_success','Hotline Addresses has been updated successfully.....!!!!');
        }
        else{
            return redirect('/hotline')->with('flash_message_success','Hotline Addresses can not be updated successfully.....!!!!');
        }
    }

    public function delete_hotline(Request $request,$id)
    {
        $delete=DB::table('hotline_add')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/hotline')->with('flash_message_success','Hotline Addresses has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/hotline')->with('flash_message_success','Hotline Addresses can not be deleted successfully.....!!!!');
        }
    }

    // Addvertisement services Only......................................................................................
    public function addvertise()
    {
        $add=DB::table('advertisement')->get();
        $count=DB::table('advertisement')->get()->count();
    	return view('SuperAdmin.addvertise')->with('addvertise',$add)->with('value',$count);
    }
    public function addaddvertise(Request $request)
    {
        $data =array();
        $image1=$request->file('image1');
        $image2=$request->file('image2');
        $image3=$request->file('image3');
        if ($image1 && $image2 && $image3) {
            //Addvertisement-1
            $image_name1=hexdec(uniqid());
            $ext1=strtolower($image1->getClientOriginalExtension());
            $image_full_name1=$image_name1.'.'.$ext1;
            $upload_path1='public/SuperAdmin/addvertisement/';
            $image_url1=$upload_path1.$image_full_name1;
            $success1=$image1->move($upload_path1,$image_full_name1);
            $data['image1']=$image_url1;

            //Addvertisement-2
            $image_name2=hexdec(uniqid());
            $ext2=strtolower($image2->getClientOriginalExtension());
            $image_full_name2=$image_name2.'.'.$ext2;
            $upload_path2='public/SuperAdmin/addvertisement/';
            $image_url2=$upload_path2.$image_full_name2;
            $success2=$image2->move($upload_path2,$image_full_name2);
            $data['image2']=$image_url2;

            //Addvertisement-3
            $image_name3=hexdec(uniqid());
            $ext3=strtolower($image3->getClientOriginalExtension());
            $image_full_name3=$image_name3.'.'.$ext3;
            $upload_path3='public/SuperAdmin/addvertisement/';
            $image_url3=$upload_path3.$image_full_name3;
            $success3=$image3->move($upload_path3,$image_full_name3);
            $data['image3']=$image_url3;
            
            DB::table('advertisement')->insert($data);
            return redirect('/addvertise')->with('flash_message_success','Banner has been added as addvertisement.....!!!!');
        }
        else{
            return redirect('/addvertise')->with('flash_message_success','Banner can not be added as addvertisement, please check.....!!!!');
        }
        return view('SuperAdmin.addaddvertise');
    }
    public function update_addvertise(Request $request, $id)
    {
        $add=DB::table('advertisement')->where('id',$id)->first();
        return view('SuperAdmin.update_addvertise')->with('addvertise',$add);
    }
    public function update_add(Request $request, $id)
    {
        $data =array();
        $image1=$request->file('image1');
        $image2=$request->file('image2');
        $image3=$request->file('image3');
        if ($image1 && $image2 && $image3) {
            //Addvertisement-1
            $image_name1=hexdec(uniqid());
            $ext1=strtolower($image1->getClientOriginalExtension());
            $image_full_name1=$image_name1.'.'.$ext1;
            $upload_path1='public/SuperAdmin/addvertisement/';
            $image_url1=$upload_path1.$image_full_name1;
            $success1=$image1->move($upload_path1,$image_full_name1);
            $data['image1']=$image_url1;

            //Addvertisement-2
            $image_name2=hexdec(uniqid());
            $ext2=strtolower($image2->getClientOriginalExtension());
            $image_full_name2=$image_name2.'.'.$ext2;
            $upload_path2='public/SuperAdmin/addvertisement/';
            $image_url2=$upload_path2.$image_full_name2;
            $success2=$image2->move($upload_path2,$image_full_name2);
            $data['image2']=$image_url2;

            //Addvertisement-3
            $image_name3=hexdec(uniqid());
            $ext3=strtolower($image3->getClientOriginalExtension());
            $image_full_name3=$image_name3.'.'.$ext3;
            $upload_path3='public/SuperAdmin/addvertisement/';
            $image_url3=$upload_path3.$image_full_name3;
            $success3=$image3->move($upload_path3,$image_full_name3);
            $data['image3']=$image_url3;

            DB::table('advertisement')->where('id',$id)->update($data);
            return redirect('/addvertise')->with('flash_message_success','Banner has been updated as addvertisement.....!!!!');
        }
        else{
            return redirect('/addvertise')->with('flash_message_success','Banner can not updated as addvertisement.....!!!!');
        }
    }
    public function delete_addvertise(Request $request,$id)
    {
        $delete=DB::table('advertisement')->where('id',$id)->delete();
        if($delete){
            return redirect('/addvertise')->with('flash_message_success','Banner has been deleted.....!!!!');
        }
        else{
            return redirect('/addvertise')->with('flash_message_success','Banner can not be deleted.....!!!!');
        }
    }

    // IT services Only......................................................................................
    public function additservice()
    {
        $services=DB::table('it_service')->get();
        $count=DB::table('it_service')->get()->count();
        return view('SuperAdmin.additservice')->with('service',$services)->with('value',$count);
    }
    public function additservices(Request $request)
    {
        $data=array();
        $data['itservice']=$request->itservice;
        $data['serv_description']=$request->serv_description;
        $data['cost']=$request->cost;
        $insert=DB::table('it_service')->insert($data);
        if ($insert) {
            return redirect('/additservice')->with('flash_message_success','IT services has been added successfully.....!!!!');
        }
        else{
            return redirect('/additservice')->with('flash_message_success','IT services can not be added successfully.....!!!!');
        }
    }
    public function update_itservice(Request $request, $id)
    {
        $services=DB::table('it_service')->where('id',$id)->first();
        return view('SuperAdmin.update_itservice')->with('service', $services);
    }
    public function update_it_service(Request $request, $id)
    {
        $data=array();
        $data['itservice']=$request->itservice;
        $data['serv_description']=$request->serv_description;
        $data['cost']=$request->cost;
        $update=DB::table('it_service')->where('id',$id)->update($data);
        if ($update) {
            return redirect('/additservice')->with('flash_message_success','IT services has been updated successfully.....!!!!');
        }
        else{
            return redirect('/additservice')->with('flash_message_success','IT services can not be updated successfully.....!!!!');
        }
    }
    public function delete_itservice(Request $request, $id)
    {
        $delete=DB::table('it_service')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/additservice')->with('flash_message_success','IT services has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/additservice')->with('flash_message_success','IT services can not be deleted successfully.....!!!!');
        }
    }

    // Company Address Only......................................................................................
    public function address()
    {
        return view('SuperAdmin.address');
    }

    public function add_address(Request $request)
    {
        $data=array();
        $data['company']=$request->company;
        $data['house']=$request->house;
        $data['road']=$request->road;
        $data['area']=$request->area;
        $data['city']=$request->city;
        $data['zip']=$request->zip;
        $data['division']=$request->division;

        $insert=DB::table('company_address')->insert($data);

        if ($insert) {
            return redirect('/viewaddress')->with('flash_message_success','Company Address has been added successfully.....!!!!');
        }
        else{
            return redirect('/viewaddress')->with('flash_message_success','Company Address can not be added successfully.....!!!!');
        }
    }
    public function viewaddress()
    {        
        $address=DB::table('company_address')->get();
        $count=DB::table('company_address')->get()->count();
        return view('SuperAdmin.viewaddress')->with('companyaddress',$address)->with('value',$count);
    }
    public function update_address(Request $request,$id)
    {
        $address=DB::table('company_address')->where('id',$id)->first();
        return view('SuperAdmin.update_address')->with('companyaddress',$address);
    }
    public function updateaddress(Request $request,$id)
    {
        $data=array();
        $data['company']=$request->company;
        $data['house']=$request->house;
        $data['road']=$request->road;
        $data['area']=$request->area;
        $data['city']=$request->city;
        $data['zip']=$request->zip;
        $data['division']=$request->division;

        $update=DB::table('company_address')->where('id',$id)->update($data);

        if ($update) {
            return redirect('/viewaddress')->with('flash_message_success','Company Address has been updated successfully.....!!!!');
        }
        else{
            return redirect('/viewaddress')->with('flash_message_success','Company Address can not be updated successfully.....!!!!');
        }
    }
    public function delete_address(Request $request,$id)
    {
        $delete=DB::table('company_address')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/viewaddress')->with('flash_message_success','Company Address has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/viewaddress')->with('flash_message_success','Company Address can not be deleted successfully.....!!!!');
        }
    }
    

    // Footers Only......................................................................................
    public function footer()
    {
        $map=DB::table('footer_map')->get();
        $no=DB::table('emergency_no')->get();
        $count2=DB::table('emergency_no')->get()->count();
        $count=DB::table('footer_map')->get()->count();
        // echo $no; die;
        return view('SuperAdmin.footer')->with('mapadd',$map)->with('value',$count)->with('kk',$no)->with('val',$count2);
    }

    public function addmap(Request $request)
    {
        $data['company']=$request->company;
        $data['map_url']=$request->map_url;
        $image=$request->file('image');
        if ($image) {
            //Addvertisement-1
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/map/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('footer_map')->insert($data);
            return redirect('/footer')->with('flash_message_success','Map has been added as footer.....!!!!');
        }
        else{
            return redirect('/footer')->with('flash_message_success','Map can not be added as footer, please check.....!!!!');
        }
    }
    public function update_map(Request $request,$id)
    {
        $map=DB::table('footer_map')->where('id',$id)->first();
    	return view('SuperAdmin.update_map')->with('info',$map);
    }

    public function updatemap(Request $request,$id)
    {
        $data['company']=$request->company;
        $data['map_url']=$request->map_url;
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/addvertisement/';
            $image_url=$upload_path.$image_full_name;
            $success3=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
        }
        $update=DB::table('footer_map')->where('id',$id)->update($data);
        if($update){
                return redirect('/footer')->with('flash_message_success','Map has been updated as footer.....!!!!');
            }
        else{
            return redirect('/footer')->with('flash_message_success','Map can not be updated as footer, please check.....!!!!');
        }
    }
    public function delete_map(Request $request, $id)
    {
        $delete=DB::table('footer_map')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/footer')->with('flash_message_success','Map has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/footer')->with('flash_message_success','Map can not be deleted successfully.....!!!!');
        }
    }

    public function add_emr_num(Request $request)
    {
        
        $data=array();
        $data['name']=$request->name;
        $data['number']=$request->number;
        $update=DB::table('emergency_no')->insert($data);
        if($update){
                return redirect('/footer')->with('flash_message_success','Emergency Numbers has been added successfully.....!!!!');
            }
        else{
            return redirect('/footer')->with('flash_message_success','Emergency Numbers can not be added, please check.....!!!!');
        }
    }


    public function delete_emr_num(Request $request, $id)
    {
        $delete=DB::table('emergency_no')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/footer')->with('flash_message_success','Emergency Numbers has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/footer')->with('flash_message_success','Emergency Numbers can not be deleted successfully.....!!!!');
        }
    }


    // Menus Only......................................................................................
    public function menu()
    {
        $button=DB::table('menu_bar')->get();
        $count=DB::table('menu_bar')->get()->count();
        return view('SuperAdmin.menu')->with('menu',$button)->with('value',$count);
    }
    public function addmenu(Request $request)
    {
        $data=array();
        $data['menu_name']=$request->menu_name;
        $data['menu_url']=$request->menu_url;
        $insert=DB::table('menu_bar')->insert($data);
        if ($insert) 
        {
            return redirect('/menu')->with('flash_message_success','Button has been added as footer.....!!!!');
        }
        else{
            return redirect('/menu')->with('flash_message_success','Button can not be added as footer, please check.....!!!!');
        }
    }
    public function update_menu(Request $request, $id)
    {
        $button=DB::table('menu_bar')->where('id',$id)->first();
        return view('SuperAdmin.update_menu')->with('menu',$button);
    }
    public function updatemenu(Request $request, $id)
    {   
        $data=array();
        $data['menu_name']=$request->menu_name;
        $data['menu_url']=$request->menu_url;
        $update=DB::table('menu_bar')->where('id',$id)->update($data);
        if ($update) 
        {
            return redirect('/menu')->with('flash_message_success','Button has been updated as footer.....!!!!');
        }
        else{
            return redirect('/menu')->with('flash_message_success','Button can not be updated as footer, please check.....!!!!');
        }
    }

    public function delete_menu(Request $request, $id)
    {
        $button=DB::table('menu_bar')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/menu')->with('flash_message_success','Menu has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/menu')->with('flash_message_success','Menu can not be deleted successfully.....!!!!');
        }
    }


    // Slide Photo Only......................................................................................
    public function photo()
    {
        $slides=DB::table('slide_photo')->get();
        $count=DB::table('slide_photo')->get()->count();
        return view('SuperAdmin.photo')->with('slide',$slides)->with('value', $count);
    }    

    public function addphoto(Request $request)
    {
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/slidephoto/';
            $image_url=$upload_path.$image_full_name;
            $success3=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
        }
        $update=DB::table('slide_photo')->insert($data);
        if($update){
                return redirect('/photo')->with('flash_message_success','Slide Photo has been added successfully.....!!!!');
            }
        else{
            return redirect('/photo')->with('flash_message_success','Slide Photo can not be added, please check.....!!!!');
        }
    }

    public function update_photo(Request $request,$id)
    {
        $slides=DB::table('slide_photo')->where('id',$id)->first();
        return view('SuperAdmin.update_photo')->with('slide',$slides);
    } 

    public function updatephoto(Request $request,$id)
    {
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/slidephoto/';
            $image_url=$upload_path.$image_full_name;
            $success3=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
        }
        $update=DB::table('slide_photo')->where('id',$id)->update($data);
        if($update){
                return redirect('/photo')->with('flash_message_success','Slide Photo has been updated successfully.....!!!!');
            }
        else{
            return redirect('/photo')->with('flash_message_success','Slide Photo can not be updated, please check.....!!!!');
        }
    }

    public function delete_photo(Request $request,$id)
    {
        $delete=DB::table('slide_photo')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/photo')->with('flash_message_success','Slide Photo has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/photo')->with('flash_message_success','Slide Photo can not be deleted successfully.....!!!!');
        }
    } 

    // Logo & Icon Photo Only......................................................................................
    public function logo()
    {
        $logo=DB::table('logos')->get();
        $count1=DB::table('logos')->get()->count();
        $icon=DB::table('icons')->get();
        $count2=DB::table('icons')->get()->count();
    	return view('SuperAdmin.logo')->with('logos',$logo)->with('icons',$icon)->with('value1',$count1)->with('value2',$count2);
    }

    public function addlogo(Request $request)
    {
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/logo/';
            $image_url=$upload_path.$image_full_name;
            $success3=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
        }
        $update=DB::table('logos')->insert($data);
        if($update){
                return redirect('/logo')->with('flash_message_success','Logo has been added successfully.....!!!!');
            }
        else{
            return redirect('/logo')->with('flash_message_success','Logo can not be added, please check.....!!!!');
        }
    }

    public function addicon(Request $request)
    {
        $image=$request->file('image');
        if ($image) {
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/SuperAdmin/logo/';
            $image_url=$upload_path.$image_full_name;
            $success3=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
        }
        $update=DB::table('icons')->insert($data);
        if($update){
                return redirect('/logo')->with('flash_message_success','Icon has been added successfully.....!!!!');
            }
        else{
            return redirect('/logo')->with('flash_message_success','Icon can not be added, please check.....!!!!');
        }
    }

    public function delete_logo(Request $request, $id)
    {
        $delete=DB::table('logos')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/logo')->with('flash_message_success','Logo has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/logo')->with('flash_message_success','Logo can not be deleted successfully.....!!!!');
        }

    }

    public function delete_icon(Request $request, $id)
    {
        $delete=DB::table('icons')->where('id',$id)->delete();
        if ($delete) {
            return redirect('/logo')->with('flash_message_success','Logo has been deleted successfully.....!!!!');
        }
        else{
            return redirect('/logo')->with('flash_message_success','Logo can not be deleted successfully.....!!!!');
        }
    }
}
