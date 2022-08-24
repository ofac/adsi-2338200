<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validateData = $request->validate([
          'name'     => 'required',
          'email'    => 'required|email|unique:users',
          'password' => 'required|confirmed'
        ]);

        /*
        $validateData = Validator::make($request->all(), [
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        
        if ($validateData->fails()) {
            return response()->json($validateData->errors(), 422);
        }

        */
        

        $validateData['password'] = Hash::make($request->password);
        $user = User::create($validateData);

        $accessToken = $user->createToken('authToken')->accessToken;
        return response([
            'user' => $user,
            'access_token' => $accessToken
        ], 201);
    }

    public function login(Request $request) {
       $validateLogin = $request->validate([
          'email'    => 'required|email',
          'password' => 'required'
        ]);

        if (!auth()->attempt($validateLogin)) {
            return response([
               'message' => "This User doesn't exist!"
            ], 400);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response([
            'user' => auth()->user(),
            'access_token' => $accessToken
        ]);
    }
}
