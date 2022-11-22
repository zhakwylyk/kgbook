<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller

{

   
    public function index()
    {
        return view('admin-panel/category');
    }


    public function category(){
        $category = new category();
        return view('admin-panel/category', ['category' => $category::all()]);
    }


    public function addcategory(Request $req) 
    {
        $validation = $req->validate([
            'title' => 'required|min:1|max:500',
        ]);   

        $category = new category();

        $category->title = $req->input('title');

        $category->save();

        return redirect()->route('category')->with('success', 'Добавленно!');
    }


    public function СategoryDelete($id){

        category::find($id)->delete();
        return redirect()->route('category')->with('success', 'Удалено!');

    }


}
