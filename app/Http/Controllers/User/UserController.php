<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Http\Resources\UserResource;
use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function index(User $user)
    {
        $per_page = request()->query('per_page') ? request()->query('per_page') : 10;


        $result = $user->simplePaginate($per_page);

        $result->data = UserResource::collection($result);

        return response()->json($result, 200);
    }

    public function show(String $email)
    {
        $user = User::where('email', $email)->firstOrFail();

        return response()->json(new UserResource($user), 200);
    }

    public function profile(Request $request)
    {
        $user = Auth::user();

        return response()->json([
            'success' => true,
            'data' => new UserResource($user, )
        ], 200);
    }

    public function update(UserFormRequest $request, String $email, UserService $service)
    {
        $user = User::where('email', $email)->first();

        if(!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid user'
            ], 500);
        }

        $auth_user = Auth::user();
        if(($user->email == $auth_user->email) || ($auth_user->userRole->name == 'admin')) {
            return DB::transaction(function () use ($request, $service, $user){
                $result = $service->make($request, $user);
                if($result) {
                    return response()->json([
                        'success' => true,
                        'message' => 'User updated successfully',
                    ], 200);
                }
            });
        }

        return response()->json([
            'success' => false,
            'message' => 'Unable to update profile.'
        ], 500);
    }

    public function changePassword(UserFormRequest $request, UserService $service)
    {
        $user = Auth::user();

        if(!Hash::check($request->old_password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Incorrect old password'
            ], 500);
        }

        return DB::transaction(function () use ($request, $service, $user){
            $result = $service->make($request, $user);
            if($result) {
                return response()->json([
                    'success' => true,
                    'message' => 'Password changed successfully',
                ], 200);
            }
        });
    }
}
