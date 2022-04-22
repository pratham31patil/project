<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;
class userscontroller extends Controller
{
    //
    /*function getdata(Request $req)
    {
        return $req->input();
    }*/
   /* function index(Request $req)
    {
     return $req->file('ppt')->store('ppt_files');
    }*/
    function adddata(Request $request)
    {
        $User=new User;
        $User->Name=$request->name;
        $User->Enroll_no=$request->enroll;
        $User->Email=$request->email;
        $User->Title=$request->title;
        $User->Description=$request->Description;
        $file=$request->file('ppt');
        $extension=$file->getClientOriginalExtension(); 
        if($request->hasfile('ppt') && $extension=='pptx')
        {
            $filename= time().'.'.$extension;
            $file->move('file',$filename);
            $User->ppt =$filename;
        }else
        {
        
            return redirect()->back()->with('show','You uploaded Wrong File. You have allowed to upload PPT(.pptx*) Files Only....!!!!');
        }
        $file1=$request->file('word');
        $extension1=$file1->getClientOriginalExtension();//getting extension
        
        if($request ->hasfile('word') && $extension1=='docx')
        {
            
            $filename=Str::random(6). '.' . $extension1;
            $file1->move('file', $filename);
            $User->word=$filename;
    
        }
        else{
            return redirect()->back()->with('view','You uploaded Wrong File. You have allowed to upload word(.docx*) Files Only....!!!!');
            
        }
            

        


        $User->url=$request->url;
        $User->save();
        return redirect()->back()->with('status','Thanks,Your response has been submitted');
    }
   
}

