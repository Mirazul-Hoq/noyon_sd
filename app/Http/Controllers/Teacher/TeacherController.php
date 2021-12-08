<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Idea;

class TeacherController extends Controller
{
    public function showlist(){
        $data = Idea::all();
        return view('teacher/pages/home', ['ideas'=>$data]);
    }

    public function delete($id){
    	$obj = Idea::find($id);
    	if ($obj->delete()) {
    		return redirect()->to('/teacher/home');
    	}
    }

    public function edit($id){
    	$idea = Idea::find($id);
    	return view('teacher/pages/ideaedit',['idea'=>$idea]);
    }

    public function update(Request $req, $id){
    	$obj = Idea::find($id);
    	$obj->status = $req->status;
    	if ($obj->save()) {
    		return redirect()->to('/teacher/home');
    	}
    }
}
