<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
    $name = "Ben";

    return view('welcome', compact('name'));
});

/* Route::get('/about', function(){
    return view('about');
});
 */
/* Route::get('/tasks', function(){
    
     $tasks = [
        "fix bugs on master",
        "finish writing tests",
        "go home"
    ]; 
 */
    //$tasks = DB::table('task')->where("id", ">", 1)->get();
    //dd($tasks);
    /* return $tasks; */

    //$tasks = \App\task::all(); //eloquent
    
   // return view('task.tasks', compact('tasks'));
//}); */


/* Route::get('/task/{id}', function($id){

    $task = DB::table('task')->find($id);

    return view('task.detail', compact('task'));
}); */


Route::get('/tasks', 'TaskController@showAllTasks');

Route::get('/tasks/{id}', 'TaskController@showTask');

// admin routes
Route::get('/admin', 'AdminController@showLogin');
Route::get('/register', 'AdminRegisterController@showRegister');
Route::post('/register', 'AdminRegisterController@register');

// admin home routes
Route::get('/addpost', 'AdminController@showIndex');

Route::post('/addpost', 'AdminController@store');

Route::get('/viewposts', 'AdminController@showPosts');

Route::get('/viewposts/{id}', 'AdminController@deletePost');

Route::get('/editpost/{id}', 'AdminController@showEdit');

Route::post('/editpost/{id}', 'AdminController@updatePost');

// Blog routes

Route::get('/showblog', 'UserBlogController@showBlog');

Route::get('/showPost/{id}', 'UserBlogController@showPost');


 
 // ->middleware('checkname')

 