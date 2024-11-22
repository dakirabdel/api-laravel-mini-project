<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use App\Http\Requests\registerRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $rule=[
            "email"=> "required|email|max:40",
            "password"=> "required|between:4,16",      
        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails()){
            
            return response()->json(['error' => $validator->errors()]);
        }
        try {
            $credentials = $request->only('email', 'password'); 
            $token = Auth::guard('api')->attempt($credentials);
            if (!$token) {
                return response()->json(['error' => 'Can not find user']);
            }
            $user = Auth::guard('api')->user();
            $user->token = $token;
            return response()->json($user);
        } catch (Exception $e) {
            return response()->json(['msg' => $e->getMessage()]);
        }
    }
    
    public function register(Request $request){
        $rule=[
            "email"=> "required|email|max:40",
            "password"=> "required|between:4,16",
            'name'=>'required|max:40',       
        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails()){
            
            return response()->json(['error' => $validator->errors()]);
        }
        $user=User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->password)
        ]);
        if($user){
            
           return $this->login($request);;
        }
        else{
            return response()->json(["error"=> 'try again']);
        }
        
       
    }
}

