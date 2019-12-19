<?php

namespace App\Http\Controllers\Frontend;

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
        $tasks = Task::all();
        // $tasks = Task::where('status', 1)
        // ->orderBy('name', 'desc')
        // ->take(5)
        // ->get();
        return view('home.home')->with([
            'tasks'=>$tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$name=$request->get('name');
        //$input = $request->all();
        //$input = $request->only('name','deadline');
        //$input2 = $request->except('name','deadline');
        //$name=$request->get('name')?$request->get('name'):'laravel';
        $task = new Task();
        $task->name=$request->get('name');
        $task->deadline=$request->get('deadline');
        $task->content=$request->get('content');
        $task->save();

        return redirect('/task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        // $task = Task::findOrFail($id);
        // $task = Task::where('id', $id)->first();
        // $task = Task::where('id', $id)->firstOrFail();
        dd($task->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        $task= Task::find($id);
        $task->delete();
        return redirect('/task');
    }

    public function complete($id)
    {
        dd('Hoàn thành '.$id);
    }

    public function reComplete($id)
    {
        dd('Làm lại '.$id);
    }
}
