<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\posts;

class PostController extends Controller
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
    
    public function post()
    {
        return view('admin-panel/post');
    }

    public function addpost(Request $req) 
    {
        $validation = $req->validate([
            'name' => 'required|min:1|max:500',
            'topic' => 'required|min:1|max:5000'
        ]);   

        $post = new posts();

        $post->name = $req->input('name');
        $post->topic = $req->input('topic');
        $post->description = $req->input('description');
        $post->text = $req->input('text');

        $post->save();

        return redirect()->route('postvseknigi')->with('success', 'Добавленно!');
    }

    public function postvseknigi(){
        $post = new posts();
        return view('admin-panel/post', ['post' => $post::all()]);
    }

    public function Uppost($id){
        $post = new posts();
        return view('admin-panel/postupdate', ['post' => $post->find($id)]);
    }


    
    public function PostUpPrinimatEdit($id, Request $req){
        $validation = $req->validate([
         'name' => 'required|min:1|max:500',
         'topic' => 'required|min:1|max:5000'
     ]);   
     $post = posts::find($id);
     $post->name = $req->input('name');
     $post->topic = $req->input('topic');
     $post->description = $req->input('description');
     $post->text = $req->input('text');
     $post->save();
     return redirect()->route('postvseknigi', $id)->with('success', 'Обновленно!');
 }

    public function PostDelete($id){

        posts::find($id)->delete();
        return redirect()->route('postvseknigi')->with('success', 'Удалено!');

    }


}
