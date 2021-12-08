<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;
class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('web');
    }
    public function login(){
    	return view('login');
    }

    public function loginstore(Request $request){

        $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string'],
        ]);

    	$email = $request->email;
    	$password = $request->password;
    	$obj = User::where('email', '=', $email)
    			   ->where('password', '=', $password)
    			   ->first();
    	if ($obj) {
    		$request->session()->put('userid',$obj->id);
            $request->session()->put('username',$obj->name);
			$request->session()->put('useremail',$obj->email);
            $request->session()->put('userrole',$obj->role);
			$request->session()->put('usercardid',$obj->student_id);
			if ($obj->role == 'teacher') {
                return redirect()->to('/teacher/home');
            } elseif ($obj->role == 'student') {
                return redirect()->to('/student/group');                
            }
    	} else {
    		return back()->with('incorrect', 'Your email id or password is incorrect. Try again...!!');
    	}
    }
    public function logout(Request $request) {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
