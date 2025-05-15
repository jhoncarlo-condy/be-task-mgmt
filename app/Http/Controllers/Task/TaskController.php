<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskFormRequest;
use App\Http\Providers\TaskServiceProvider;
use App\Http\Services\TaskService;
use App\Models\Task;

class TaskController extends Controller
{
     protected $taskServiceProvider;

    public function __construct(TaskServiceProvider $taskServiceProvider)
    {
        $this->taskServiceProvider = $taskServiceProvider;
    }

    public function index(Task $task)
    {
        return response()->json($this->taskServiceProvider->getAllTasks($task));
    }

    public function show(Task $task)
    {
        return response()->json($this->taskServiceProvider->getTaskById($task));
    }

    public function store(TaskFormRequest $request, TaskService $service)
    {
        return response()->json($this->taskServiceProvider->createTask($request, $service));
    }


    public function update(TaskFormRequest $request, Task $task, TaskService $service)
    {
        return response()->json($this->taskServiceProvider->updateTask($request, $task, $service));
    }

    public function destroy(Task $task)
    {
        return response()->json($this->taskServiceProvider->deleteTask($task));
    }
}
