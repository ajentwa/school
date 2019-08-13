<?php

namespace App\Http\Controllers\Backend\UserManagement\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Models\Backend\UserManagement\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->where('role_id', '1')->paginate(12);
        return view('Backend/UserManagement/Admin/index', compact('users'));
    }

    public function create()
    {
        return view('Backend/UserManagement/Admin/create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','string','max:255'],
            'code' => ['required','string','max:255'],
            'reg_number' => ['required','string','max:255'],
            'phone' => ['required','min:10'],
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
        } else {
            $fileNameToStore = 'noimage.png';
        }

        // Create Teacher
        $user = new User;
        $user->name = $request->input('name');
        $user->reg_number = $request->input('reg_number');
        $user->role_id = $request->input('role_id');
        $user->occupation = $request->input('occupation');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->code = $request->input('code');
        $user->password = Hash::make($request->input('code'));
        $user->gender = $request->input('gender');
        $user->cover_image = $fileNameToStore;
        $user->phone = $request->input('phone');
        $user->save();

        return redirect('/administrator')->with('success', 'Administrator Added Successfully!!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('Backend/UserManagement/Admin/show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Backend/UserManagement/Admin/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => ['required','string','max:255'],
            'reg_number' => ['required','string','max:255'],
            'code' => ['required','string','max:255'],
            'phone' => ['required','min:10'],
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
        $user->code = $request->input('code');
        $user->password = Hash::make($request->input('code'));
        $user->date_of_birth = $request->input('date_of_birth');
        $user->gender = $request->input('gender');
        if($request->hasFile('cover_image')){
            $user->cover_image = $fileNameToStore;
        }
        $user->phone = $request->input('phone');
        $user->role_id = $request->input('role_id');
        $user->occupation = $request->input('occupation');
        $user->save();

        return redirect('/administrator')->with('success', 'Administrator Updated Successfully!!');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if($user->cover_image != 'noimage.png'){
            Storage::delete('public/cover_image/'.$user->cover_image);
        }

        $user->delete(); 
        return redirect('/administrator')->with('success', 'Administrator Deleted Successfully!!');
    }

}
