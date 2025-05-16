<?php

namespace App\Http\Controllers\Task;

use App\Enum\Priority;
use App\Enum\Status;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class UserTaskController
{
    public function statistics()
    {
        $userId = Auth::id();

        $tasks = Task::where('user_id', $userId)
        ->whereIn('status', [Status::PENDING, Status::COMPLETED])
        ->get();

        $low_prio_task_count = $tasks->where('status', Status::PENDING)
            ->where('priority', Priority::LOW)->count();
        $mid_prio_task_count = $tasks->where('status', Status::PENDING)
            ->where('priority', Priority::MEDIUM)->count();
        $high_prio_task_count = $tasks->where('status', Status::PENDING)
            ->where('priority', Priority::HIGH)->count();

        $pending_tasks = $tasks->where('status', Status::PENDING)->count();
        $completed_tasks = $tasks->where('status', Status::COMPLETED)->count();

        return response()->json([
            'success'              => true,
            'data' => [
                'low_prio_task_count'  => $low_prio_task_count,
                'mid_prio_task_count'  => $mid_prio_task_count,
                'high_prio_task_count' => $high_prio_task_count,
                'pending_tasks'        => $pending_tasks,
                'completed_tasks'      => $completed_tasks
            ]
        ]);
    }
}
