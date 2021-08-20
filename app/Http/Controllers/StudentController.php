<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
class StudentController extends Controller
{
  public function index()
  {
  	return view('Loginform');
  }
  public function register(Request $Request)
  {
  	$student= new Student;
  	$student->name     = $Request->name;
  	$student->email    = $Request->email;
  	$student->password = Hash::make($Request->password);
  	$student->save();

  	// $post= Post::find($id);
 //        $post->title = $request->input('title');
 //        $post->body = $request->input('body');

 //        $post->save();
  }
  public function authenticate(Request $Request)
  {
  	
      if (Auth::guard('student')->attempt(['email' => $Request->email, 'password' => $Request->password])) {

             dd(Auth::guard('student'));
	          
             }
             else
             {
             	echo "Your Credentials are invalid!";
             }
  }
}
