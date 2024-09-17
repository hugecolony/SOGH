<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\File;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $employees = Employee::latest()->paginate(5);
        return view('employee.index')->with("employees",$employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    
    {
        return view("employee.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'SocialMedia' => 'required',
            'Image' => 'required',
        ]);


        $requestData = $request->all();
        $fileName  = time().$request->file("Image")->getClientOriginalName();
        $path = $request->file('Image')->storeAs('images',$fileName,'public');
        $requestData['Image'] = '/storage/'.$path;  
        Employee::create($requestData);
        return redirect('/admin/employee')->with('flash_message','Employee Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $id)
    {
        return view('/employee/show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $id)
    {
        
        $employee = Employee::find($id);
        return view('/employee/edit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);
       
       // $input = $request->all();


        $requestData = $request->all();
        if(isset($request->Image))
        {
              $requestData = $request->all();
              $fileName  = time().$request->file("Image")->getClientOriginalName();
              $path = $request->file('Image')->storeAs('images',$fileName,'public');
              $requestData['Image'] = '/storage/'.$path;  
              //Employee::create($requestData);
        }
        // if($Image = $request->file('Image')){
        //     $destinationPath = '/storage/';
        //     $profileImage  = time().$request->file("Image")->getClientOriginalName();
        //     $Image->move($destinationPath.$profileImage);
        //     $requestData['Image'] = "$profileImage";
           

        // }else{
        //     unset($requestData["Image"]);
        // }

        $employee->update($requestData);
        //Department::findOrFail(3)->update($request->all());
        return redirect('/admin/employee')->with('message','Employee Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::where('id',$id)->first();
        $employee->delete();
        return redirect('/admin/employee')->with('message','Employee Deletedd Successfully');
    }
}
