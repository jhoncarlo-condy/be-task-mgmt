<?php

namespace App\Http\Actions;

use App\Models\User;

class StoreUserAction
{
     public function __invoke($response)
    {
        return User::create(array_merge(
            $response,
            // ['user_role_id' => UserRole::where('name', 'user')->first()->id]
        ));
    }
}
