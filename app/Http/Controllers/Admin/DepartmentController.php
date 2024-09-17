<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentFormRequest;
use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentController extends Controller
{
    public function index(){
        return view('admin.department.index');
    }
    public function create(){
        return view('admin.department.create');

    }
    public function store(DepartmentFormRequest $request){
        $requestData = $request->all();
        $fileName  = time().$request->file("Image")->getClientOriginalName();
        $path = $request->file('Image')->storeAs('images',$fileName,'public');
        $requestData['Image'] = '/storage/'.$path;  
        Department::create($requestData);
        return redirect('/admin/department')->with('flash_message','Department Added');

    }
     /**
     * Display the specified resource.
     */
    public function show(Department $id)
    {
        return view('admin/department/show',compact('id'));
    }

    public function edit(Department $id)
    {
        return view('admin/department/edit',compact('id'));
    }
    public function update(Request $request, string $id)
    {
        $department = Department::find($id);
      
       // $input = $request->all();


        $requestData = $request->all();
        if(isset($request->Image))
        {
              $requestData = $request->all();
              $fileName  = time().$request->file("Image")->getClientOriginalName();
              $path = $request->file('Image')->storeAs('images',$fileName,'public');
              $requestData['Image'] = '/storage/'.$path;  
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

        $department->update($requestData);
        //Department::findOrFail(3)->update($request->all());
        return redirect('/admin/department')->with('message','Department Updated Successfully');
    }

    public function destroy(string $id)
    {
        $department = Department::where('id',$id)->first();
        $department->delete();
        return redirect('/admin/department')->with('message','Department Deletedd Successfully');
    }

}
