<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function insert(Request $request){
        $validated = $request->validate([
            'task' => 'required'
        ],[
            'task' => 'กรุณาใส่สิ่งที่ต้องทำด้วย'
        ]);

        $status = Task::create([
            'task' => $request->task
        ]);
        
        return redirect()->route('home');
    }

    public function getTask(){
        $task = Task::all();
        return view('pages.home',['task'=>$task]);
    }

    public function delete($id){
        Task::destroy($id);
        return redirect()->route('home');
    }
}
