<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ExtraTasks;
use Illuminate\Http\Request;

class ExtraEarningController extends Controller
{
    public function addExtraTask()
    {
        return view('admin.task.extra');
    }

    public function storeExtraTask(Request $request)
    {
        $image = $request->image;
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('tasks'), $imageName);

        $task = new ExtraTasks();
        $task->title = $request->title;
        $task->des = $request->des;
        $task->price = $request->price;
        $task->link = $request->link;
        $task->image = $imageName;
        $task->save();
        return redirect()->back()->with('success', 'Task Added');
    }
}
