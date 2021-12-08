<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;
use App\Member;
use App\Course;
use Redirect;
use Session;
use DB;

class GroupController extends Controller
{
    // Show the group page
    public function group(Request $request) {

        // $groups = Group::find($request->session()->get('userid')); // Finding group created by this user
        if ($group = Group::where('user_id', $request->session()->get('userid'))->first()) {
            $group = Group::where('user_id', $request->session()->get('userid'))->orderBy('id', 'desc')->first(); // Findig the last created group
            $member = Member::where('group_id', $group->id)->first();
            if (is_null($member)) {
                $request->session()->put('groupid', $group->id);
                $request->session()->put('memberno', $group->noofmember);
                $request->session()->put('member_msg', 'Successful');
                return Redirect::route('group.member');
            }
        }
        // $courses = Course::all(); //Sending course data to group page        
        return view('student/pages/group');
    }

    // STORING THE GROUP IN DB AND LISTING THE GROUP 
    public function groupstore(Request $request){
    	$obj = New Group();
    	// $obj->course_id = $request->course_id;
        $obj->name = $request->name;
        $obj->noofmember = $request->noofmember;
    	$obj->user_id = $request->session()->get('userid');
    	if ($obj->save()) {
            $request->session()->put('groupname', $obj->name);
            $request->session()->put('memberno', $obj->noofmember);
            $request->session()->put('groupid', $obj->id);
    	}
        return Redirect::route('student.group');
    }

    // EDIT THE GROUP
    public function groupedit($id) {
        $data = Group::findorFail($id);
        // $courses = Course::all();
        return view('student/pages/groupedit', compact('data'));
    }

    // UPDATEING THE GROUP IN DB AND LISTING THE GROUP 
    public function groupeditstore(Request $request, $id) {
        $request->session()->forget('memberid');
        $request->session()->forget('groupid');
        $obj = Group::findorFail($id);
        $obj->name = $request->name;
        $obj->noofmember = $request->noofmember;
        $obj->user_id = $request->session()->get('userid');
        // $obj->course_id = $request->course_id;
        if ($obj->update()) {
            $request->session()->put('groupname', $obj->name);
            $request->session()->put('memberno', $obj->noofmember);
            $request->session()->put('groupid', $obj->id);
            // $data = Group::findorFail($obj->id);
            return Redirect::route('group.member');
        }
    }

    // Group List
    public function grouplist() {
        $grps = DB::table('groups')
                  ->where('user_id', Session::get('userid'))
                  // ->join('courses', 'courses.id', '=', 'groups.course_id')
                  ->join('members', 'members.group_id', '=', 'groups.id')
                  ->select('groups.*', 'members.*')
                  ->get();
        dd($grps);
    }

    // DELETE THE GROUP
    public function groupdelete($id) {
        // return 'controller found';
        $delete = Group::findorFail($id);
        // dd($delete);
        if ($delete->delete()) {
            Session::forget('groupid');
            Session::forget('memberno');
            Session::forget('memberid');
            Session::forget('member_msg');
            return Redirect::route('student.group');
        }
    }

}
