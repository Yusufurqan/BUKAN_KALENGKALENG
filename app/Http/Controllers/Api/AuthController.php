<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function sign(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'data' => $validator->messages()
            ]);
        }

        $credentials = request(['email', 'password']);

        $token = auth()->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => false,
                'data' => 'Unauthorized'
            ], 401);
        }
        return $this->responseSuccesLogin($token);
    }

    protected function responseSuccesLogin($token)
    {
        $user = Auth::user();
        return [
            'status' => true,
            'data' => [
                'token' => $token,
                'email' => $user->email,
                'name' => $user->name
            ]
        ];
    }
}
