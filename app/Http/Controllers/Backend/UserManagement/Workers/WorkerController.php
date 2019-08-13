<?php

namespace App\Http\Controllers\Backend\UserManagement\Workers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Backend\UserManagement\User;

class WorkerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->where('role_id', '5')->paginate(10);
        return view('Backend/UserManagement/Workers/index', compact('users'));
    }

    public function create()
    {
        return view('Backend/UserManagement/Workers/create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','string','max:255'],
            'level' => ['required','string','max:255'],
            'reg_number' => ['required','string','max:255'],
            'occupation' => ['required','string','max:255'],
            'phone' => ['required','string','max:255'],
            'date_of_birth' => ['required','string','max:255'],
            'relative_name' => ['required','string','max:255'],
            'relative_phone1' => ['required','string','max:255'],
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

        // Create Worker
        $user = new User;
        $user->name = $request->input('name');
        $user->reg_number = $request->input('reg_number');
        $user->level = $request->input('level');
        $user->code = $request->input('code');
        $user->password = Hash::make($request->input('code'));
        $user->occupation = $request->input('occupation');
        $user->gender = $request->input('gender');
        $user->cover_image = $fileNameToStore;
        $user->phone = $request->input('phone');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->relative_name = $request->input('relative_name');
        $user->relative_phone1 = $request->input('relative_phone1');
        $user->role_id = $request->input('role_id');
        $user->save();

        return redirect('/worker')->with('success', 'Employee Added Successfully!');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('Backend/UserManagement/Workers/show')->with('user', $user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Backend/UserManagement/Workers/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => ['required','string','max:255'],
            'level' => ['required','string','max:255'],
            'reg_number' => ['required','string','max:255'],
            'occupation' => ['required','string','max:255'],
            'phone' => ['required','string','max:255'],
            'date_of_birth' => ['required','string','max:255'],
            'relative_name' => ['required','string','max:255'],
            'relative_phone1' => ['required','string','max:255'],
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
        $user->level = $request->input('level');
        $user->password = Hash::make($request->input('code'));
        $user->date_of_birth = $request->input('date_of_birth');
        $user->gender = $request->input('gender');
        $user->occupation = $request->input('occupation');
        if($request->hasFile('cover_image')){
            $user->cover_image = $fileNameToStore;
        }
        $user->phone = $request->input('phone');
        $user->relative_name = $request->input('relative_name');
        $user->relative_phone1 = $request->input('relative_phone1');
        $user->role_id = $request->input('role_id');
        $user->save();

        return redirect('/worker')->with('success', 'Employee Updated Successfully!');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if($user->cover_image != 'noimage.png'){
            Storage::delete('public/cover_image/'.$user->cover_image);
        }

        $user->delete(); 
        return redirect('/worker')->with('success', 'Employee Deleted Successfully!');
    }
}
