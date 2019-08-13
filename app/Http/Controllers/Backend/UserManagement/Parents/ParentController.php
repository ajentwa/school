<?php

namespace App\Http\Controllers\Backend\UserManagement\Parents;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\UserManagement\User;

class ParentController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'ASC')->where('role_id', '4')->paginate(10);
        return view('Backend/UserManagement/Parents/index')->with('users', $users);
    }
}
