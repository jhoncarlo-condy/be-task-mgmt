<?php
namespace App\Http\Providers;

use App\Http\Repositories\TaskRepositoryInterface;
use App\Http\Requests\TaskFormRequest;
use App\Http\Services\TaskService;
use App\Models\Task;

class TaskServiceProvider
{
    protected $taskRepository;

    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAllTasks(Task $task)
    {
        return $this->taskRepository->all( $task);
    }

    public function getTaskById(Task $task)
    {
        return $this->taskRepository->find($task);
    }

    public function createTask(TaskFormRequest $request, TaskService $service)
    {
        return $this->taskRepository->create($request, $service);
    }

    public function updateTask(TaskFormRequest $request, Task $task, TaskService $service)
    {
        return $this->taskRepository->update($request, $task, $service);
    }

    public function deleteTask(Task $task)
    {
        return $this->taskRepository->delete($task);
    }
}
