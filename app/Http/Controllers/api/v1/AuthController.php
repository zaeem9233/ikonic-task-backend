<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\LoginRequest;
use App\Http\Requests\api\v1\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $login){
        
        if(Auth::attempt(['email'=>$login->email, 'password'=>$login->password])){
            $user = Auth::user();
            $user->token = $user->createToken('MyApp')->plainTextToken;

            return response()->json($user, 200);
        }

        return response()->json(['error'=>'Invalid credentials'], 401);
    }

    public function register(RegisterRequest $register){

        $user = User::create([
            'name' => $register->name,
            'email' => $register->email,
            'password' => $register->password,
            'updated_at' => now(),
            'created_at' => now()
        ]);
        $user->token = $user->createToken('MyApp')->plainTextToken;
        
        return response()->json($user, 200);
    
    }

    public function logout(Request $request){

        $request->user()->currentAccessToken()->delete();

        return response()->json([], 200);

    }
}
