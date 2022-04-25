<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'nama' => 'required|string',
            'id_rs' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'level' => 'required|string',
        ]);

        $user = User::create([
            'username' => $data['username'],
            'nama' => $data['nama'],
            'id_rs' => $data['id_rs'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'level' => $data['level'],
        ]);

        $token = $user->createToken('MedrecToken')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token,
        ];

        return response($response, 201);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response(['message'=>'Logged out successfully.']);
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:191',
            'password' => 'required|string',
        ]);

        $user = User::where('username', $data['username'])->first();
        if(!$user || !Hash::check($data['password'], $user->password))
        {
            return response(['message'=>'Invalid username or password.'], 401);
        }
        else
        {
            $token = $user->createToken('MedrecTokenLogin')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token,
            ];
            return response($response, 200);
        }
    }
}
