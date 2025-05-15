<?php

namespace App\Http\Repositories;

use App\Http\Requests\TaskFormRequest;
use App\Http\Services\TaskService;
use App\Models\Task;

interface TaskRepositoryInterface
{
    public function all(Task $task);
    public function find(Task $task);
    public function create(TaskFormRequest $request, TaskService $service);
    public function update(TaskFormRequest $request, Task $task, TaskService $service);
    public function delete(Task $task);
}
