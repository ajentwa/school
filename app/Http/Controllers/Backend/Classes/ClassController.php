<?php

namespace App\Http\Controllers\Backend\Classes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Classes\MyClass;
use App\Models\Backend\UserManagement\User;

class ClassController extends Controller
{    
    public function index()
    {
        $classes = MyClass::orderBy('class_id', 'ASC')->paginate(10);
        return view('Backend/Classes/index')->with('classes', $classes);
    }

    public function create()
    {
        $users = User::orderBy('id', 'ASC')->where('role_id', '3')->get();
        return view('Backend/Classes/create')->with('users', $users);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'class_name' => ['required','string','max:255'],
            'class_students' => ['required','integer','max:255'],
        ]);
       
        // Create Class
        $class = new MyClass;
        $class->class_name = $request->input('class_name');
        $class->class_students = $request->input('class_students');
        $class->class_teacher = $request->input('class_teacher');
        $class->save();
        return redirect('/class')->with('success', 'Class Successfully Added!');
    }

    public function show($class_id)
    {
        $class = MyClass::find($class_id);
        return view('Backend/Classes/show')->with('class', $class);
    }

    public function edit($class_id)
    {
        $users = User::orderBy('id', 'ASC')->where('role_id', '3')->get();
        $class = MyClass::find($class_id);
        return view('Backend/Classes/edit', compact('class', 'users'));
    }

    public function update(Request $request, $class_id)
    {
        $this->validate($request,[
            'class_name' => ['required','string','max:255'],
            'class_students' => ['required','integer','max:255'],
        ]);

        // Update Subject
        $class = MyClass::find($class_id);
        $class->class_name = $request->input('class_name');
        $class->class_teacher = $request->input('class_teacher');
        $class->class_students = $request->input('class_students');
        $class->save();
        return redirect('/class')->with('success', 'Class Successfully Updated!');
    }

    public function destroy($class_id)
    {
        $class = MyClass::find($class_id);
        $class->delete(); 
        return redirect('/class')->with('success', 'Class Successfully Deleted!');
    }
}
