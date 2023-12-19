<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $auths = Auth::all();
        $data = compact('auths');

        return view('auth.index')->with($data);
    }

    public function registerPage()
    {
        return view('auth.registerpage');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' =>  'required|email',
            'password' => 'required|alpha_num|min:4',
        ]);

        $auth = new Auth();
        $auth->email = $request['email'];
        $auth->password = Hash::make($request['password']);
        $auth->save();

        return redirect()->back();
    }

    public function loginPage()
    {
        return view('auth.loginpage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' =>  'required|email',
            'password' => 'required|alpha_num|min:4',
        ]);

        $auth = Auth::where('email', $request->email)->first();

        if ($auth) {
            if (Hash::check($request->password, $auth->password)) {
                session()->put('login', $request->email);
            } else {
                return "<h2>Login failed, Wrong password!</h2>";
            }
        } else {
            return "<h2>User not found, please register!</h2>";
        }
    }

    public function logout()
    {
        session()->forget('login');
    }
}
