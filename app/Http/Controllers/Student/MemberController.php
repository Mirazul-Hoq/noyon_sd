<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Group;
use App\Member;
use App\Course;
use Redirect;
use Session;

class MemberController extends Controller
{
    public function memberadd() {
        if (Session::has('groupid')) {
            $group = Group::find(Session::get('groupid'));
            $course = Course::where('id', $group->course_id)->first();
            return view('student/pages/member', compact('group', 'course'));
        }
        return view('student/pages/member');
    }

    // STORING THE MEMBER
    public function member(Request $request) {
        $names = $request->name;
        $emails = $request->email;
        $cardids = $request->cardid;
        // dd($names, $emails, $cardids);
        for($i = 0; $i < $request->session()->get('memberno'); $i++){
            // Member::create([$names[$i], [$names[$i]])
            $obj = New Member();
            $obj->name = $names[$i];
            $obj->email = $emails[$i];
            $obj->cardid = $cardids[$i];
            $obj->group_id = $request->session()->get('groupid');
            $obj->save();
        }
        $request->session()->put('memberid', $obj->id);
        $request->session()->forget('member_msg');
        return Redirect::route('student.group');
    }
}
