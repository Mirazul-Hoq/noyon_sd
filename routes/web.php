<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'loggedin'],function(){

	Route::get('/', function () {
    	return view('welcome');
	});

});

Route::get('/login', 'LoginController@login')->name('user.login');
Route::post('/loginstore', 'LoginController@loginstore')->name('login.store');
Route::get('logout', 'LoginController@logout')->name('logout');
Route::get('/register', 'RegisterController@register')->name('user.register');
Route::post('/store', 'RegisterController@store')->name('user.store');

/*
|--------------------------------------------------------------------------
| Student Related Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'studentmiddleware'],function(){

	Route::get('/student/group', 'Student\GroupController@group')->name('student.group');
	Route::post('/student/group', 'Student\GroupController@groupstore')->name('group.store');
	Route::get('/group/edit/{id}', 'Student\GroupController@groupedit')->name('group.edit');
	Route::post('group/edit/store/{id}', 'Student\GroupController@groupeditstore')->name('group.editstore');
	Route::get('group/list', 'Student\GroupController@grouplist')->name('group.list');
	Route::get('group/delete/{id}', 'Student\GroupController@groupdelete')->name('group.delete');
	Route::get('group/member', 'Student\MemberController@memberadd')->name('group.member');
	Route::post('/group/member', 'Student\MemberController@member')->name('group.member');
	Route::get('/student/idea', 'Student\IdeaController@ideashow')->name('idea');
	Route::post('/student/idea', 'Student\IdeaController@idea')->name('idea.store');
	Route::get('/student/idea/list', 'Student\IdeaController@idealist')->name('idea.list');
	// Route::get('/student/group/{id}', 'StudentController@grouplist')->name('group.list');

});

/*
|--------------------------------------------------------------------------
| Teacher Related Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'teachermiddleware'],function(){

	Route::get('/teacher/home', 'Teacher\TeacherController@showlist')->name('teacher.home');
	Route::get('/teacher/delete/{id}', 'Teacher\TeacherController@delete')->name('idea.delete');
	Route::get('/teacher/idea/edit/{id}', 'Teacher\TeacherController@edit')->name('idea.edit');
	Route::post('/teacher/idea/update/{id}', 'Teacher\TeacherController@update')->name('idea.update');

});