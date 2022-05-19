<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

    public function Index()
    {
        $data=User::all();
        return view('Users.Index',compact('data'));
    }

    public function Delete($id)
    {
       $user=User::find($id);
       //dd($user);
     if ($user->Profile_image!=NULL ) {

        $dest=base_path()."\public\profile"."/".basename($user->image);
        unlink($dest);
     }
       $user->delete();
        return redirect()->route('index.user')->with('deleted', ' User deleted!');
    }

    public function Edit($id)
    {
        $user=User::find($id);
        return view('Users.Edit',compact('user'));
    }

    public function Update(request $req)
    {
        //dd($req->all());
        $user=User::find($req->id);


        $user->name=$req->name;
        $user->email=$req->email;
        $user->Role=$req->role;
       if($req->image!=NULL){
              //unlink old one
       if ($user->Profile_image!=NULL ) {
        $dest=base_path()."\public\profile"."/".basename($user->Profile_image);
        unlink($dest);
       }

        //upload new one
        $imagename = time().'-'.".".$req->image->getClientOriginalName();
       $req->image->move(public_path('profile'), $imagename);
      $user->Profile_image=$imagename;
       }

        $user->save();
        return redirect()->route('index.user')->with('status', 'Profile updated!');

    }
    public function Change_status($id)
 {
    $user = User::find($id);
    $status=0;
    if ($user->status == 0) {
        $status =1;
     }
    $user->status=$status;
    $user->save();
    return back();
 }
}
