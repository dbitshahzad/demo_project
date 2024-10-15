<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function Task()
    {
        return view('content.Task');
    }
    public function ret(Request $request)
    {

        $task = new Task();
        $task->Title = $request->Title;
        $task->description = $request->description; 
        $task->Start_date = $request->Start_date;
        $task->End_date = $request->End_date;
        $task->Status = $request->Status;
        $task->Progress = $request->Progress;
        $task->save();
        return back();
    }
    public function show(){
        $task = Task::all();
        return view ('content.table',compact('task'));
    }

    public function edite(Task $task){
        return view ('edite',compact('task'));
    }
    public function update(Request $request,Task $task){
        $task->Title = $request->Title;
        $task->description = $request->description; 
        $task->Start_date = $request->Start_date;
        $task->End_date = $request->End_date;
        $task->Status = $request->Status;
        $task->Progress = $request->Progress;
        $task->update();
        return redirect('/show');
    }

    public function destroy(Task $task){
        $task->delete();
        return back();
    }
}
