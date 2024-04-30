<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminPlans;
use App\Models\admin\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function addTask()
    {
        $plan = AdminPlans::get();
        return view('admin.task.add', compact('plan'));
    }

    public function storeTask(Request $request)
    {
        $image = $request->photo;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('tasks'), $imageName);

        $task = new Task();
        $task->title = $request->title;
        $task->earning = $request->earning;
        $task->plan = $request->plan;
        $task->level = $request->level;
        $task->link = $request->link;
        $task->photo = $imageName;
        $task->save();
        return redirect()->route('Admin.All.Task')->with('success', 'Task Added');
    }

    public function allTask()
    {
        $task = Task::get();
        return view('admin.task.all', compact('task'));
    }
}
