<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', compact('students'));
    }
    public function addStudent(Request $request)
    {

        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'blood_group' => 'required',
            'address' => 'required',
            'user_id' => '',
            'is_approve'  => ''
        ]);

        Student::create($attributes);

        return redirect()->back()->with('message', 'Added Successfully');

    }

    public function approveStudent($id){
        $students = Student::find($id);

        if ($students->is_approve == 0){
            $students->is_approve = 1;
            $students->save();

        }else{
            $students->is_approve = 0;
            $students->save();
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $users = User::all();
        return view('admin.student.edit', compact('users', 'student'));
    }

    public function update(Request $request){
        $student = Student::find($request->id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->number = $request->number;
        $student->blood_group = $request->blood_group;
        $student->address = $request->address;
        $student->user_id = $request->user_id;
        $student->is_approve = $request->is_approve;
        $student->save();

        return redirect()->back()->with('message', 'Update Successfully');

    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->back()->with('message', 'Delete Successfully');
    }
}
