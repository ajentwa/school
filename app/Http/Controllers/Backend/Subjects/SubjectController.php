<?php

namespace App\Http\Controllers\Backend\Subjects;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\Subjects\Subject;
use App\Models\Backend\UserManagement\User;

class SubjectController extends Controller
{ 
    public function index()
    {
        $subjects = Subject::orderBy('subject_id', 'DESC')->paginate(10);
        return view('Backend/Subjects/index')->with('subjects', $subjects);
    }

    public function create()
    {
        $users = User::where('role_id', '3')->get();
        return view('Backend/Subjects/create', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'subject_code' => ['required','string','max:255'],
            'subject_name' => ['required','string','max:255'],
            'subject_teacher' => ['required','string','max:255'],
            'subject_book' => ['required','string','max:255'],
        ]);
       
        // Create Subject
        $subject = new Subject;
        $subject->subject_code = $request->input('subject_code');
        $subject->subject_name = $request->input('subject_name');
        $subject->subject_teacher = $request->input('subject_teacher');
        $subject->subject_book = $request->input('subject_book');
        $subject->save();
        return redirect('/subject')->with('success', 'Subject Successfully Added!');
    }

    public function show($subject_id)
    {
        $subject = Subject::find($subject_id);
        return view('Backend/Subjects/show')->with('subject', $subject);
    }

    public function edit($subject_id)
    {
        $subject = Subject::find($subject_id);
        $users = User::where('role_id', '3')->get();
        return view('Backend/Subjects/edit', compact('subject', 'users'));
    }

    public function update(Request $request, $subject_id)
    {
        $this->validate($request,[
            'subject_code' => ['required','string','max:255'],
            'subject_name' => ['required','string','max:255'],
            'subject_teacher' => ['required','string','max:255'],
            'subject_book' => ['required','string','max:255'],
        ]);

        // Update Subject
        $subject = Subject::find($subject_id);
        $subject->subject_code = $request->input('subject_code');
        $subject->subject_name = $request->input('subject_name');
        $subject->subject_teacher = $request->input('subject_teacher');
        $subject->subject_book = $request->input('subject_book');
        $subject->save();
        return redirect('/subject')->with('success', 'Subject Successfully Updated!');
    }

    public function destroy($subject_id)
    {
        $subject = Subject::find($subject_id);
        $subject->delete(); 
        return redirect('/subject')->with('success', 'Subject Successfully Deleted!');
    }
}
