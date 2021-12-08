<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Validator;

class RegisterController extends Controller
{
    public function register(){
    	return view('register');
    }

    public function store(Request $request){
    	$validatedData = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'email'       => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'student_id'  => ['required', 'integer'],
            'password'    => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    	$obj = new User();
    	$obj->name = $request->name;
        $obj->email = $request->email;
        $obj->student_id = $request->student_id;
    	$obj->password = $request->password;
    	if ($obj->save()) {
    		return redirect()->to('/login');
    	}
    }
}
