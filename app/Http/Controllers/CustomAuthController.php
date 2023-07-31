<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Login;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view(view:'auth.login');
    }

    public function customlogin(request $request)
    {
        $request->validate([
            "email"=>'required',
            "passsword"=>'required',
        ]);

        $credentials=$request->only(['email', 'password']);
        if (auth::attempt($credentials)){
            return redirect()->intended('dashboard')
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
        $request->validate([
            'name' => "required",
            'email' => "required|email|unique:users",
            'password' => "required|min:6",
        ]);

        $data= $request->all();
        $user= $this->create($data);

        Auth::Login($user);
        return redirect("dashboard")->withsuccess("te has registrado satisfactoriamente");
    }
    public function create(array $data)
    {
        return user::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'password'=> Hash::make($data['password'])
        ]);
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect(to:"Login")->withsuccess('no tienes acesso a esta seccion');
    }
    public function signout(){
        session::flush();
        auth::logout();

        return redirect(to:'login');
    }
}
