<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Files;
use DB;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.addvideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array();
        $data['title']=$request->title;
        $video=$request->file('video');
        if($video)
        { 
                $video_name=hexdec(uniqid());
                $ext=strtolower($video->getClientOriginalExtension());
                $video_full_name=$video_name.'.'.$ext;
                $upload_path='public/SuperAdmin/galleryvideo/';
                $video_url=$upload_path.$video_full_name;
                $success=$video->move($upload_path,$video_full_name);
                $data['video']=$video_url;
        }
        $insert=DB::table('gallery_video')->insert($data);
        if ($insert) 
        {
            return redirect('/video')->with('flash_message_success','ভিডিও সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/video')->with('flash_message_success','ভিডিও সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }

    public function add_document(Request $request)
    {
        $data=array();
        $data['title']=$request->title;
        $file=$request->file('file');
        if($file)
        { 
                $file_name=hexdec(uniqid());
                $ext=strtolower($file->getClientOriginalExtension());
                $file_full_name=$file_name.'.'.$ext;
                $upload_path='public/SuperAdmin/galleryfile/';
                $file_url=$upload_path.$file_full_name;
                $success=$file->move($upload_path,$file_full_name);
                $data['file']=$file_url;
        }
        $insert=DB::table('documents')->insert($data);
        if ($insert) 
        {
            return redirect('/document')->with('flash_message_success','ডকিমেন্ট সংযুক্ত করা হয়েছে.....!!!!');
        }
        else{
            return redirect('/document')->with('flash_message_success','ডকিমেন্ট সংযুক্ত করা হয় নাই,দয়া করে আবার চেষ্টা করুন.....!!!!');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function download($id)
    // {
    //     return
    // }
    public function show($id)
    {
       
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $documents=DB::table('documents')
        ->where('id',$id)
        ->first();
        return view('Admin.detailsdocument')->with('files',$documents)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }
    public function showdocuments($id)
    {
       
        $address=DB::table('company_address')->first();
        $hotline=DB::table('hotline_add')->first();
        $icon=DB::table('icons')->first();
        $logo=DB::table('logos')->first();
        $map=DB::table('footer_map')->first();
        $documents=DB::table('documents')
        ->where('id',$id)
        ->first();
        // echo $documents->title; die;
        return view('Member.viewdocuments')->with('docmnt',$documents)->with('icons',$icon)->with('logos',$logo)->with('addresss',$address)->with('hotlines',$hotline)->with('maps',$map);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
