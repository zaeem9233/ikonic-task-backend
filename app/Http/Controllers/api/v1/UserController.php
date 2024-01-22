<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user($keyword){
        $keyword = str_replace('@', '', $keyword);
        $user = User::where('name', 'like', '%'.$keyword.'%')->limit(1)->get(['email']);
        return response()->json(['user'=>$user], 200);
    }
}
