<?php

namespace App\Http\Controllers\Backend\UserManagement\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Backend\UserManagement\User;
use App\Models\Backend\Subjects\Subject;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('Backend/UserManagement/Profile/show')->with('user', $user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $subjects = Subject::all();
        return view('Backend/UserManagement/Profile/edit', compact('user', 'subjects'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => ['required','string','max:255'],
            'reg_number' => ['required','string','max:255'],
            'code' => ['required','string','max:255'],
            'phone' => ['required','string','max:255'],
            // 'salary' => ['required'],
            // 'level' => ['required','string','max:255'],
            // 'email' => ['required','string', 'email', 'max:255'],
            'date_of_birth' => ['required','string','max:255'],
            'cover_image' => 'image|nullable|max:2000'
        ]);

        // Handle File Upload
        if($request->hasfile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_image', $fileNameToStore);
        } 

        // Update Teacher
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->reg_number = $request->input('reg_number');
        $user->level = $request->input('level');
        $user->code = $request->input('code');
        $user->subject = $request->input('subject');
        $user->password = Hash::make($request->input('code'));
        $user->date_of_birth = $request->input('date_of_birth');
        $user->gender = $request->input('gender');
        if($request->hasFile('cover_image')){
            $user->cover_image = $fileNameToStore;
        }
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->salary = $request->input('salary');
        $user->role_id = $request->input('role_id');
        $user->occupation = $request->input('occupation');
        $user->save();

        return redirect('/profile/show/'.$id)->with('success', 'Profile Updated Successfully!!');
    }

}
