<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        
        //$download = Download::latest()->paginate(5);
        $download = Download::latest()->paginate(10);
        return view('download.index')->with("downloads",$download);
     

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("download.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'File' => 'required',
            'FileName' => 'required',
        ]);

        $requestData = $request->all();
        $fileName  = time().$request->file("File")->getClientOriginalName();
        $path = $request->file('File')->storeAs('images',$fileName,'public');
        $requestData['File'] = '/storage/'.$path;  
        Download::create($requestData);
        return redirect('/admin/download')->with('flash_message','Download Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Download $id)
    {
        return view('download/show',compact('id'));
    }

    public function edit(Download $id)
    {
        return view('download/edit',compact('id'));
    }
    public function update(Request $request, string $id)
    {
        $download = Download::find($id);
      
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

        $download->update($requestData);
        //Department::findOrFail(3)->update($request->all());
        return redirect('/admin/download')->with('message','Download Updated Successfully');
    }

    public function destroy(string $id)
    {
        $download = Download::where('id',$id)->first();
        $download->delete();
        return redirect('/admin/download')->with('message','Download Deleted Successfully');
    }
    // public function search(Request $request){
    //     $search = $request->search;
    //     $downloads = Download::where(function($query) use ($search){
    //         $query->where('FileName','like',"%$search%")->Where('FileName','like',"%$search$");
    //     })->get();
    //     return view('/admin/download',compact('downloads','search'));
    // }
 
}

