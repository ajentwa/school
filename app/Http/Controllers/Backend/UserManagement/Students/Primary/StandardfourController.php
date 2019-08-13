<?php

namespace App\Http\Controllers\Backend\UserManagement\Students\Primary;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Backend\UserManagement\User;
use App\Models\Backend\Classes\MyClass;

class StandardfourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderby('name','ASC')->where(['role_id'=>'4', 'class'=>'Standard Four'])->paginate(10);
        return view('Backend/UserManagement/Students/Primary/Standardfour/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend/UserManagement/Students/Primary/Standardfour/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required','string','max:255'],
            'code' => ['required','string','max:255'],
            'reg_number' => ['required','string','max:255'],
            'fees_status' => ['required','string','max:255'],
            'address' => ['required','string','max:255'],
            'gender' => ['required'],
            'orphan' => ['required'],
            'date_of_birth' => ['required','string','max:255'],
            'relative_name' => ['required','string','max:255'],
            'relative_occupation' => ['required','string','max:255'],
            'relative_phone1' => ['required','string','max:255'],
            'relative_phone2' => ['required','string','max:255'],
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

        // Create Student
        $user = new User;
        $user->name = $request->input('name');
        $user->reg_number = $request->input('reg_number');
        $user->fees_status = $request->input('fees_status');
        $user->address = $request->input('address');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->code = $request->input('code');
        $user->password = Hash::make($request->input('code'));
        $user->gender = $request->input('gender');
        $user->orphan = $request->input('orphan');
        $user->cover_image = $fileNameToStore;
        $user->role_id = $request->input('role_id');
        $user->class = $request->input('class_name');
        $user->occupation = $request->input('occupation');
        $user->relative_name = $request->input('relative_name');
        $user->relative_occupation = $request->input('relative_occupation');
        $user->relative_phone1 = $request->input('relative_phone1');
        $user->relative_phone2 = $request->input('relative_phone2');
        $user->save();

        return redirect('/standardfour')->with('success', 'Standard Four Student Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('Backend/UserManagement/Students/Primary/standardfour/show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classes = MyClass::all();
        $user = User::find($id);
        return view('Backend/UserManagement/Students/Primary/Standardfour/edit', compact('user', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => ['required','string','max:255'],
            'reg_number' => ['required','string','max:255'],
            'fees_status' => ['required','string','max:255'],
            'address' => ['required','string','max:255'],
            'gender' => ['required'],
            'orphan' => ['required'],
            'code' => ['required','string','max:255'],
            'date_of_birth' => ['required','string','max:255'],
            'relative_name' => ['required','string','max:255'],
            'relative_occupation' => ['required','string','max:255'],
            'relative_phone1' => ['required','string','max:255'],
            'relative_phone2' => ['required','string','max:255'],
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

        // Update Student
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->reg_number = $request->input('reg_number');
        $user->fees_status = $request->input('fees_status');
        $user->address = $request->input('address');
        $user->code = $request->input('code');
        $user->password = Hash::make($request->input('code'));
        $user->date_of_birth = $request->input('date_of_birth');
        $user->gender = $request->input('gender');
        $user->orphan = $request->input('orphan');
        $user->class = $request->input('class_name');
        if($request->hasFile('cover_image')){
            $user->cover_image = $fileNameToStore;
        }
        $user->role_id = $request->input('role_id');
        $user->occupation = $request->input('occupation');
        $user->relative_name = $request->input('relative_name');
        $user->relative_occupation = $request->input('relative_occupation');
        $user->relative_phone1 = $request->input('relative_phone1');
        $user->relative_phone2 = $request->input('relative_phone2');
        $user->save();

        return redirect('/standardfour')->with('success', 'Standard Four Student Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->cover_image != 'noimage.png'){
            Storage::delete('public/cover_image/'.$user->cover_image);
        }
        $user->delete(); 
        return redirect('/standardfour')->with('success', 'Standard Four Student Successfully Deleted!');
    }
}
