<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Http\Requests\ValidatePostData;

class AdminController extends Controller
{
    public function showLogin() {
        $title = "login";
        $label = "Admin Login";

        return view('admin.admin-login', compact('title', 'label'));
        
    }


    public function showIndex() {
        $title = "add post";
        $label = "Add Post";

        return view('admin.index', compact('title', 'label'));
    }

    public function store(ValidatePostData $request){

        /* 
        $post = new Post;

        $post->title = request('title');
        $post->author = request('author');
        $post->content = request('content');

        $post->save(); */

        Post::create(request()->all());
        return redirect('/addpost')->withMessage("Post added successfully");
        
    }

    public function showPosts() {
        $title = "view posts";

        $posts = Post::all();

        return view('admin.viewpost', compact('title','posts'));
    }

    public function deletePost($id) {
        
        Post::all()->find($id)->delete();

        return redirect('/viewposts')->withMessage("Post Deleted Successfully");
    }


    public function showEdit($id) {

        $title = "edit post";
        $label = "Edit Post";
        $post = Post::all()->find($id);

        return view('admin.editpost', compact('title', 'label', 'post'));
    }

    public function updatePost($id) {

        $post = Post::all()->find($id);

        $post->title = request('title');
        $post->author = request('author');
        $post->content = request('content');

        $post->save();

        return redirect('/viewposts')->withMessage("Post updated successfully");
    
    }



}

