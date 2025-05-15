<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;
use App\Http\Services\RegisterService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(
        RegisterFormRequest $request,
        RegisterService $service
    ) {
        return DB::transaction(function () use ($request, $service) {
            $result = $service->make($request);
            if ($result) {
                return response()->json([
                    'success' => true,
                    'message' => 'User created successfully',
                ], 201);
            }

            return response()->json([
                'success' => false,
                'message' => 'User creation failed'
            ], 500);
        });
    }
}
