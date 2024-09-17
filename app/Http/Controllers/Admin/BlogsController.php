<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\BlogsGallery;
use Illuminate\Http\Request;
use App\Http\Requests\BlogsFormRequest;
use Illuminate\Support\Facades\File;
class BlogsController extends Controller
{
    public function index(){
        $blogs = Blogs::orderBy("created_at","desc")->paginate(10);
        return view("admin.blogs.index", compact("blogs"));
    }   
    
    public function create(){
        $blogs = Blogs::all();

        return view("admin.blogs.create",compact("blogs"));
    }

    public function store(BlogsFormRequest $request){

        $uploadPath= 'uploads/blogs/';

        $validatedData = $request->validated();
        if($request->hasFile("CoverImage"))
        {
            $file = $request->file("CoverImage");
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;
            $file->move('uploads/CoverImage/', $filename);
            $validatedData['CoverImage'] = "uploads/CoverImage/$filename";
        
      
            $Blogs  = Blogs::create([
                "Title"=> $validatedData["Title"],
                "Description"=> $validatedData["Description"],
                "CoverImage"=> $validatedData["CoverImage"],
                "Date"=> $validatedData["Date"],
            ]);
    

     }
        if( $request->hasFile('images') ){
            $files = $request->file('images');
            foreach($files as $file){
                $imageName= time().'_'.$file->getClientOriginalName();
                $request['blogs_id'] = $Blogs->id;
                $request['image'] = $imageName;
                $file->move(public_path('uploads/images'), $imageName);
                BlogsGallery::create($request->all()    );


            }

        }   
        return redirect('/admin/blogs')->with('message',"Blogs Created Successfully");       
    }


    public function destroy($id){
        $blogs  = Blogs::findorFail($id);
        if(File::exists("uploads/CoverImage".$blogs->CoverImage)){
            File::delete("uploads/CoverImage".$blogs->CoverImage);
        }
        $images = BlogsGallery::where('blogs_id',$blogs->id)->get();
        foreach($images as $image){
            if(File::exists("uploads/images".$image->image)){
                File::exists("uploads/images".$image->image);
            }
        }
        $blogs->delete();
     
        return back();
    }
    public function edit(int $blogs_id){
        
        $blogs = Blogs::findOrFail($blogs_id);
        return view("admin.blogs.edit", compact("blogs"));
    }

    public function update(BlogsFormRequest $request, int $blogs_id){

        $validatedData = $request->validated();
        $blog = Blogs::findOrFail($blogs_id);
        if($request->hasFile("CoverImage")){
            
            if(File::exists('uploads/CoverImage/'.$blog->CoverImage)){
                File::delete('uploads/CoverImage/'.$blog->CoverImage);
            }
            else{
            
            $file = $request->file("CoverImage");
            $ext = $file->getClientOriginalExtension();
            $filename = time().".".$ext;
            $file->move('uploads/CoverImage/',$filename);
           
            $validatedData['CoverImage'] = "uploads/CoverImage/$filename";
        
            }
          
        }
        Blogs::where('id',$blog->id)->update([
            "Title"=> $validatedData["Title"],
            "Description"=> $validatedData["Description"],
            "CoverImage"=> $validatedData["CoverImage"] ?? $blog->CoverImage,
            "Date"=> $validatedData["Date"],
        ]);
        // $blog->update([
        //     "Title"=> $validatedData["Title"],
        //     "Description"=> $validatedData["Description"],
        //     "Date"=> $validatedData["Date"],
        //     "CoverImage"=> $validatedData['CoverImage'],
        // ]);

        if( $request->hasFile('images') ){
            $files = $request->file('images');
            foreach($files as $file){
                $imageName= time().'_'.$file->getClientOriginalName();
                $request['blogs_id'] = $blog->id;
                $request['image'] = $imageName;
                $file->move(public_path('uploads/images'), $imageName);
                BlogsGallery::create($request->all()    );


            }



    }
    return redirect('/admin/blogs')->with('message',"Blogs Updated Successfully");       
}
    public function deleteimage(int $blogs_id){
        $images= BlogsGallery::findorFail($blogs_id);
        if(File::exists("uploads/images".$images->image)){
            File::delete("uploads/images".$images->image);
        }
        BlogsGallery::find( $blogs_id )->delete();
        return back();
    }

    public function deletecover(int $blogs_id){
        $images= Blogs::findorFail($blogs_id)->CoverImage;
        
        if(File::exists("$images")){
         
            File::delete("$images");
        }
    
        return back();
    }
}