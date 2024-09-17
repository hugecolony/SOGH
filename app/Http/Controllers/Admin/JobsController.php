<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\JobsFormRequest;
use App\Models\Carrers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Jobs;
class JobsController extends Controller
{
    public function index(){

        $jobs = Jobs::orderBy("id","desc")->paginate(10);
        $carrers = Carrers::all();
        return view('admin.jobs.index',compact('jobs','carrers'));
    }
    public function create(){
        $carrers  = Carrers::all();
        return view("admin.jobs.create",compact("carrers"));
    }

    public function store(JobsFormRequest $request){
        $validatedData = $request->validated(); 
       
        $carrers=Carrers::findOrFail($validatedData['carrers_id']);
        if($request->hasFile('image')){
            $uploadPath= 'uploads/jobs/';
            $i= 1;
            foreach($request->file('image') as $imageFile){
                // $file = $request->file("image");
                $extension = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.".".$extension;
                $imageFile->move($uploadPath, $filename);
                
                $validatedData['image'] =$uploadPath.$filename;
            }
        }
        Jobs::create([
            'carrers_id'=> $validatedData['carrers_id'],
            'name'=> $validatedData['name'],
            'email'=> $validatedData['email'],
            'phone'=> $validatedData['phone'],
            "image"=> $validatedData["image"],

        ]);

       
        return redirect("admin/jobs")->with("message","Jobs Added Successfully");
     
    }
    public function edit(Jobs $id)
    {
        $carrers = Carrers::all();
        return view('admin/jobs/edit',compact('id' ,'carrers'));
    }

    public function update(Request $request, string $id)
    {
        $jobs = Jobs::find($id);
        $validatedData = $request->all();

      
        if($request->hasFile("image"))
            {
                $uploadPath = 'uploads/slider/';
                $destination = $jobs->image;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file("image");
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;
                $file->move('uploads/slider/', $filename);
                $validatedData['image'] = $uploadPath.$filename;
            }
            $validatedData['status'] =  $request->status == true ? '1' :'0';
             Jobs::where('id',$jobs->id)->update([
            "name"=> $validatedData["name"],
            "email"=> $validatedData["email"],
            "image"=> $validatedData["image"] ?? $jobs->image,
            "phone"=> $validatedData["phone"],
            // 'carrers_id'=>$validatedData['carrers_id'],
        ]);
           // $slider->update($validatedData);
        // $validatedData = $request->all();
        // if($request->hasFile("image"))
        // {

        //     $destination = $slider->image;
        //     if(File::exists($destination)){
        //         File::delete($destination);
        //     }
        //     $file = $request->file("image");
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().".".$ext;
        //     $file->move('uploads/slider/', $filename);
        //     $validatedData['image'] = "uploads/slider/$filename";
        // }
        // $validatedData['status'] =  $request->status == true ? '1' :'0';

        // Slider::where('id',$slider->id)->update([
        //     "title"=> $validatedData["title"],
        //     "description"=> $validatedData["description"],
        //     "image"=> $validatedData["image"],
        //     "status"=> $validatedData["status"],
        // ]);

        return redirect("admin/jobs")->with("message","Slider Updated Successfully");


    }

    public function destroy(string $id)
    {
        $carrers = Jobs::where('id',$id)->first();
        $carrers->delete();
        return redirect('/admin/jobs')->with('message','Job Applicant Deletedd Successfully');
    }
}
