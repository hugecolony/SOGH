<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\DoctorImage;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders  = Slider::get();
        $departments  = Department::latest()->get();
        $doctors  = Doctor::latest()->get();
        return view("frontend.index", compact("sliders","departments","doctors"));
    }


    public function departments(){
        $departments  = Department::get();
        return view("frontend.departments.department.index", compact("departments"));
    }

    
    public function all_doctors(){
        $departments  = Department::orderBy("Name","ASC")->get();
        $doctors  = Doctor::orderBy("Name","ASC")->get();
        $doctorImages = DoctorImage::latest()->get();
        return view("frontend.search_doctors.index", compact("departments","doctors","doctorImages"));
    }

    public function doctors($departments_Name){
    $departments = Department::where("Name",$departments_Name)->first();
    
    if($departments){
       $doctors = $departments->doctors()->get();
        return view("frontend.doctors.index", compact("doctors","departments"));
    }
    else{

        return redirect()->back();
        }
    }
    public function doctorView(string $department_Name , string $doctor_Name){
        $departments = Department::where("Name",$department_Name)->first();
        if($departments){
            $doctors = $departments->doctors()->where('Name',$doctor_Name)->where('status','0')->first();
            if($doctors){
                return view("frontend.doctors.view", compact("doctors","departments"));
            }
            else{
                return redirect()->back();  
            }
             
         }
         else{
     
             return redirect()->back();
             }
    
    }


    public function search(Request $request ){
        
        $search = $request->search;
        
        // $departments  = Department::whereAny(['Name'],'LIKE',"%$search%")->get();
        // $doctors  = Doctor::where('Name','LIKE','%'.$search.'%')->get();
        // return view ('frontend.search_doctors.index',   compact('doctors','departments'));
       
        $doctors = Doctor::orderBy('id','desc')->whereAny(['Name'],'LIKE','%'.$request->search.'%');

        if($request->departments != 'ALL') $doctors->where('department_id',$request->departments);

        $doctors = $doctors->get();
        $departments = Department::all();

        return view('frontend.search_doctors.index', compact('doctors','departments'));
    }

}