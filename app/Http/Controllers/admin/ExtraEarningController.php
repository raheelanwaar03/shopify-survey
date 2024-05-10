<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ExtraTasks;
use Illuminate\Http\Request;

class ExtraEarningController extends Controller
{
    public function addExtraTask()
    {
        $extraTask = ExtraTasks::get();
        return view('admin.task.extra',compact('extraTask'));
    }

    public function storeExtraTask(Request $request)
    {
        $task = new ExtraTasks();
        $task->title = $request->title;
        $task->des = $request->des;
        $task->price = $request->price;
        $task->link = $request->link;
        $task->save();
        return redirect()->back()->with('success', 'Task Added');
    }

    public function delExtraTask($id)
    {
        $task = ExtraTasks::find($id);
        $task->delete();
        return redirect()->back()->with('success','Task Deleted');
    }


}
