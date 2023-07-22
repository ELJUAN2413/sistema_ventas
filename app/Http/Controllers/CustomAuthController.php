<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use session;
use app\Models\User;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view(view:'auth.login');
    }

    public function customlogin(request $request)
    {
        $request->validate([
            'email'-> "requered",
            'passsword'-> "requered",
        ]);

        $credentials=$request->only(keys:'email', 'password');
        if (auth::attempt($credentials)){
            return redirect()->intended(default'dashboard')
            ->withsuccess('bienvenidos');
        }
        return redirect(to:"login")->withsuccess('las credenciales son incorrectas');
    }
    public function registration()
    {
        return view(view:'auth.registration');
    }
    public function customregistration(request $request)
    {
        $request-validate([
            "name"->'"required",
            "email"->"required|email|unique:users",
            "password"->"required|min:6",
        ]);
    }
}