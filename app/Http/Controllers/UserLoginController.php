<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostLoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserLoginController extends Controller
{
    public function login(PostLoginRequest $request): JsonResponse
    {
        if (!\auth()->attempt([
            'email' => $request->validated('email'),
            'password' => $request->validated('password')
        ])) {
            return response()->json(
                [
                    'status' => false,
                    'data' => []
                ],
                Response::HTTP_UNAUTHORIZED
            );
        }

        return response()->json(
            [
                'status' => true,
                'data' => [
                    'token' => \auth()->user()->createToken($request->validated('email'))->plainTextToken
                ]
            ],
            Response::HTTP_OK
        );
    }

    public function logout(): JsonResponse
    {
        \auth()->user()->tokens()->delete();

        return response()->json(
            ['status' => 'success'],
            Response::HTTP_OK
        );
    }
}
