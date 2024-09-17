<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarrerFormRequest;
use App\Models\Carrers;
use Illuminate\Http\Request;
use Validator;
class CarrersController extends Controller
{
    public function index(){
        return view("admin.carrers.index");
    }

    public function create(){
        return view("admin.carrers.create");
    }

    public function store(CarrerFormRequest $request){

   
        $requestData = $request->all();
        $fileName  = time().$request->file("Attachment")->getClientOriginalName();
        $path = $request->file('Attachment')->storeAs('images',$fileName,'public');
        $requestData['Attachment'] = '/storage/'.$path; 
        Carrers::create($requestData);
        return redirect('/admin/carrers')->with('flash_message','Carrers Added');

        // $validatedData = $request->validated();
        // if($request->hasFile("Attachment"))
        // {
        //     $file = $request->file("Attachment");
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().".".$ext;
        //     $file->move('uploads/carrers/', $filename);
        //     $validatedData['Attachment'] = "uploads/carrers/$filename";
        // }
        // $validatedData['status'] =  $request->status == true ? '1' :'0';

        // Carrers::create([
        //     "Title"=> $validatedData["Title"],
        //     "Type" => $validatedData["Type"],
        //     "Qualification"=> $validatedData["Qualification"],
        //     "Description"=> $validatedData["Description"],
        //     "Location"=> $validatedData["Location"],
        //     "Terms&Conditions"=> $validatedData["Terms&Conditions"],
        //     "ClosingOn"=> $validatedData["ClosingOn"],
        //     "status"=> $validatedData["status"],
        //     "Attachment"=> $validatedData["Attachment"],

        // ]);

        // return redirect("admin/carrers")->with("message","Carrer Added Successfully");
    }

    public function show(Carrers $id)
    {
        return view('/admin/carrers/show',compact('id'));
    }

    public function edit(Carrers $id)
    {
        return view('/admin/carrers/edit',compact('id'));
    }
    public function update(Request $request, string $id)
    {
        $carrers = Carrers::find($id);
      
       // $input = $request->all();


        $requestData = $request->all();
        if(isset($request->Image))
        {
              $requestData = $request->all();
              $fileName  = time().$request->file("Attachment")->getClientOriginalName();
              $path = $request->file('Attachment')->storeAs('images',$fileName,'public');
              $requestData['Attachment'] = '/storage/'.$path;  
              //Department::create($requestData);
        }
        // if($Image = $request->file('Image')){
        //     $destinationPath = '/storage/';
        //     $profileImage  = time().$request->file("Image")->getClientOriginalName();
        //     $Image->move($destinationPath.$profileImage);
        //     $requestData['Image'] = "$profileImage";
           

        // }else{
        //     unset($requestData["Image"]);
        // }

        $carrers->update($requestData);
        //Department::findOrFail(3)->update($request->all());
        return redirect('/admin/carrers')->with('message','carrers Updated Successfully');
    }

    public function destroy(string $id)
    {
        $carrers = Carrers::where('id',$id)->first();
        $carrers->delete();
        return redirect('/admin/carrers')->with('message','carrers Deletedd Successfully');
    }

}
