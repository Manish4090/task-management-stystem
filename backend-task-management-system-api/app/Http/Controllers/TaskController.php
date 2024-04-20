<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        $tasks = Task::where('user_id', auth()->user()->id)->get();
        return response()->json($tasks);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request using the CreateTaskRequest form request

        // Create a new task instance
        $task = new Task();
        $task->user_id = auth()->user()->id;
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->status = $request->input('status');
        $task->deadline = $request->input('deadline');

        // Save the task to the database
        $task->save();

        return response()->json(['message' => 'Task created successfully', 'task' => $task], 201);
    }

    /**
     * Display the specified resource.
     */
    
    public function show(string $id)
    {
        $task = Task::findOrFail($id);
        $task['deadline'] = Carbon::parse($task['deadline'])->format('M d, Y');
        return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //dd($request->all(), $id);
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json(['message' => 'Task updated successfully', 'task' => $task], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Task deleted successfully']);
    }
}
