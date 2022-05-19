<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function Create(request $req)
     {
        $validatedData=$req->validate([
            'title' =>'required|',
            'desc'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

            ]);

        $Blog=new Blog;
        $Blog->title=$req->title;
        $Blog->desc=$req->desc;

        $imagename = time().'-'.".".$req->image->getClientOriginalName();
        $req->file('image')->move(public_path('blogs'), $imagename);
        $Blog->image = $imagename;
        $Blog->save();
        return redirect()->route('index.blog')->with('created', 'Post uploaded!');
    }

    public function index()
    {

        $data=Blog::all();
        return view('Blog.Index',compact('data'));
    }
    public function Delete($id)
    {
        $blog=Blog::find($id);
        $dest=base_path()."\public\blogs"."/".basename($blog->image);
        unlink($dest);
        $blog->delete();
         return redirect()->route('index.blog')->with('deleted', 'Post deleted!');
    }
    public function Update( request $req)
    {
    $Blog=Blog::find($req->id);


    $Blog->title=$req->title;
    $Blog->desc=$req->desc;

   if($req->image!=NULL){
          //unlink old one
    $dest=base_path()."\public\blogs"."/".basename($Blog->image);
    unlink($dest);

    //upload new one
    $imagename = time().'-'.".".$req->image->getClientOriginalName();
   $req->image->move(public_path('blogs'), $imagename);
  $Blog->image=$imagename;
   }

    $Blog->save();
    return redirect()->route('index.blog')->with('status', 'Profile updated!');
    }

    public function Edit($id)
    {

        $blog=Blog::find($id);
        //dd($blog->title);
        return view('Blog.Edit',compact('blog'));
    }

 //staus change code
 public function Change_status($id)
 {
    $blog = Blog::find($id);
    $status=0;
    if ($blog->status == 0) {
        $status =1;
     }
    $blog->status=$status;
    $blog->save();
    return back();
 }

}
/*
*/
