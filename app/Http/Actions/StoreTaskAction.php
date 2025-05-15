<?php

namespace App\Http\Actions;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class StoreTaskAction
{
    public function __invoke($response)
    {
        $user_id = Auth::user()->id;
        $maxOrder = Task::where('user_id', $user_id)->max('order') ?? 0;

        return Task::create(array_merge($response, [
            'user_id' => Auth::user()->id,
            'order'   => $maxOrder +1
        ]));
    }
}
