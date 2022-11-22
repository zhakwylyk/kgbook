<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

 public function user()
 {
     return view('admin-panel/user');
 }


 public function UserPost(){
        $User = new User();
        return view('admin-panel/user', ['user' => $User::all()]);
      }



      public function UserUp($id){

        $User = new User();
        return view('admin-panel/userupdate', ['user' => $User->find($id)]);
    }

    public function UserUpPrinimatEdit($id, Request $req){
        $validation = $req->validate([
         'name' => 'required|min:1|max:500',
         'email' => 'required|min:1|max:5000'
     ]);   
     $User = user::find($id);
     $User->name = $req->input('name');
     $User->email = $req->input('email');
     $User->save();
     return redirect()->route('userPost', $id)->with('success', 'Обновленно!');
 }
      

 public function userDelete($id){

    user::find($id)->delete();
    return redirect()->route('userPost')->with('success', 'Удалено!');

}

}
