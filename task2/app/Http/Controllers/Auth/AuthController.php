<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;



class AuthController extends Controller
{
   

    public function index()
    {
        return view('login');
    }


  

    public function regisation()
    {
        return view('regisation');
    }

    public function postLogin(Request $request)
    {
    $request ->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if(Auth::attempt($credentials)) {
        return redirect()->intended('dashboard')
             ->withSuccess('You have Successfully loggedin');
    }

    return redirect("login")->withSuccess('Oppes! You have entered invaild credentials');
}

public function postRegisation(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    $data = $request->all();
    $check = $this->create($data);

    return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
}

public function dashboard()
{
    if(Auth::check()){
        return view('dashboard');
    }
    return redirect("login")->withSuccess('Opps! You do not have access');
}

public function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
    ]);
}

public function logout() {
    Session::flush();
    Auth::logout();


    return redirect('login');
}

}