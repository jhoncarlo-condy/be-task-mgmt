<?php

namespace App\Http\Repositories;

use App\Http\Requests\TaskFormRequest;
use App\Http\Resources\TaskResource;
use App\Http\Services\TaskService;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskRepository implements TaskRepositoryInterface
{
     public function all(Task $task)
    {
        if(Auth::user()->isUser()) {
            $task = $task->where('user_id', Auth::user()->id);
        }

        $per_page = request()->query('per_page') ?: 10;

        $result = $task->simplePaginate($per_page);

        $result->data = TaskResource::collection($result);

        return response()->json($result, 200);
    }

    public function find(Task $task)
    {
        if(Auth::user()->isAdmin()
        || $task->user_id == Auth::user()->id) {
            return [
                'success' => true,
                'message' => new TaskResource($task)
            ];
        }else{
            return [
                'success' => false,
                'message' => 'Task Not Found'
            ];
        }

    }

    public function create(TaskFormRequest $request, TaskService $service)
    {
        return DB::transaction(function () use ($request, $service) {
            $result = $service->make($request);
            if ($result) {
                return[
                    'success' => true,
                    'message' => 'Task Created Successfully',
                ];
            }

            return [
                'success' => false,
                'message' => 'Task Creation Failed'
            ];
        });
    }

    public function update(TaskFormRequest $request, Task $task, TaskService $service)
    {
        return DB::transaction(function () use ($request, $service, $task) {
            $result = $service->make($request, $task);
            if ($result) {
                return[
                    'success' => true,
                    'message' => 'Task Updated Successfully',
                ];
            }

            return [
                'success' => false,
                'message' => 'Task Update Failed'
            ];
        });
    }

    public function delete(Task $task)
    {
        if(Auth::user()->isAdmin()) {
            $task->delete();

            return [
                'success' => 'true',
                'message' => 'Task Successfully Deleted'
            ];
        }

        return [
            'success' => false,
            'message' => 'Task Deletion Failed'
        ];
    }
}
