<?php

namespace App\Http\Services;

use App\Http\Actions\UpdateUserAction;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(
        public UpdateUserAction $action
    ){}

    public function make(UserFormRequest $request, User $user)
    {
        $data = $request->validated();
        if($request->isMethod('POST')) {
            $data = [
                'password' => Hash::make($request->new_password)
            ];
        }

        $result = ($this->action)($user, $data);
        if($result) {
            return true;
        }
        return false;
    }
}
