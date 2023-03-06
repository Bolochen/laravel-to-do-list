<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get()->sortBy(['urgent', 'created_at']);

        return view('index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'urgent' => 'required'
        ]);

        Task::create($validatedData);

        return redirect('/');
    }

    public function destroy(Task $task)
    {

        Task::destroy($task->id);

        return redirect('/');
    }
}
