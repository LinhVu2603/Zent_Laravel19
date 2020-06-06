<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Task;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listWork = Task::all();
        return view('frontend.tasks.index',[
            'listWork' => $listWork
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $status = $request->get('status');
        $task = new Task();
        $task->name = $request->get('name');
        $task->priority = $request->get('priority');
        $task->status = $status;
        $task->content = $request->get('content');
        $task->deadline = $request->get('deadline');
        $task->save();
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task =Task::find($id);
        return view('frontend.tasks.show')->with([
            'task' => $task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task =Task::find($id);
        return view('frontend.tasks.edit')->with([
            'task' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Cập nhật
        $task = Task::find($id);
        $task->name = $request->get('name');
        $task->status = $request->get('status');
        $task->priority = $request->get('priority');
        $task->content = $request->get('content');
        $task->deadline = $request->get('deadline');
        $task->save();
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id )
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.index');
    }

    public function complete($id, Request $request)
    {
        $task = Task::find($id);
        $task->status = 2;
        $task->save();
        // dd($task->status);
        return redirect()->route('task.index');
    }
    public function reComplete($id, Request $request)
    {
        $task = Task::find($id);
        $task->status = 1;
        $task->save();
        return redirect()->route('task.index');
    }

}
