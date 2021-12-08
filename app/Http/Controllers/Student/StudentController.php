<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Group;
use App\Member;
use App\Course;
use Redirect;
use Session;
use DB;

class StudentController extends Controller
{   

    // public function group(Request $request){
    //     // return $request->session()->all();
    //     // dd($data->id);
    //     $members = 0;
    //     $data = Group::where('user_id', $request->session()->get('userid'))->first();
    //     if ($data) {
    //         $request->session()->put('groupname', $data->name);
    //         $request->session()->put('memberno', $data->noofmember);
    //         $request->session()->put('groupid', $data->id);
    //         $obj = Member::where('group_id', $data->id)->first();
    //         if ($obj) {
    //             $request->session()->put('memberid', $obj->id);
    //         }
    //         $members = Member::where('group_id', $request->session()->get('groupid'))->get();
    //         // if ($members) {
    //         //     dd($members);
    //         // }
    //     }
    //     // $e = $request->session()->get('memberid');
    //     // dd($e);
    //     // return $request->session()->all();
    // 	return view('student/pages/home', ['members'=>$members]);
    // }

    

    
}
