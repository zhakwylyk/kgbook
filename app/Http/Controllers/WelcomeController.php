<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function postvseknigi(){
        $post = new posts();
        return view('welcome', ['post' => $post::all()]);
      }

}
