<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
      
        $user=User::Where(['email'=>$req->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($req->password,$user->password)){
            return "password and email does not matched";
        }
        else
        { 
            $req->session()->put('user',$user);
           return redirect('/');
        }
    }
}
