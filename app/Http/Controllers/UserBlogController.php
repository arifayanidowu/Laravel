<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class UserBlogController extends Controller
{
    //
    public function showBlog() {
        $title = 'sample Blog';
        $posts = post::all();
        
        return view('frontend.blog-home', compact('title', 'posts'));
    }

    public function showPost($id) {
        $title = 'title';
        $post = Post::find($id);

        return view('frontend.showPost', compact('post'));
    }
}
