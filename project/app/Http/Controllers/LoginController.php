<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function signup(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('dashboard'));
    }
    public function login() 
    {
        return 
    }
    public function logout(Request $request)
    {   
        Auth::logout($request);
    }
    public function dashboard()
    {

    }
}
