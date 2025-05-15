<?php

namespace App\Http\Services;

use App\Http\Actions\StoreTaskAction;
use App\Http\Actions\UpdateTaskAction;
use App\Http\Requests\TaskFormRequest;
use App\Models\Task;

class TaskService
{
    public function __construct(
        public StoreTaskAction $storeAction,
        public UpdateTaskAction $updateAction
    ){}

    public function make(TaskFormRequest $request, ?Task $task = null)
    {
        return $request->isMethod('POST')
         ? ($this->storeAction)($request->validated())
         : ($this->updateAction)($task, $request->validated());
    }
}
