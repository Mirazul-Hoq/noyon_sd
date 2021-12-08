<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Idea;
use App\Course;
use DB;

class IdeaController extends Controller
{
    public function ideashow(){
        $courses = Course::all();
    	return view('student/pages/idea', ['courses'=>$courses]);
    }

    public function idea(Request $request){
    	$obj = New Idea();
        $obj->course_id = $request->course_id;
    	$obj->title = $request->title;
    	$obj->description = $request->description;
    	if ($obj->save()) {
    		return redirect()->to('/student/idea/list');
    	}
    }

    public function idealist(){
        $data = DB::table('ideas')
                  ->join('courses', 'ideas.course_id', '=', 'courses.id')
                  ->select('ideas.*', 'courses.name as cname', 'courses.course_code as code')
                  ->get();
        return view('student/pages/idealist',['ideas'=>$data]);
    }

}
