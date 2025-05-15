<?php

namespace App\Http\Actions;

use App\Models\User;

class UpdateUserAction
{
    public function __invoke(User $user, array $payload)
    {
        return $user->update($payload);
    }
}
