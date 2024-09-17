<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorFormRequest;
use App\Models\Doctor;
use App\Models\Department;
use App\Models\DoctorImage;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Validator;
use Illuminate\Support\Facades\File;
class DoctorController extends Controller
{
    public function index(){
        $doctors =  Doctor::all();
        return view("admin.doctors.index",compact("doctors"));
    }
    public function create(){
        $departments = Department::all();
        $doctors =  Doctor::all();
        return view("admin.doctors.create",compact("doctors","departments"));
    }
    public function store(DoctorFormRequest $request){
        $validatedData = $request->validated(); 
        $department=Department::find($validatedData['department_id']);
        $doctor = $department->doctors()->create([
            'department_id'=>$validatedData['department_id'],
            // "image"=> $validatedData["image"],
            'Name'=>$validatedData['Name'],
            'Designation'=>$validatedData['Designation'],
            'Description'=>$validatedData['Description'],
            'Educational_Credentials'=>$validatedData['Educational_Credentials'],
            'Email'=>$validatedData['Email'],
            'Incoming_Time'=>$validatedData['Incoming_Time'],
            'Outgoing_Time'=>$validatedData['Outgoing_Time'],
            'Facebook_URL'=>$validatedData['Facebook_URL'],
            'Linkedin_URL'=>$validatedData['Linkedin_URL'],
            'Expertise'=>$validatedData['Expertise'],
            'Qualification'=>$validatedData['Qualification'],
            'Awards'=>$validatedData['Awards'],
            'Professional_Membership'=>$validatedData['Professional_Membership'],
            'status'=>$request->status == true ? '1' :'0',
       
        ]);

        if($request->hasFile('image')){
            $uploadPath= 'uploads/doctors/';
            $i= 1;
            foreach($request->file('image') as $imageFile){
                // $file = $request->file("image");
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.".".$extension;
                $imageFile->move($uploadPath, $filename);
                $finalImagePathName =$uploadPath.$filename;
                
                $doctor->doctorImages()->create([
                    'doctor_id'=> $doctor->id,
                    'image'=> $finalImagePathName,
                ]);
                    //$file = $request->file("image");
                // $ext = $file->getClientOriginalExtension();
                // $filename = time().".".$ext;
                // $file->move('uploads/doctor/', $filename);
                // $validatedData['image'] = "uploads/doctor/$filename";
                // $finalImagePathName ="uploads/doctor/$filename";

            }
            
                        
        }
       
        return redirect("admin/doctors")->with("message","Doctors Added Successfully");

    }
     
    public function edit(int $doctor_id){
        $departments = Department::all();
        $doctor = Doctor::findOrFail($doctor_id);
        return view("admin.doctors.edit", compact("doctor","departments"));
    }
    public function update(DoctorFormRequest $request, int $doctor_id){
        $validatedData = $request->validated();

        $doctor = Department::findOrFail($validatedData['department_id'])->doctors()->where('id', $doctor_id)->first();
        if($doctor){
            $doctor->update([
                'department_id'=>$validatedData['department_id'],
                // "image"=> $validatedData["image"],
                'Name'=>$validatedData['Name'],
                'Designation'=>$validatedData['Designation'],
                'Description'=>$validatedData['Description'],
                'Educational_Credentials'=>$validatedData['Educational_Credentials'],
                'Email'=>$validatedData['Email'],
                'Incoming_Time'=>$validatedData['Incoming_Time'],
                'Outgoing_Time'=>$validatedData['Outgoing_Time'],
                'Facebook_URL'=>$validatedData['Facebook_URL'],
                'Linkedin_URL'=>$validatedData['Linkedin_URL'],
                'Expertise'=>$validatedData['Expertise'],
                'Qualification'=>$validatedData['Qualification'],
                'Awards'=>$validatedData['Awards'],
                'Professional_Membership'=>$validatedData['Professional_Membership'],
                'status'=>$request->status == true ? '1' :'0',
            ]);
            if($request->hasFile('image')){
                $uploadPath= 'uploads/doctors/';
                $i= 1;
                foreach($request->file('image') as $imageFile){
                    // $file = $request->file("image");
                    $extension = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.".".$extension;
                    $imageFile->move($uploadPath, $filename);
                    $finalImagePathName =$uploadPath.$filename;
                    
                    $doctor->doctorImages()->create([
                        'doctor_id'=> $doctor->id,
                        'image'=> $finalImagePathName,
                    ]);
                        //$file = $request->file("image");
                    // $ext = $file->getClientOriginalExtension();
                    // $filename = time().".".$ext;
                    // $file->move('uploads/doctor/', $filename);
                    // $validatedData['image'] = "uploads/doctor/$filename";
                    // $finalImagePathName ="uploads/doctor/$filename";
    
                }
            }
            return redirect('/admin/doctors')->with('message',"Doctor Data Updated Successfully");       
        }
        else{
            return redirect('/admin/doctors')->with('message','No Such Doctor Id Found');
        }
    
    }
    public function destroyImage(int $doctor_image_id){
        $doctorImage = DoctorImage::findOrFail($doctor_image_id);
        if(File::exists($doctorImage->image)){
            File::delete($doctorImage->image);
        }
        $doctorImage->delete();
        return redirect()->back()->with('message','Doctor Image Deleted');
        
    }
    public function destroy(int $doctor_id){
        $doctor  = Doctor::findOrFail($doctor_id);
        if($doctor->doctorImages){
            foreach($doctor->doctorImages as $image){
                if(File::exists($image->image)){
                    File::delete($image->image);
                }
            }
        }
        $doctor->delete();
        return redirect()->back()->with('message','Doctor Deleted with all its image');
    }
}
