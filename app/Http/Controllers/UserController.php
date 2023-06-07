<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser($id){
        $user = User::find($id);
        return view('blog.show',compact('user'));


    }

    public function view($id){
        $user = User::find($id);
        return view('blog.viewpost',compact('user'));
    }

    public function showPost($id){
        $post = BlogPost::find($id)->user;
        return view('blog.test',compact('post'));

    }
}
