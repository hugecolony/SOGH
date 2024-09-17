<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentsFormRequest;
use App\Models\Department;
use App\Models\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointments::latest()->paginate(5);
        return view('admin.appointments.index')->with("appointments",$appointments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $appointments = Appointments::all();
        $departments = Department::all();
        return view("admin.appointments.create",compact("appointments","departments"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentsFormRequest $request){
        $validatedData = $request->validated(); 
        $department=Department::find($validatedData['department_id']);
        $appointments = $department->appointments()->create([
            'department_id'=>$validatedData['department_id'],
            // "image"=> $validatedData["image"],
            'First_Name'=>$validatedData['First_Name'],
            'Last_Name'=>$validatedData['Last_Name'],
            'CNIC'=>$validatedData['CNIC'],
            'Mobile_Number'=>$validatedData['Mobile_Number'],
            'Whatsapp'=>$validatedData['Whatsapp'],
            'Reason_of_Appointment'=>$validatedData['Reason_of_Appointment'],
            'Appointment_date'=>$validatedData['Appointment_date']
            
       
        ]);

      
        return redirect("admin/appointment")->with("message","appointments Added Successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $appointment_id){
        $departments = Department::all();
        $appointments = Appointments::findOrFail($appointment_id);
        return view("admin.appointments.edit", compact("appointments","departments"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointments = Appointments::find($id);
       
       // $input = $request->all();


        $requestData = $request->all();
        
        $appointments->update($requestData);
        //Department::findOrFail(3)->update($request->all());
        return redirect('/admin/appointment')->with('message','appointment Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appointment = Appointments::where('id',$id)->first();
        $appointment->delete();
        return redirect('/admin/appointment')->with('message','appointment Deletedd Successfully');
    }
}
