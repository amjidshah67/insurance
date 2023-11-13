<?php

namespace App\Http\Controllers\Admin\Auth;

use  App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        if (!auth()->user()){
            return view('admin.auth.login');
        }else{
            return view('admin.Dashboard.index');
        }
    }
    public function register(){
        return view('admin.auth.registration');
    }
    public function login(StoreAuthRequest $request){
        $user = $request->only('email','password');
        if (Auth::attempt($user)){
    return redirect()->route('admin');
        }
        return redirect()->back()->with('success','Incorrect Username or Password');
    }
    public function register_post(StoreRegisterRequest $request){
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        $store = User::create($userData);
        if ($store) {
            return redirect()->route('admin-dashboard')->with('success', 'Great! You have a successfully regiter');
        }
    }
    public function logout(){
        return view('admin.auth.login');
    }
}
