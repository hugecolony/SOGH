<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->paginate(10);
        return view('admin.sliders.index',compact('sliders'));
    }
    public function create(){
        return view("admin.sliders.create");
    }
    public function store(SliderFormRequest $request)
    {

       
        $validatedData = $request->validated();
        if($request->hasFile("image"))
        {
            $file = $request->file("image");
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;
            $file->move('uploads/slider/', $filename);
            $validatedData['image'] = "uploads/slider/$filename";
        }
        $validatedData['status'] =  $request->status == true ? '1' :'0';

        Slider::create([
            "title"=> $validatedData["title"],
            "description"=> $validatedData["description"],
            "image"=> $validatedData["image"],
            "status"=> $validatedData["status"],
        ]);

        return redirect("admin/sliders")->with("message","Slider Added Successfully");
    }


    public function edit(Slider $id)
    {
        return view('admin/sliders/edit',compact('id'));
    }

    public function update(Request $request, string $id)
    {
        $slider = Slider::find($id);
        $validatedData = $request->all();
        if($request->hasFile("image"))
            {
                $uploadPath = 'uploads/slider/';
                $destination = $slider->image;
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
             Slider::where('id',$slider->id)->update([
            "title"=> $validatedData["title"],
            "description"=> $validatedData["description"],
            "image"=> $validatedData["image"] ?? $slider->image,
            "status"=> $validatedData["status"],
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

        return redirect("admin/sliders")->with("message","Slider Updated Successfully");


    }


    public function destroy(string $id)
    {   $slider = Slider::find($id);
        if($slider->count() > 0){
            $destination = $slider->image;
            if(File::exists($destination)){
                File::delete($destination);
        }
        $slider->delete();
        return redirect('/admin/sliders')->with('message','Home Slider Deleted Successfully Hurray !!!');
        // $slider = Slider::where('id',$id)->first();
        // $slider->delete();
       
    }

    return redirect('/admin/sliders')->with('message','Someting went wrong');

    }
}
