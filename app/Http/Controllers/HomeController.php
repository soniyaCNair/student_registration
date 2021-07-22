<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

public function index()
{
    return view('registration');
}
public function register(Request $request)
{

    $user = new User();
    $user->name    = $request->sname;
    $user->age     = $request->age;
    $user->gender  = $request->gender;
    $user->teacher = $request->teacher;
    $user->save();
    return redirect('/display')->with('status','Data saved successfully');
}
public function display()
{
    $data = User::all();

    return view('/display',compact('data'));
}
public function edit($id)
{
    $user = User::find($id);
    return view('edit')->with('user',$user);;
}
public function update( Request $request,$id)
{
    $user = User::find($id);
    $user->name = $request->sname;
    $user->age = $request->age;
    $user->gender = $request->gender;
    $user->teacher = $request->teacher;
    $user->update();
    return redirect('/display')->with('status','Updated');


}

public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect('/display')->with('status','Updated');

}
 public function mark(Request $request)
{
    $data = DB::table('users')->get();
    return view('marks',compact('data'));
}

public function marklist(Request $request)
{
    
    $subject = new Subject();
    $subject->stu_name = $request->name;
    $subject->maths = $request->maths;
    $subject->science = $request->science;
    $subject->history = $request->history;
    $subject->term = $request->term;
    $subject->save();
    return redirect('/student')->with('status','Updated');
    
}
public function student()
{

    $data = Subject::all();
    return view('student',compact('data'));
}
public function edit_detail($id)
{
    $data = DB::table('users')->get();
    $student = Subject::find($id);
    return view('edit_details',compact('student','data'));
}
public function update_detail( Request $request,$id)
{
    $student = Subject::find($id);
    $student->stu_name = $request->name;
    $student->maths = $request->maths;
    $student->science= $request->science;
    $student->history = $request->history;
    $student->update();
    return redirect('/student')->with('status','Updated');


}

public function delete($id)
{
    $sub = Subject::findOrFail($id);
    $sub->delete();
    return redirect()->back()->with('status','Deleted');

}

}
