<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // this is an import statement
use App\Task; // namespace imported

class TaskController extends Controller
{
    // see all task
    public function showAllTasks(){
        $tasks = Task::all();

        return view('task.tasks', compact('tasks'));
        
    }

    public function showTask($id){
        $task = Task::find($id);

        return view('task.detail', compact('task'));
    }
}
