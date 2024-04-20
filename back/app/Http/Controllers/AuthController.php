<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $fields['email'])->first();

        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Email or Password are incorrect',
            ], 401);
        }

        $token = $user->createToken('MyAppToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 202);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => 'Default Name',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        

        $token = $user->createToken('MyAppToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);
    }

    public function userProfile()
    {
        return response()->json(auth()->user());
    }

    public function logout(Request $request)
    {
        $user = auth()->user();

        if ($user) {
            $user->tokens()->delete();
            return [
                'message' => 'Logged out',
            ];
        }
    }
}
