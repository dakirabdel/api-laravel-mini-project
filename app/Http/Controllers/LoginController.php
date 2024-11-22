<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Http\Requests\registerRequest;
use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(Request $request){
        return view("login");
    }
    public function login(loginRequest $request){
        // $request->validate([
        //     // "email"=> "required|email",
        //     // "password"=> "required"
        // ]);
        $email=$request->email;
        $password=$request->password;
        $credentials=["email"=>$email,"password"=>$password];

        if(Auth::attempt($credentials)){
            // $user=User::where("email",$email);
            // return to_route("home",compact("user"));
            
            $request->session()->regenerate();

            return to_route("home");
        }
        else{
            return back()->withErrors(['loginfaild'=>'email or password incorrect'])->onlyInput("email");
        }
        

        // return $request['username']." ". $request['password'];
        // return redirect()->route("home");
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route("login.show");
    }

    public function registerShow(Request $request){
        return view("register");
    }
    public function register(registerRequest $request){
        // $request->validate([
        //     'name'=>'required|max:40',
        //     "email"=> "required|email|max:40",
        //     'password'=>'confirmed|between:4,16',
        // ]);
        $name=$request->name;
        $password=Hash::make($request->password);
        $email=$request->email;
        User::create([
            "name"=>$name,
            "email"=>$email,
            "password"=>$password
        ]);
        return to_route('login.show');
    }




}
