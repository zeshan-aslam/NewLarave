<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use App\Models\User;

class PatientController extends Controller
{

     public function __construct()
        {
            // $this->middleware('guest')->except('logout');
             
        }


	Public function PatientRegister(Request $request)

	{
		// $post= Post::find($id);
 //        $post->title = $request->input('title');
 //        $post->body = $request->input('body');

 //        $post->save();
		  
		    User::create($request->all());
			
			return redirect('/PatientLoginForm');
	}
	
  
	Public function PatientAuth(Request $request)

	{
        //     $this->validate($request, [
        //     'email'   => 'required|email',
        //     'password' => 'required|min:2'
        // ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

             // dd(Auth::user());
             	Auth::logout();
	            return Redirect('/PatientLoginForm');
            // return redirect()->intended('/PatientDashboard');
             }
             else
             {
             	echo "Your Credentials are invalid!";
             }
        // return back()->withInput($request->only('email', 'remember'));
    }   
          
	public function PatientLogout()
	{
		
	}
	Public function PatientDashboard()

	{
          return View('Phs.Patient.PatientDashboard');
	}
 
}
