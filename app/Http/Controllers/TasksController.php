<?php

namespace App\Http\Controllers;

use App\Http\Requests\Store_TasksRequest;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{


    public function createTask(Store_TasksRequest $request)
    {
        $validated = $request->validated();
        $tasks = Tasks::create($validated);
    }

    public function getAllTasks()
    {
        $tasks = Tasks::all();
        return view('index', compact('tasks'));
    }
}
