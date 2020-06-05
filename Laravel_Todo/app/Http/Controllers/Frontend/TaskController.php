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
        // $listWork = array(
        //     "w1" => array(
        //         "id" => 1,
        //         "name" => "Bài tập Laravel",
        //         "content" => "3 bai tap ve Laravel",
        //         "status" => 1,
        //         "deadline" => "31/5/2020"
        //     ),
        //     "w2" => array(
        //         "id" => 2,
        //         "name" => "Bài tập PHP",
        //         "content" => "3 bai tap ve PHP",
        //         "status" => 1,
        //         "deadline" => "31/5/2020"
        //     ),
        //     "w3" => array(
        //         "id" => 3,
        //         "name" => "Bài tập Tối ưu",
        //         "content" => "3 bai tap ve Toi uu",
        //         "status" => 1,
        //         "deadline" => "31/5/2020"
        //     )
        // );
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
        // dd($request->only(['name','deadline']));
        $task = new Task();
        $task->id = $request->id;
        $task->name = $request->name;
        $task->status = $request->status;
        $task->content = $request->content;
        $task->deadline = $request->deadline;
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
        return view('frontend.tasks.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('frontend.tasks.edit');
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
        //
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
        // dd($request->get('id'));
        // $input = $request->only(['name','deadline']);
        // dd($input);
    }

    public function complete($id, Request $request)
    {
        echo "Hàm complete";
        dd($id);
    }
    public function reComplete($id, Request $request)
    {
        echo "Hàm Recomplete.";
        dd($id);
        // dd($request->route('reComplete'));

    }

}
