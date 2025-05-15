<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

     public function login(LoginFormRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(data: [
                'success' => false,
                'message' => 'Invalid credentials'
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;


        return response()->json([
            'success' => true,
            'message' => 'Login Successful',
            'user_type' => $user->user_type,
            'access_token' => $token,
            'token_type'   => 'Bearer'
        ], 200);
    }

    public function logout(Request $request)
    {
        request()->user()->tokens()->delete();
        return response()->json([
            'success' => true,
            'message' => 'Successfully logged out'
        ], 200);
    }
}
