<?php

namespace App\Http\Actions;

use App\Models\Task;

class UpdateTaskAction
{
    public function __invoke(Task $task, array $payload)
    {
        return $task->update($payload);
    }
}
